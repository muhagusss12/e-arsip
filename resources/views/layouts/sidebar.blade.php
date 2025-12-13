<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">e-Arsip </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Layanan e-Arsip
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="suratmasuk.blade.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Surat Masuk</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Surat Keluar</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('inventaris') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('inventaris')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Daftar Inventaris</span></a>
            </li>
            {{-- <li class="nav-item {{ Request::is('inventaris') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="{{route('inventaris')}}" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Daftar Inventaris</span>
                </a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>