<!-- partial:partials/_sidebar.html start -->
<nav class="sidebar sidebar-offcanvas pb-0" id="sidebar" style="background-image: linear-gradient(to bottom, #e7f6ff, #caebff, #ace1ff, #8ad6ff, #61cbff);">
    <ul class="nav" >
        <li class="nav-item nav-profile border-bottom" >
            <a href="{{ url('/profile') }}" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="{{ asset('images/profile/'.Auth::user()->file_foto) }}" alt="profile"/>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center">{{ Auth::user()->name }}</span>
                    <span class="small font-weight-light pt-1 text-center">{{ Auth::user()->jabatan }}</span>
                </div>
            </a>
        </li>
        <li class="nav-item pt-3" >
            <a class="nav-link d-block" href="{{ url('/dashboard') }}">
                <img class="sidebar-brand-logo" src="{{ asset('images/logo perisai.png') }}" alt="Logo" width="120px" height="40px"/>
                <img class="sidebar-brand-logomini" src="{{ asset('images/logo_perisai.ico') }}" alt="Logo Mini" />
            </a>
        </li>
        <li class="pt-2 pb-1">
            <span class="nav-item-head">MENU PAGES</span>
        </li>
        <li class="nav-item">
            <a class="nav-link animated" href="{{ url('/dashboard') }}">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link animated" href="{{ url('/kunjungan_kerja') }}">
                <i class="mdi mdi-airplane-takeoff menu-icon"></i>
                <span class="menu-title">Kunjungan Kerja</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link animated" href="{{ url('/biaya_kunker') }}">
                <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">Biaya Kunker</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link animated" href="{{ url('/settings') }}">
                <i class="mdi mdi-settings-outline menu-icon"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link animated" href="{{ url('/logout') }}">
                <i class="mdi mdi-logout-variant menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial:partials/_sidebar.html end -->
