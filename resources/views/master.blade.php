<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@livewireStyles
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="theme-color" content="#61CBFF"/>
    <meta name="description" content="Perisai">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Title -->
    <title>{{ config('app.name', 'Perisai') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/flag-icon-css/css/flag-icon.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/css/vendor.bundle.base.css') }}" type="text/css">
    <!-- endinject -->
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendor/jquery-bar-rating/css-stars.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" type="text/css"/>
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>
    <!-- End layout styles -->
    <!-- Logo Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo_perisai.ico') }}" />
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('css/datepicker/jquery-ui.css') }}" type="text/css">
    <!-- Mapbox Geocoder css start-->
    <link rel="stylesheet" href="css/mapbox/mapbox-gl.css"><!-- Map Box v5.0.0-->
    <link rel="stylesheet" href="css/mapbox/mapbox-gl-geocoder.css"><!-- Mapbox Geocoder css start v5.0.0-->
    <style>
        .geocoder {
        position: absolute;
        z-index: 1;
        width: 50%;
        left: 50%;
        margin-left: -25%;
        top: 10px;
        }
        .mapboxgl-ctrl-geocoder {
        min-width: 100%;
        }
        #map {
        margin-top: 75px;
        }
    </style>
    <!-- Mapbox Geocoder css end-->
</head>
<body>
    <div class="container-scroller pb-5">
        @include('sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('navbar')
            <div class="main-panel">
                <div class="content-wrapper pb-5">
                    <!-- content start -->
                    {{ isset($slot) ? $slot : null}}
                    <!-- content end -->
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-dark fixed-bottom pt-4 pb-0" style="background-image: linear-gradient(to left, #e7f6ff, #caebff, #ace1ff, #8ad6ff, #61cbff);">
        <div class="container">
                <p class="text-center">Copyright © PERISAI 2022 | Sonya Elfadhila, S.E., M.A. | Diklatpim Tingkat III Tahun 2022</p>
        </div>
    </footer>
    @livewireScripts


    <!-- plugins:js -->
    <script src="{{ asset('vendor/js/vendor.bundle.base.js') }}"></script>
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendor/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/misc.js') }}"></script>
    <script src="{{ asset('js/typeahead.js') }}"></script>
    <script src="js/mapbox/mapbox-gl.js"></script>
    <script src="js/mapbox/mapbox-gl-geocoder.min.js"></script>
    <script src="{{ asset('vendor/chart.js/chart.js') }}"></script>
    @stack('script')
</body>
</html>
