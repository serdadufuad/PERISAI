<div>
    <div class="page-header flex-wrap">
        <div class="header-left">
            <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Dalam Negeri </button>
            <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Luar Negeri </button>
        </div>
        <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
            <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                <i class="mdi mdi mdi-airplane"></i> Data Kunjungan Kerja </button>
        </div>
    </div>
    <!-- first row starts here -->
    <div class="row">
        <div class="col-xl-8 stretch-card grid-margin">
            <div class="card">
                <div class="card-body bg-dark">
                    <div wire:ignore id='map' style='width: 100%; height: 717px;'></div>
                    <div id="geocoder" class="geocoder"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="card card-stat stretch-card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="text-white">
                                    <h3 class="font-weight-bold mb-0">$168.90</h3>
                                    <h6>This Month</h6>
                                    <div class="badge badge-danger">23%</div>
                                </div>
                                <div class="flot-bar-wrapper">
                                    <div id="column-chart" class="flot-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card stretch-card mb-3">
                        <div class="card-body d-flex flex-wrap justify-content-between">
                            <div>
                                <h4 class="font-weight-semibold mb-1 text-black"> Member Profit </h4>
                                <h6 class="text-muted">Average Weekly Profit</h6>
                            </div>
                            <h3 class="text-success font-weight-bold">+168.900</h3>
                        </div>
                    </div>
                    <div class="card stretch-card mb-3">
                        <div class="card-body d-flex flex-wrap justify-content-between">
                            <div>
                                <h4 class="font-weight-semibold mb-1 text-black"> Total Profit </h4>
                                <h6 class="text-muted">Weekly Customer Orders</h6>
                            </div>
                            <h3 class="text-success font-weight-bold">+6890.00</h3>
                        </div>
                    </div>
                    <div class="card stretch-card mb-3">
                        <div class="card-body d-flex flex-wrap justify-content-between">
                            <div>
                                <h4 class="font-weight-semibold mb-1 text-black"> Issue Reports </h4>
                                <h6 class="text-muted">System bugs and issues</h6>
                            </div>
                            <h3 class="text-danger font-weight-bold">-8380.00</h3>
                        </div>
                    </div>
                    <div class="card stretch-card mb-3">
                        <div class="card-body d-flex flex-wrap justify-content-between">
                            <div>
                                <h4 class="font-weight-semibold mb-1 text-black"> Issue Reports </h4>
                                <h6 class="text-muted">System bugs and issues</h6>
                            </div>
                            <h3 class="text-danger font-weight-bold">-8380.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@push('script')
<!-- Map Box -->
<script>
    document.addEventListener('livewire:load', () => {
        const defaultLocation = [106.82721585, -6.17555357]
        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        var map = new mapboxgl.Map({
            container: 'map'
            , style: 'mapbox://styles/mapbox/dark-v10'
            , center: defaultLocation
            , zoom: 2
            , projection: 'globe'
        , });

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
            "101.4515727",
            "0.5262455"
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
            "110.36444",
            "-7.80139"
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
            "106.80611",
            "-6.26861"
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
            "title": "akosldaosdmnqkwndjknqwd",
            "image": "7c8c949fd0499eb50cb33787d680778c.jpeg",
            "description": "awdwad"
        }
        },
        {
        "type": "Feature",
        "geometry": {
            "coordinates": [
            "103.00221261578434",
            "18.375349703666473"
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
            "78.96183325160791",
            "20.551210151914646"
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
            "130.80654375632315",
            "-17.478852542820263"
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
            "110.63468964186836",
            "32.663085362118224"
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
            "138.48881327927927",
            "36.07920813299532"
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
            "45.812944128361124",
            "23.282561392407786"
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
            "144.52304636069073",
            "-6.2563269442985785"
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
        const geocoder = new MapboxGeocoder({
            accessToken: '{{ env('MAPBOX_KEY') }}'
            , language: 'id-ID'
            , mapboxgl: mapboxgl
            , marker: false
        });

        geocoder.on('results', (b) => {
        console.log(b)
        });

        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));


    })

</script>
<!-- Map Box -->
@endpush
