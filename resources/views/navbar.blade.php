<!-- navbar start -->
<!-- partial:partials/_settings-panel.html end -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-image: linear-gradient(to right, #d4eaf6, #bbe2f8, #a1dbfa, #84d3fc, #61cbff);">
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button name="minimize" class="navbar-toggler navbar-toggler align-self-center" data-toggle="minimize">
          <<
        </button>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}"><img src="{{ asset('images/logo_perisai.ico') }}" alt="logo"/></a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="{{ url('/logout') }}">
                    <i title="Logout" class="mdi mdi-logout-variant text-danger"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- nabvar end -->
