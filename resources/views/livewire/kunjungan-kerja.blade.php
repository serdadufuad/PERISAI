

<div>
<!-- second row starts here -->
<div class="row">
    <div class="col-md-12 stretch-card grid-margin">
        <div class="card card-rounded shadow-black">
            <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="col-md-6 stretch-card grid-margin">
                        <div wire:ignore id='map' class="card card-rounded animated-shadow-blue" style='width: 100%; height: 620px;'></div>
                        <div wire:ignore id="geocoder" class="geocoder"></div>
                    </div>
                    <div class="col-md-6 stretch-card grid-margin">
                        <div class="card card-rounded animated-shadow-blue">
                            <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="data_titik"><b>Data Titik :</b></label>
                                                    <input wire:model="data_titik" type="text" class="form-control form-control-lg" id="data_titik" placeholder="Data Titik" disabled/>
                                                    @error('data_titik') <small class="text-danger">{{ $message }}</small>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="long"><b>Longitude :</b></label>
                                                    <input wire:model="long" type="text" class="form-control form-control-lg" id="long" placeholder="Longitude" required disabled/>
                                                    @error('long') <small class="text-danger">{{ $message }}</small>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lat"><b>Latitude :</b></label>
                                                    <input wire:model="lat" type="text" class="form-control form-control-lg" id="lat" placeholder="Latitude" required disabled/>
                                                    @error('lat') <small class="text-danger">{{ $message }}</small>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div wire:ignore class="form-group">
                                                    <label><b>VVIP :</b></label>
                                                    <select class="js-example-basic-single form-control-sm" style="width: 100%;" onchange="showDiv(this)">
                                                        <option value="" disabled selected>Pilih VVIP</option>
                                                        <option value="1">- Presiden</option>
                                                        <option value="2">- Presiden dan Ibu Negara</option>
                                                        <option value="3">- Ibu Negara</option>
                                                        <option value="4">- Tamu Negara</option>
                                                    </select>
                                                    @error('vvip') <small class="text-danger">{{ $message }}</small>@enderror
                                                </div>
                                            </div>
                                            <div wire:ignore id="vvip_div" class="col-md-6" style="display: none;">
                                                <div class="form-group">
                                                    <label for="vvip"><b>Jabatan dan Nama VVIP :</b></label>
                                                    <input wire:model="vvip" type="text" class="form-control form-control-lg" id="vvip" placeholder="" value=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_berangkat"><b>Berangkat :</b></label>
                                                    <input type="text" class="form-control form-control-lg" id="tgl_berangkat" placeholder="MM/DD/YYYY"/>
                                                    @error('tgl_berangkat') <small class="text-danger">{{ $message }}</small>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_pulang"><b>Pulang :</b></label>
                                                    <input type="text" class="form-control form-control-lg" id="tgl_pulang" placeholder="MM/DD/YYYY"/>
                                                    @error('tgl_pulang') <small class="text-danger">{{ $message }}</small>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="kegiatan" ><b>Kegiatan :</b></label>
                                                    <select wire:model="kegiatan" class="js-example-basic-multiple" multiple="multiple" style="width: 100%;">
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
                                                <div wire:ignore class="form-group">
                                                    <label for="nama_kegiatan"><b>Nama Kegiatan :</b></label>
                                                    <input wire:model="nama_kegiatan" type="text" class="form-control form-control-lg" id="nama_kegiatan" placeholder="Nama Kegiatan"/>
                                                    @error('nama_kegiatan') <small class="text-danger">{{ $message }}</small>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group custom-file">
                                                    <input wire:model="file_ebook" type="file" class="custom-file-input" id="customFile">
                                                    @error('file_ebook') <small class="text-danger">{{ $message }}</small>@enderror
                                                    @if($file_ebook)
                                                    <label wire:ignore class="custom-file-label" for="customFile">Upload E-Book</label>
                                                    @endif
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- second row end here -->
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

        const geocoder = new MapboxGeocoder({
            accessToken: '{{ env('MAPBOX_KEY') }}',
            language: 'id-ID',
            mapboxgl: mapboxgl,
            marker: false,
        });

        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
        map.on('style.load', () => {
            map.setFog({});
            map.addControl(new mapboxgl.NavigationControl());
        });


        var marker = new mapboxgl.Marker();
        map.on('click', (e) => {
            const longitude = e.lngLat.lng;
            const latitude = e.lngLat.lat;

            var country_bbox, country_center, country_id, country_palce_name, country_place_type;
            var region_bbox, region_center, region_id, region_palce_name, region_place_type;
            var district_bbox, district_center, district_id, district_palce_name, district_place_type;
            var place_bbox, place_center, place_id, place_palce_name, place_place_type;
            var locality_bbox, locality_center, locality_id, locality_palce_name, locality_place_type;
            var postcode_bbox, postcode_center, postcode_id, postcode_palce_name, postcode_place_type;
            var neighborhood_bbox, neighborhood_center, neighborhood_id, neighborhood_palce_name, neighborhood_place_type;
            var poi_bbox, poi_center, poi_id, poi_palce_name, poi_place_type;
            var nama_titik_lokasi;

            var coordinates = e.lngLat;
            console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
            console.log(e);
            marker.setLngLat(coordinates).addTo(map);
            map.flyTo({center: coordinates, zoom:17});

            var url = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+longitude+","+latitude+".json?language=id-ID&access_token="+mapboxgl.accessToken;
            $.get(url, function(data){
                var myData = data.features;
                    if (myData.length < 1) {
                        nama_titik_lokasi = "";
                        @this.long = "";
                        @this.lat = "";
                        map.flyTo({center: coordinates, zoom:3});
                        alert("Data Tidak Ditemukan. Silahkan Clik Lokasi Lain atau Gunakan Pencarian ^_^");
                    } else {
                        for (let i = 0; i < myData.length; i++){
                        var data_lokasi;
                            if (myData[i].place_type[0] == "country"){
                                country_bbox = myData[i].bbox;
                                country_center = myData[i].center;
                                country_id = myData[i].id;
                                country_palce_name = myData[i].place_name;
                                country_place_type = myData[i].place_type;
                            }
                            else if (myData[i].place_type[0] == "region"){
                                region_bbox = myData[i].bbox;
                                region_center = myData[i].center;
                                region_id = myData[i].id;
                                region_palce_name = myData[i].place_name;
                                region_place_type = myData[i].place_type;
                            }
                            else if (myData[i].place_type[0] == "district"){
                                district_bbox = myData[i].bbox;
                                district_center = myData[i].center;
                                district_id = myData[i].id;
                                district_palce_name = myData[i].place_name;
                                district_place_type = myData[i].place_type;
                            }
                            else if (myData[i].place_type[0] == "place"){
                                place_bbox = myData[i].bbox;
                                place_center = myData[i].center;
                                place_id = myData[i].id;
                                place_palce_name = myData[i].place_name;
                                place_place_type = myData[i].place_type;
                            }
                            else if (myData[i].place_type[0] == "locality"){
                                locality_bbox = myData[i].bbox;
                                locality_center = myData[i].center;
                                locality_id = myData[i].id;
                                locality_palce_name = myData[i].place_name;
                                locality_place_type = myData[i].place_type;
                            }
                            else if (myData[i].place_type[0] == "postcode"){
                                postcode_bbox = myData[i].bbox;
                                postcode_center = myData[i].center;
                                postcode_id = myData[i].id;
                                postcode_palce_name = myData[i].place_name;
                                postcode_place_type = myData[i].place_type;
                            }
                            else if (myData[i].place_type[0] == "neighborhood"){
                                neighborhood_bbox = myData[i].bbox;
                                neighborhood_center = myData[i].center;
                                neighborhood_id = myData[i].id;
                                neighborhood_palce_name = myData[i].place_name;
                                neighborhood_place_type = myData[i].place_type;
                            }
                            else if (myData[i].place_type[0] == "poi"){
                                poi_bbox = myData[i].bbox;
                                poi_center = myData[i].center;
                                poi_id = myData[i].id;
                                poi_palce_name = myData[i].place_name;
                                poi_place_type = myData[i].place_type;
                            }
                            else{
                                country_bbox = "";
                                country_center = "";
                                country_id = "";
                                country_palce_name = "";
                                country_place_type = "";
                            }
                            nama_titik_lokasi = myData[0].place_name;
                        };
                    }
            @this.data_titik = nama_titik_lokasi;
            });
        @this.long = longitude;
        @this.lat = latitude;
        });

        geocoder.on('result', function(e){
            map.once('moveend', function(){
                const{geometry,place_name} = e.result;
                const long_geo = e.result.geometry.coordinates[0];
                const lat_geo = e.result.geometry.coordinates[1];
                @this.long = long_geo;
                @this.lat = lat_geo;
                marker.setLngLat(e.result.geometry.coordinates).addTo(map);
                @this.titik = place_name;
            });
        });
    //----------------------------- Mapbox End ----------------------------//

    //----------------------------- Datepicker Start ----------------------------//
        $('#tgl_berangkat').datepicker({
            onSelect: function(dateText, inst){
                $('#tgl_pulang').datepicker('option', 'minDate', new Date(dateText));
            },
        });

        $('#tgl_pulang').datepicker({
            onSelect: function(dateText, inst){
                $('#tgl_berangkat').datepicker('option', 'maxDate', new Date(dateText));
            }
        });
    //----------------------------- Datepicker End ----------------------------//
});
</script>
<!-- Livewire Inject End -->

<!-- Script Page Inject Start -->
    <!-- Script VVIP Start -->
    <script type="text/javascript">
        function showDiv(select){
            if (select.value==1){
                document.getElementById('vvip_div').style.display = "none";
                document.getElementById('vvip').value = "Presiden";
            } else if (select.value==2){
                document.getElementById('vvip_div').style.display = "none";
                document.getElementById('vvip').value = "Presiden dan Ibu Negara";
            } else if (select.value==3){
                document.getElementById('vvip_div').style.display = "none";
                document.getElementById('vvip').value = "Ibu Negara";
            } else{
                document.getElementById('vvip_div').style.display = "block";
                document.getElementById('vvip').value = "";
            }
        }
    </script>

    <!-- Datepicker -->
    <script src="{{ asset('js/datepicker/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datepicker/jquery-ui.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>
    <!-- File Upload -->
    <script>
        $('#customFile').on('change',function(){
            //get the file name
            var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
<!-- Script Page Inject End -->
@endpush
