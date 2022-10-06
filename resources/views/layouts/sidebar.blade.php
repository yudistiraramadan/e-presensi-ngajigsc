<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('/sbadmin/img/gsc.png') }}" alt="" width="40px;">
        </div>
        <div class="sidebar-brand-text mx-3">E-Presensi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    {{-- Role Admin --}}
    @if (auth()->user()->level=='admin')
        <li class="nav-item active" style="margin-top: -20px; margin-bottom:-20px;">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard ADMIN</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" style="margin-top: 15px;">
        
        <li class="nav-item">
            <a class="nav-link collapsed" href="/dashboard" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Kuasa Admin</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('user') }}">Daftar User</a>
                    <a class="collapse-item" href="utilities-animation.html">Log Aktifitas</a>
                </div>
            </div>
        </li>


        <li class="nav-item" style="margin-top: -15px;">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Laporan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="buttons.html">Presensi Tiap Santri</a>
                    <a class="collapse-item" href="cards.html">Presensi Keseluruhan</a>
                </div>
            </div>
        </li>
        
    {{-- Role Santri --}}
    @endif
    @if (auth()->user()->level=='santri')
        <li class="nav-item active" style="margin-top: -20px; margin-bottom:-20px;">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard SANTRI</span></a>
        </li>

        {{-- Divider --}}
        <hr class="sidebar-divider" style="margin-top: 18px;">

        <li class="nav-item" style="margin-top: -15px;">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"
                aria-expanded="true" aria-controls="collapseTwo1">
                <i class="fas fa-fw fa-cog"></i>
                <span>Presensi</span>
            </a>
            <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/presensi-masuk">Presensi Masuk</a>
                    <a class="collapse-item" href="/presensi-keluar">Presensi Keluar</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item" style="margin-top: -15px;">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Laporan Presensi Saya</a>
            </div>
        </div>
    </li>

    
    @endif
   

    

    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline" style="margin-top: 15px;">
        <button class="rounded-circle border-0" id="sidebarToggle">
        </button>
    </div>

</ul>