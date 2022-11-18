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
        <div class="col-md-6 stretch-card grid-margin">
            <div class="card card-rounded shadow-black">
                <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div wire:ignore id='map' class="card card-rounded animated-shadow-blue" style='width: 100%; height: 620px;'></div>
                    <div wire:ignore id="geocoder" class="geocoder" ></div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 stretch-card grid-margin">
            <div class="card card-rounded shadow-black">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap">
                            <div class="col-md-12 stretch-card grid-margin">
                                <div class="card card-rounded animated-shadow-blue">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <canvas id="myChart1" width="auto" height="125"></canvas>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 stretch-card grid-margin">
                                <div class="card card-rounded animated-shadow-blue">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <canvas id="myChart2" width="auto" height="125"></canvas>
                                    </div>
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
            zoom: 1.5,
            maxzoom: 4,
            projection: 'globe',
        });

    map.on('style.load', () => {
        map.setFog({});
    });

    map.addControl(new mapboxgl.NavigationControl())
    const zoomThreshold = 4;

    const loadLocations = (geoJson) => {
        geoJson.features.forEach((location) => {
            const {geometry, properties} = location
            const{iconSize, locationId, title, image, description} = properties
            let markerElement = document.createElement('div')
            markerElement.className = 'marker' + locationId
            markerElement.id = locationId
            markerElement.style.backgroundImage = 'url(assets/images/marker/mapbox-marker-icon-20px-red.png)'
            markerElement.style.backgroundSize = 'cover'
            markerElement.style.cursor = 'pointer';
            markerElement.style.width = '20px';
            markerElement.style.height = '48px';
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
            new mapboxgl.Marker({element: markerElement, anchor: 'center'})
            .setLngLat(geometry.coordinates)
            .setPopup(popUp)
            .addTo(map)
        })
    };
    loadLocations({!! $geoJson !!})

    map.on('zoom', () => {
        if (map.getZoom() > zoomThreshold) {
        let markers = document.getElementsByClassName("marker1");
            for (let i = 0; i < markers.length; i++) {
                markers[i].style.visibility = "hidden";
            }
        } else {
        let markers = document.getElementsByClassName("marker1");
            for (let i = 0; i < markers.length; i++) {
                markers[i].style.visibility = "visible";
            }
        }
    });

    this.marker = new mapboxgl.Marker();
        map.on('click', (e) => {
            const longitude = e.lngLat.lng
            const latitude = e.lngLat.lat
            @this.long = longitude
            @this.lat = latitude
            var coordinates = e.lngLat;
            console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
        });

    const geocoder = new MapboxGeocoder({
        accessToken: '{{ env('MAPBOX_KEY') }}',
        language: 'id-ID',
        mapboxgl: mapboxgl,
        marker: false
    });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));




//----------------------------- Mapbox End ----------------------------//

//--------------------- Chart Js Script Start ---------------------//
        const ctx1 = document.getElementById('myChart1').getContext('2d');
        const myChart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Peresmian', 'Audiensi', 'Hari Besar', 'Akad Nikah', 'Wawancara', 'Bantuan'],
                datasets: [{
                    label: 'Grafik Kegiatan',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Peresmian', 'Audiensi', 'Hari Besar', 'Akad Nikah', 'Wawancara', 'Bantuan'],
                datasets: [{
                    label: 'Grafik Kegiatan',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

//--------------------- Chart Js Script End ---------------------//

})
</script>
@endpush
