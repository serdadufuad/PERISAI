<div>
    <div class="row">
        <div class="col-md-7 stretch-card grid-margin">
            <div wire:ignore id='map' class="card card-rounded shadow-black" style='width: 100%; height: 550px; margin-top: 5px; margin-lef: 20px;'></div>
            <div wire:ignore id="geocoder" class="geocoder"></div>
        </div>
        <div class="col-md-5 stretch-card grid-margin">
            <form wire:submit.prevent="save_kunker" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="data_titik"><b>Data Titik :</b></label>
                            <input wire:model="data_titik" type="text" class="form-control form-control-lg" id="data_titik" placeholder="Data Titik"/>
                            @error('data_titik') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="long"><b>Longitude :</b></label>
                            <input wire:model="long" type="text" class="form-control form-control-lg" id="long" placeholder="Longitude"/>
                            @error('long') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lat"><b>Latitude :</b></label>
                            <input wire:model="lat" type="text" class="form-control form-control-lg" id="lat" placeholder="Latitude"/>
                            @error('lat') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" wire:ignore>
                        <div class="form-group">
                            <label for="select_vvip"><b>VVIP :</b></label>
                            <select class="js-example-basic-single form-control form-control-lg" id="select2" name="select_vvip">
                                <option value="" disabled selected>- Pilih VVIP</option>
                                <option value="Presiden">- Presiden</option>
                                <option value="Presiden dan Ibu Negara">- Presiden dan Ibu Negara</option>
                                <option value="Ibu Negara">- Ibu Negara</option>
                                <option value="Tamu Negara">- Tamu Negara</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div wire:ignore id="input_vvip" class="form-group" style="display: none;">
                            <label for="nama_vvip"><b>Nama VVIP :</b></label>
                            <input wire:model="nama_vvip" wire:mode="nama_vvip" type="text" class="form-control form-control-lg" id="nama_vvip" placeholder="Nama VVIP"/>
                            @error('nama_vvip') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tgl_berangkat"><b>Berangkat :</b></label>
                            <input wire:ignore wire:mode="tgl_berangkat" type="data" class="form-control form-control-lg" id="tgl_berangkat" placeholder="MM/DD/YYYY"/>
                            @error('tgl_berangkat') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tgl_pulang"><b>Pulang :</b></label>
                            <input wire:ignore wire:mode="tgl_pulang" type="data" class="form-control form-control-lg" id="tgl_pulang" placeholder="MM/DD/YYYY"/>
                            @error('tgl_pulang') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div wire:ignore class="col-md-12">
                        <div class="form-group">
                            <label for="select2_kegiatan" ><b>Kegiatan :</b></label>
                            <select class="js-example-basic-multiple" id="select2_kegiatan" multiple="multiple" style="width: 100%;">
                                @foreach ($data_kegiatan as $dk)
                                    <option value="{{ $dk->id }}">{{ $dk->kegiatan }}</option>
                                @endforeach
                            </select>
                            @error('kegiatan') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama_kegiatan"><b>Nama Kegiatan :</b></label>
                            <input wire:model="nama_kegiatan" type="text" class="form-control form-control-lg" id="nama_kegiatan" placeholder="Nama Kegiatan"/>
                            @error('nama_kegiatan') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input wire:model="file_ebook" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-lg btn-primary mr-2"> Submit </button>
                            <button class="btn btn-lg btn-danger">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
