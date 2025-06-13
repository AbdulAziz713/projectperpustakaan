<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-star"></i>
                </div>
            @if (auth()->user()->role ==='petugas')
            <div class="sidebar-brand-text mx-3">Admin Desa</div>

                @elseif (auth()->user()->role ==='anggota')
                <div class="sidebar-brand-text mx-3">Pustakawan</div>

                @elseif (auth()->user()->role ==='admin')
                <div class="sidebar-brand-text mx-3">Admin Daerah</div>

            @endif
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item-->
            @if(Auth::check())
    <div class="flex flex-col gap-2 text-sm font-medium">
    @if (auth()->user()->role ==='petugas')
    <li class="nav-item {{ request()->routeIs('admin_desa.dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin_desa.dashboard') }}">
        <i class="fas fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading text-white small">Pengelolaan</div>

<li class="nav-item {{ request()->routeIs('admin_desa.members.*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin_desa.members.index') }}">
        <i class="fas fa-users mr-2"></i>
        <span>Kelola Anggota</span>
    </a>
</li>

<li class="nav-item {{ request()->routeIs('admin_desa.visits.*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin_desa.visits.index') }}">
        <i class="fas fa-user-check mr-2"></i>
        <span>Kelola Kunjungan</span>
    </a>
</li>

<li class="nav-item {{ request()->routeIs('admin_desa.books.*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin_desa.books.index') }}">
        <i class="fas fa-book mr-2"></i>
        <span>Kelola Buku</span>
    </a>
</li>

<li class="nav-item {{ request()->routeIs('admin_desa.keterlibatan.*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin_desa.keterlibatan.index') }}">
        <i class="fas fa-handshake mr-2"></i>
        <span>Keterlibatan Masyarakat</span>
    </a>
</li>

            @elseif (auth()->user()->role ==='anggota')
            <li class="nav-item {{ request()->routeIs('pustakawan.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pustakawan.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Pengelolaan</div>

            <li class="nav-item {{ request()->routeIs('pustakawan.books.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pustakawan.books.index') }}">
                    <i class="fas fa-book mr-2"></i><span>Kelola Buku</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('pustakawan.borrowings.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pustakawan.borrowings.index') }}">
                    <i class="fas fa-book-reader mr-2"></i><span>Kelola Peminjaman</span>
                </a>
            </li>

            @elseif (auth()->user()->role ==='admin')
            <li class="nav-item {{ request()->routeIs('admin_daerah.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_daerah.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Pengelolaan</div>

            <li class="nav-item {{ request()->routeIs('admin_daerah.books.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_daerah.books.index') }}">
                    <i class="fas fa-book mr-2"></i><span>Kelola Buku</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('admin_daerah.pustakawans.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_daerah.pustakawans.index') }}">
                    <i class="fas fa-user-tie mr-2"></i><span>Kelola Pustakawan</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('admin_daerah.reports.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_daerah.reports.index') }}">
                    <i class="fas fa-chart-bar mr-2"></i><span>Kelola Laporan</span>
                </a>
            </li>
        @endif
    </div>
@endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('template/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>