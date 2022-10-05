<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('/sbadmin/img/gsc.png') }}" alt="" width="40px;">
        </div>
        <div class="sidebar-brand-text mx-3">E-Presensi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if (auth()->user()->level=='admin')
    
        <li class="nav-item active {{ Request::is('/dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard ADMIN</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-solid fa-book"></i>
                <span>Laporan Santri</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="buttons.html">Presensi Tiap Santri</a>
                    <a class="collapse-item" href="cards.html">Presensi Keseluruhan</a>
                </div>
            </div>
        </li>
    
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('user') ? 'active' : '' }}" href="{{ route('user') }}" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fa-solid fa-house-user"></i>
                <span>Kuasa Admin</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item {{ Request::is('user') ? 'active' : '' }}" href="{{ route('user') }}">Daftar User</a>
                    <a class="collapse-item" href="utilities-animation.html">Log Aktifitas</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    
    </ul>
    
    @endif
    @if (auth()->user()->level=='santri')
        <li class="nav-item active" style="margin-top: -20px; margin-bottom:-20px;">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard SANTRI</span></a>
        </li>
            <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item" style="margin-top: -10px;">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"
                aria-expanded="true" aria-controls="collapseTwo1">
                <i class="fas fa-fw fa-cog"></i>
                <span>Presensi</span>
            </a>
            <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="buttons.html">Presensi Tiap Santri</a>
                    <a class="collapse-item" href="cards.html">Presensi Keseluruhan</a>
                </div>
            </div>
        </li>
    @endif
   




   