<!-- Livewire Inject Start -->
<script>
document.addEventListener('livewire:load', () => {
    //----------------------------- Mapbox Start ----------------------------//
        const defaultLocation = [117.1393089, -0.5017804]
        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v12',
            center: defaultLocation,
            zoom: 3.3,
            projection: 'globe',
            language: 'id-ID',
        });

        map.on('style.load', () => {
            map.setFog({});
            map.addControl(new mapboxgl.NavigationControl());
        });
        const geocoder = new MapboxGeocoder({
            accessToken: '{{ env('MAPBOX_KEY') }}',
            language: 'id-ID',
            mapboxgl: mapboxgl,
            marker: false,
        });
        map.addControl(geocoder);

        var marker = new mapboxgl.Marker();
        map.on('click', (e) => {
            var long_click = e.lngLat.lng;
            var lat_click = e.lngLat.lat;
            marker.setLngLat({lng: long_click, lat: lat_click}).addTo(map);
            var url = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+long_click+","+lat_click+".json?language=id-ID&access_token="+mapboxgl.accessToken;
            $.get(url, function(data){
                let data_geocoder = data.features;
                    if (data_geocoder.length < 1) {
                        nama_titik_lokasi = "";
                        @this.long = "";
                        @this.lat = "";
                        alert("Data Tidak Ditemukan. Silahkan Clik Lokasi Lain atau Gunakan Pencarian ^_^");
                    } else {
                        let nama_titik_lokasi = data_geocoder[0].place_name;
                        let longitude = data_geocoder[0].center[0];
                        let latitude = data_geocoder[0].center[1];
                        @this.data_mapbox = data_geocoder;
                        @this.data_titik = nama_titik_lokasi;
                        @this.long = longitude;
                        @this.lat = latitude;
                        //console.log(data_geocoder);
                        //console.log(nama_titik_lokasi);
                    }
            });
        });

        geocoder.on('result', function(e){
            map.once('moveend', function(){
                const long_move = e.result.geometry.coordinates[0];
                const lat_move = e.result.geometry.coordinates[1];
                var url = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+long_move+","+lat_move+".json?language=id-ID&access_token="+mapboxgl.accessToken;
                $.get(url, function(data){
                let data_geocoder = data.features;
                    if (data_geocoder.length < 1) {
                        nama_titik_lokasi = "";
                        @this.long = "";
                        @this.lat = "";
                        alert("Data Tidak Ditemukan. Silahkan Clik Lokasi Lain atau Gunakan Pencarian ^_^");
                    } else {
                        let nama_titik_lokasi = data_geocoder[0].place_name;
                        let longitude = data_geocoder[0].center[0];
                        let latitude = data_geocoder[0].center[1];
                        @this.data_mapbox = data_geocoder;
                        @this.data_titik = nama_titik_lokasi;
                        @this.long = longitude;
                        @this.lat = latitude;
                        marker.setLngLat({lng: longitude, lat: latitude}).addTo(map);
                        //console.log(data_geocoder);
                        //console.log(nama_titik_lokasi);
                    }
                });
            });
        });
    //----------------------------- Mapbox End ----------------------------//
    //----------------------------- Select 2 Start ----------------------------//
    $('#select2').select2();
    $('#select2').on('change', function(){
        let x = document.getElementById('input_vvip')
        let select2_value = $(this).val();
        if (select2_value == "Tamu Negara") {
            x.style.display = "block";
            @this.vvip = $(this).val();
            @this.nama_vvip = "";
            document.getElementById("nama_vvip").focus();
        } else if (select2_value == "Presiden"){
            x.style.display = "none";
            @this.nama_vvip = $(this).val();
            @this.vvip = $(this).val();
        } else if (select2_value == "Presiden dan Ibu Negara"){
            x.style.display = "none";
            @this.nama_vvip = $(this).val();
            @this.vvip = $(this).val();
        }   else if (select2_value == "Ibu Negara"){
            x.style.display = "none";
            @this.nama_vvip = $(this).val();
            @this.vvip = $(this).val();
        }   else {
            x.style.display = "none";
            @this.nama_vvip = "";
            @this.vvip = "";
        }
    });

    $('#select2_kegiatan').select2();
    $('#select2_kegiatan').on('change', function(){
        @this.kegiatan = $(this).val();
    })
    //----------------------------- Select 2 End ----------------------------//
    //----------------------------- Datepicker Start ----------------------------//
    $('#tgl_berangkat').datepicker({
            onSelect: function(dateText, inst){
                $('#tgl_pulang').datepicker('option', 'minDate', new Date(dateText));
                @this.tgl_berangkat = dateText;
            },
        });

        $('#tgl_pulang').datepicker({
            onSelect: function(dateText, inst){
                $('#tgl_berangkat').datepicker('option', 'maxDate', new Date(dateText));
                @this.tgl_pulang = dateText;
            }
        });
    //----------------------------- Datepicker End ----------------------------//

});




</script>
    <!-- Datepicker -->
    <script src="{{ asset('js/datepicker/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datepicker/jquery-ui.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>


<!-- Script Page Inject End -->
@endpush
