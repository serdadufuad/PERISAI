<div>
    <!-- Content Page Start -->
    <div class="row">
        <div class="col-xl-12 ">
            <div class="card">
                <div class="card-header text-light text-center bg-dark bg-gradient">
                    <h2>Kunjungan Kerja Presiden</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div wire:ignore id='map' style='width: 100%; height: 450px;'></div>
                            <div id="geocoder" class="geocoder"></div>
                        </div>
                        <div class="col-md-6">
                            <form class="forms-sample" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="long"><b>Longitude :</b></label>
                                            <input wire:model="long" type="text" class="form-control form-control-sm" id="long" placeholder="Longitude" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lat"><b>Latitude :</b></label>
                                            <input wire:model="lat" type="text" class="form-control form-control-sm" id="lat" placeholder="Latitude" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>VVIP :</b></label>
                                            <select class="js-example-basic-single form-control-sm" style="width: 100%;" onchange="showDiv(this)">
                                                <option value="1">- Presiden</option>
                                                <option value="2">- Presiden dan Ibu Negara</option>
                                                <option value="3">- Ibu Negara</option>
                                                <option value="4">- Tamu Negara</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="vvip_div" class="col-md-6" style="display: none;">
                                        <div class="form-group" >
                                            <label for="vvip"><b>Jabatan dan Nama VVIP :</b></label>
                                            <input  type="text" class="form-control" id="vvip" placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_berangkat"><b>Berangkat :</b></label>
                                            <input type="text" class="form-control form-control-sm" id="tgl_berangkat" placeholder="MM/DD/YYYY" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_pulang"><b>Pulang :</b></label>
                                            <input type="text" class="form-control form-control-sm" id="tgl_pulang" placeholder="MM/DD/YYYY" />
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label><b>Kegiatan :</b></label>
                                            <select class="js-example-basic-multiple" multiple="multiple" style="width: 100%;">
                                                <option value="Presiden">- Peresmian</option>
                                                <option value="Presiden dan Ibu Negara">- pertemuan</option>
                                                <option value="Ibu Negara">- Pelantikan</option>
                                                <option value="Tamu Negara">- Peringatan Hari Besar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><b>Pilih File :</b></label>
                                            <input type="file" name="img[]" class="file-upload-default" />
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control form-control-sm file-upload-info" disabled placeholder="Upload Image" />
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                                <button class="btn btn-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Page Start -->
</div>



@push('script')
<!-- Map Box -->
<script>
    document.addEventListener('livewire:load', () => {
        const defaultLocation = [106.82721585, -6.17555357]
    mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/dark-v10',
        center: defaultLocation,
        zoom: 2,
        projection: 'globe',
    });

    map.on('style.load', () => {
    map.setFog({});
    });

    const geoJson = {
    "type": "FeatureCollection",
    "features": [
        {
        "type": "Feature",
        "geometry": {
            "coordinates": [
            "106.73830754205",
            "-6.2922403995615"
            ],
            "type": "Point"
        },
        "properties": {
            "message": "Mantap",
            "iconSize": [
            50,
            50
            ],
            "locationId": 30,
            "title": "Hello new",
            "image": "https://images.unsplash.com/photo-1668365187350-05c997d09eba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60",
            "description": "Mantap"
        }
        },
        {
        "type": "Feature",
        "geometry": {
            "coordinates": [
            "106.68681595869",
            "-6.3292244652013"
            ],
            "type": "Point"
        },
        "properties": {
            "message": "oke mantap Edit",
            "iconSize": [
            50,
            50
            ],
            "locationId": 29,
            "title": "Rumah saya Edit",
            "image": "https://images.unsplash.com/photo-1668429090678-4f0e6759d489?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "description": "oke mantap Edit"
        }
        },
        {
        "type": "Feature",
        "geometry": {
            "coordinates": [
            "106.62490035406",
            "-6.3266855038639"
            ],
            "type": "Point"
        },
        "properties": {
            "message": "Update Baru",
            "iconSize": [
            50,
            50
            ],
            "locationId": 22,
            "title": "Update Baru Gambar",
            "image": "https://images.unsplash.com/photo-1668367314609-3bec5426c4d3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyNHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "description": "Update Baru"
        }
        },
        {
        "type": "Feature",
        "geometry": {
            "coordinates": [
            "106.72391468711",
            "-6.3934163494543"
            ],
            "type": "Point"
        },
        "properties": {
            "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            "iconSize": [
            50,
            50
            ],
            "locationId": 19,
            "title": "awdwad",
            "image": "https://images.unsplash.com/photo-1668428178242-09ee02d13340?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyOHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        }
        },
        {
        "type": "Feature",
        "geometry": {
            "coordinates": [
            "106.67224158205",
            "-6.3884963990263"
            ],
            "type": "Point"
        },
        "properties": {
            "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            "iconSize": [
            50,
            50
            ],
            "locationId": 18,
            "title": "adwawd",
            "image": "https://images.unsplash.com/photo-1668380298208-de2df24d3a54?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzOHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        }
        },
        {
        "type": "Feature",
        "geometry": {
            "coordinates": [
            "106.74495523289",
            "-6.3642034511073"
            ],
            "type": "Point"
        },
        "properties": {
            "message": "awdwad",
            "iconSize": [
            50,
            50
            ],
            "locationId": 12,
            "title": "adawd",
            "image": "https://images.unsplash.com/photo-1668066826983-2b45f1d1cfda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1MHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
            "description": "awdwad"
        }
        }
    ]
    };

    const loadLocations = () => {
        geoJson.features.forEach((location) => {
            const {geometry, properties} = location
            const{iconSize, locationId, title, image, description} = properties

            let markerElement = document.createElement('div')
            markerElement.className = 'marker' + locationId
            markerElement.id = locationId
            markerElement.style.backgroundImage = 'url(assets/images/marker.png)'
            markerElement.style.backgroundSize = 'cover'
            markerElement.style.width = '25px'
            markerElement.style.height = '25px'

            const content = `
            <div style="overflow-y, auto; max-height:400px, width:100%">
                <table class="table table-sm mt-2">
                    <tbody>
                        <tr>
                            <td>Title</td>
                            <td>${title}</td>
                        </tr>
                        <tr>
                            <td>Picture</td>
                            <td><img src="${image}" loading="lazy" class=""></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>${description}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            `

            const popUp = new mapboxgl.Popup({
                offset:25
            }).setHTML(content).setMaxWidth("400px")

            new mapboxgl.Marker(markerElement)
            .setLngLat(geometry.coordinates)
            .setPopup(popUp)
            .addTo(map)


        })
    };

    loadLocations()

    map.addControl(new mapboxgl.NavigationControl())

    map.on('click', (e) => {
        const longitude = e.lngLat.lng
        const latitude = e.lngLat.lat
        @this.long = longitude
        @this.lat = latitude

    });

    const geocoder = new MapboxGeocoder({
    accessToken: '{{ env('MAPBOX_KEY') }}',
    language: 'id-ID',
    mapboxgl: mapboxgl,
    marker: false
    });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

    geocoder.on('results', (b) => {
        console.log(b)
    });


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

<!-- Map Box -->
@endpush
