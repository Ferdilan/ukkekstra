<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if (Request::segment(1) == 'home')
    <li class="nav-item active">
        <a class="nav-link active" href="/home">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/home">
            @endif
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
        MASTER DATA
    </div>

    @if (Request::segment(1) == 'siswa')
    <li class="nav-item active">
        <a class="nav-link active" href="/siswa">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/siswa">
            @endif
            <i class="fas fa-users"></i>
            <span>Data Siswa</span></a>
    </li>

    @if (Request::segment(1) == 'user')
    <li class="nav-item active">
        <a class="nav-link active" href="/user">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/user">
            @endif
            <i class="fas fa-users"></i>
            <span>Data User</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        TAGIHAN
    </div>

    @if (Request::segment(1) == 'tagihan-spp')
    <li class="nav-item active">
        <a class="nav-link active" href="/tagihan-spp">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/tagihan-spp">
            @endif
            <i class="fas fa-sign-in-alt"></i>
            <span>Tagihan Spp</span></a>
    </li>

    @if (Request::segment(1) == 'tagihan-du')
    <li class="nav-item active">
        <a class="nav-link active" href="/tagihan-du">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/tagihan-du">
            @endif
            <i class="fas fa-sign-out-alt"></i>
            <span>Tagihan Daftar Ulang</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        TRANSAKSI
    </div>

    @if (Request::segment(1) == 'spp')
    <li class="nav-item active">
        <a class="nav-link active" href="/spp">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/spp">
            @endif
            <i class="fas fa-sign-in-alt"></i>
            <span>Transaksi Spp</span></a>
    </li>

    @if (Request::segment(1) == 'du')
    <li class="nav-item active">
        <a class="nav-link active" href="/du">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/du">
            @endif
            <i class="fas fa-sign-out-alt"></i>
            <span>Transaksi Daftar Ulang</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        LAPORAN PEMBAYARAN SISWA
    </div>

    @if (Request::segment(1) == 'rincian-spp')
    <li class="nav-item active">
        <a class="nav-link active" href="/rincian-spp">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/rincian-spp">
            @endif
            <i class="fas fa-chart-line"></i>
            <span>Rincian Spp</span></a>
    </li>

    @if (Request::segment(1) == 'rincian-du')
    <li class="nav-item active">
        <a class="nav-link active" href="/rincian-du">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/rincian-du">
            @endif
            <i class="fas fa-chart-line"></i>
            <span>Rincian Daftar Ulang</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->