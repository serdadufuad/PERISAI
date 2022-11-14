<!-- partial:partials/_sidebar.html start -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets/images/faces/'.Auth::user()->file_foto) }}" alt="profile" />
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center">{{ Auth::user()->name }}</span>
                    <span class="small font-weight-light pt-1 text-center">{{ Auth::user()->jabatan }}</span>
                </div>
            </a>
        </li>
        <li class="nav-item pt-3">
            <a class="nav-link d-block" href="{{ url('/dashboard') }}">
                <img class="sidebar-brand-logo" src="{{ asset('assets/images/logo perisai.png') }}" alt="" />
                <img class="sidebar-brand-logomini" src="{{ asset('assets/images/logo perisai mini.png') }}" alt="" />
            </a>
        </li>
        <li class="pt-2 pb-1">
            <span class="nav-item-head">MENU PAGES</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="mdi mdi-view-dashboard menu-icon text-info"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/kunjungan_kerja') }}">
                <i class="mdi mdi-airplane-takeoff menu-icon text-success"></i>
                <span class="menu-title">Kunjungan Kerja</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/biaya_kunker') }}">
                <i class="mdi mdi-cash-multiple menu-icon text-warning"></i>
                <span class="menu-title">Biaya Kunker</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/settings') }}">
                <i class="mdi mdi-settings-outline menu-icon text-dark"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">
                <i class="mdi mdi-logout-variant menu-icon text-danger"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial:partials/_sidebar.html end -->
