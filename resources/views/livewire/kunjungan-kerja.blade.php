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
                                            <label for=""><b>Longitude :</b></label>
                                            <input wire:model="long" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><b>Latitude :</b></label>
                                            <input wire:model="lat" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><b>Longitude :</b></label>
                                            <input wire:model="prov" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><b>Latitude :</b></label>
                                            <input wire:model="kot" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Kategori Kunjungan :</b></label>
                                            <select class="js-example-basic-single" style="width: 100%;">
                                                <option value="AL">Dalam Negeri</option>
                                                <option value="WY">Luar Negeri</option>
                                                <option value="AM">Kunjungan Tamu Negara</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>VVIP :</b></label>
                                            <select class="js-example-basic-single" style="width: 100%;">
                                                <option value="Presiden">- Presiden</option>
                                                <option value="Presiden dan Ibu Negara">- Presiden dan Ibu Negara</option>
                                                <option value="Ibu Negara">- Ibu Negara</option>
                                                <option value="Tamu Negara">- Tamu Negara</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><b>Berangkat :</b></label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><b>Pulang :</b></label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label><b>Kegiatan :</b></label>
                                            <select class="js-example-basic-multiple" style="width: 100%;">
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
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
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
            "image": "1a1eb1e4106fff0cc3467873f0f39cab.jpeg",
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
            "image": "0ea59991df2cb96b4df6e32307ea20ff.png",
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
            "image": "d09444b68d8b72daa324f97c999c2301.jpeg",
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
            "image": "f0b88ffd980a764b9fca60d853b300ff.png",
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
            "image": "4c35cb1b76af09e6205f94024e093fe6.jpeg",
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
            "image": "7c8c949fd0499eb50cb33787d680778c.jpeg",
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

            const popUp = new mapboxgl.Popup({
                offset:25
            }).setHTML(description).setMaxWidth("400px")

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


    })



</script>
<!-- Map Box -->
@endpush
