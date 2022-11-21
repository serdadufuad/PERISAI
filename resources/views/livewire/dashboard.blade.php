<div>
    <div class="row">
        <div class="col-sm-4 stretch-card grid-margin">
            <div class="card card-rounded animated-shadow-black" style="background-image: linear-gradient(to right bottom, #ffffff, #deddfe, #b6bdfe, #829fff, #1585ff);">
                <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>
                        <h4 class="font-weight-semibold mb-1k"> Total Anggaran </h4>
                            <a href="{{ ('/detail_total_anggaran') }}"><p class="text-black">Detail<i class="mdi mdi-information"></i></p></a>
                    </div>
                    <h3 class="font-weight-bold">Rp 99.258.456.357,-</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 stretch-card grid-margin">
            <div class="card card-rounded animated-shadow-black" style="background-image: linear-gradient(to right bottom, #ffffff, #e8f8ff, #baf8ff, #98f7e8, #a6eeaf);">
                <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>
                        <h4 class="font-weight-semibold mb-1 text-black"> Realisasi Anggaran </h4>
                            <a href="{{ ('/detail_realisasi_anggaran') }}"><p class="text-black">Detail<i class="mdi mdi-information"></i></p></a>
                    </div>
                    <h3 class="text-black font-weight-bold">Rp 45.258.456.357,-</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 stretch-card grid-margin">
            <div class="card card-rounded animated-shadow-black" style="background-image: linear-gradient(to right bottom, #ffffff, #f8f0fb, #fae0f0, #fecfdc, #ffc0c0);">
                <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>
                        <h4 class="font-weight-semibold mb-1 text-black"> Total ABT </h4>
                            <a href="{{ ('/detail_total_anggaran') }}"><p class="text-black">Detail<i class="mdi mdi-information"></i></p></a>
                    </div>
                    <h3 class="text-black font-weight-bold">Rp 35.258.456.357,-</h3>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div wire:ignore id='map' class="card card-body card-rounded shadow-black stretch-card grid-margin" style='width: 100%; height: 720px; margin-top: 5px;'></div>
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
                zoom: 2.5,
                maxzoom: 4,
                projection: 'globe',
            });

        map.on('style.load', () => {
            map.setFog({});
        });
        // Add the control to the map.
        map.addControl(
        new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        marker : false
        })
        );
        const zoomThreshold = 4;
        const loadLocations = (geoJson) => {
            geoJson.features.forEach((location) => {
                const {geometry, properties} = location;
                const{locationId, data_titik, nama_vvip, tgl_berangkat, tgl_pulang, nama_kegiatan, file_ebook} = properties;
                let markerElement = document.createElement('div');
                markerElement.className = 'marker' + locationId;
                markerElement.id = locationId;
                markerElement.style.backgroundImage = 'url(images/marker-red.png)';
                markerElement.style.backgroundSize = 'cover';
                markerElement.style.cursor = 'pointer';
                markerElement.style.width = '20px';
                markerElement.style.height = '48px';
                const content = `
                <div class="table-responsive table-striped" style="overflow-y, auto; max-height:500px, width:100%">
                    <table class="table table-sm mt-2">
                        <tbody>
                            <tr>
                                <td>Data Titik</td>
                                <td>${data_titik}</td>
                            </tr>
                            <tr>
                                <td>VVIP</td>
                                <td>${nama_vvip}</td>
                            </tr>
                            <tr>
                                <td>Berangkat</td>
                                <td>${tgl_berangkat}</td>
                            </tr>
                            <tr>
                                <td>Pulang</td>
                                <td>${tgl_pulang}</td>
                            </tr>
                            <tr>
                                <td>Nama Kegiatan</td>
                                <td>${nama_kegiatan}</td>
                            </tr>
                            <tr>
                                <td>File Ebook</td>
                                <td><a href="${file_ebook}">File E-Book</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                `;
                const popUp = new mapboxgl.Popup({
                    offset:20
                    }).setHTML(content).setMaxWidth("400px")
                new mapboxgl.Marker({element: markerElement, anchor: 'center'})
                .setLngLat(geometry.coordinates)
                .setPopup(popUp)
                .addTo(map)
            });
        };
        loadLocations({!! $geoJson !!});

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
                const longitude = e.lngLat.lng;
                const latitude = e.lngLat.lat;
                @this.long = longitude;
                @this.lat = latitude;
                var coordinates = e.lngLat;
                console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
            });








    //----------------------------- Mapbox End ----------------------------//
});
</script>
<!-- Livewire Inject End -->

<!-- Script Page Inject Start -->
    <!-- chart js -->
    <script src="{{ asset('vendor/chart.js/chart.js') }}"></script>
<!-- Script Page Inject End -->
@endpush
