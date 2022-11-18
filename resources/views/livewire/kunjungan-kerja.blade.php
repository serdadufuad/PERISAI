<div>
<!-- first row starts here -->
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card card-rounded animated-shadow-black" style="background-image: url('{{ asset('assets/images/dashboard/card1.jpg')}}'); background-size: cover;">
                <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>
                        <h4 class="font-weight-semibold mb-1 text-light"> Total Anggaran </h4>
                            <a href="{{ ('/detail_total_anggaran') }}"><h6 class="text-light">Detail <i class="mdi mdi-information"></i></h6></a>
                    </div>
                    <h3 class="text-light font-weight-bold">Rp 99.258.456.357,-</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card card-rounded animated-shadow-black" style="background-image: url('{{ asset('assets/images/dashboard/card2.jpg')}}'); background-size: cover;">
                <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>
                        <h4 class="font-weight-semibold mb-1 text-light"> Realisasi Anggaran </h4>
                            <a href="{{ ('/detail_realisasi_anggaran') }}"><h6 class="text-light">Detail <i class="mdi mdi-information"></i></h6></a>
                    </div>
                    <h3 class="text-light font-weight-bold">Rp 45.258.456.357,-</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card card-rounded animated-shadow-black" style="background-image: url('{{ asset('assets/images/dashboard/card3.jpg')}}'); background-size: cover;">
                <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>
                        <h4 class="font-weight-semibold mb-1 text-light"> Total ABT </h4>
                            <a href="{{ ('/detail_total_anggaran') }}"><h6 class="text-light">Detail <i class="mdi mdi-information"></i></h6></a>
                    </div>
                    <h3 class="text-light font-weight-bold">Rp 35.258.456.357,-</h3>
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- first row end here -->
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
                                    <form class="forms-sample" action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="titik"><b>Nama Titik :</b></label>
                                                    <input wire:model="titik" type="text" class="form-control form-control-lg" id="titik" placeholder="Nama Titik" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="long"><b>Longitude :</b></label>
                                                    <input wire:model="long" type="text" class="form-control form-control-lg" id="long" placeholder="Longitude" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lat"><b>Latitude :</b></label>
                                                    <input wire:model="lat" type="text" class="form-control form-control-lg" id="lat" placeholder="Latitude" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>VVIP :</b></label>
                                                    <select class="js-example-basic-single form-control-sm" style="width: 100%;" onchange="showDiv(this)" required>
                                                        <option value="1">- Presiden</option>
                                                        <option value="2">- Presiden dan Ibu Negara</option>
                                                        <option value="3">- Ibu Negara</option>
                                                        <option value="4">- Tamu Negara</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="vvip_div" class="col-md-6" style="display: none;">
                                                <div class="form-group">
                                                    <label for="vvip"><b>Jabatan dan Nama VVIP :</b></label>
                                                    <input type="text" class="form-control form-control-lg" id="vvip" placeholder="" value="" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_berangkat"><b>Berangkat :</b></label>
                                                    <input type="text" class="form-control form-control-lg" id="tgl_berangkat" placeholder="MM/DD/YYYY" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_pulang"><b>Pulang :</b></label>
                                                    <input type="text" class="form-control form-control-lg" id="tgl_pulang" placeholder="MM/DD/YYYY" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><b>Kegiatan :</b></label>
                                                    <select class="js-example-basic-multiple" multiple="multiple" style="width: 100%;" required>
                                                        <option value="Presiden">- Peresmian</option>
                                                        <option value="Presiden dan Ibu Negara">- pertemuan</option>
                                                        <option value="Ibu Negara">- Pelantikan</option>
                                                        <option value="Tamu Negara">- Peringatan Hari Besar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="file" name="img[]" class="file-upload-default" />
                                                    <div class="input-group form-control-lg">
                                                        <input type="text" class="form-control form-control-sm file-upload-info" disabled placeholder="Upload File: .pdf | Ukuran Maksimal : 5mb" required/>
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-warning" type="button"> Upload E-Book </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                                                <button class="btn btn-danger">Cancel</button>
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
    //marker: true
    });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
    map.on('style.load', () => {
    map.setFog({});
    map.addControl(new mapboxgl.NavigationControl())
    });


    this.marker = new mapboxgl.Marker();
    map.on('click', (e) => {
        const longitude = e.lngLat.lng;
        const latitude = e.lngLat.lat;
        const nama_titik = "A";
        @this.long = longitude
        @this.lat = latitude
        var coordinates = e.lngLat;
        console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
        console.log(e);
        this.marker.setLngLat(coordinates).addTo(map);
        var url = "https://api.mapbox.com/geocoding/v5/mapbox.places/"+longitude+","+latitude+".json?language=id-ID&access_token="+mapboxgl.accessToken;
        $.get(url, function(data){
        var myData = data.features;
        //var bboxData = [myData[5].bbox];
        //console.log(data);
        console.log(myData);
        //console.log(myData[5]);
        //console.log(myData[5].place_name);
        //console.log(bboxData);
        @this.titik = nama_titik;
        });
    });

    geocoder.on('result', function(e){
        map.once('moveend', function(){
        console.log(e);
        const long_geo = e.result.geometry.coordinates[0];
        const lat_geo = e.result.geometry.coordinates[1];
        @this.long = long_geo
        @this.lat = lat_geo
        //var coordinates = e.result.lngLat;
        //this.marker.setLngLat(coordinates).addTo(map);
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


    })
</script>

<script type="text/javascript">
    function showDiv(select){
        if(select.value==1){
            document.getElementById('vvip_div').style.display = "none";
            document.getElementById('vvip').value = "Presiden";
        } else if (select.value==2){
            document.getElementById('vvip_div').style.display = "none";
            document.getElementById('vvip').value = "Presiden dan Ibu Negara";
        } else if (select.value==3){
            document.getElementById('vvip_div').style.display = "none";
            document.getElementById('vvip').value = "Ibu Negara";
        } else {
            document.getElementById('vvip_div').style.display = "block";
            document.getElementById('vvip').value = "";
        }
    }
</script>
@endpush
