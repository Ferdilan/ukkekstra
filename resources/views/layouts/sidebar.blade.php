<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pengelolaan Ekstra</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if (Request::segment(1) == 'welcome')
    <li class="nav-item active">
        <a class="nav-link active" href="/">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/">
            @endif
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @if ( Str::length(Auth::guard('kesiswaan')->user()) > 0)
    @if ( Auth::guard('kesiswaan')->user()->level = "kesiswaan")
    <!-- Heading -->
    <div class="sidebar-heading">
        KESISWAAN
    </div> 

    @if (Request::segment(1) == 'Anggota Ekstra')
    <li class="nav-item active">
        <a class="nav-link active" href="/anggotaekstra">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/anggotaekstra">
            @endif
            <i class="fas fa-users"></i>
            <span>Anggota Ekstra</span></a>
    </li>

    @if (Request::segment(1) == 'daftar ekstra')
    <li class="nav-item active">
        <a class="nav-link active" href="/daftarekstra">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/daftarekstra">
            @endif
            <i class="fas fa-list-ul"></i>
            <span>Daftar Ekstra</span></a>
    </li>

    @if (Request::segment(1) == 'daftar pembina')
    <li class="nav-item active">
        <a class="nav-link active" href="/daftarpembina">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/daftarpembina">
            @endif
            <i class="fas fa-address-card"></i>
            <span>Daftar Pembina</span></a>
    </li>

    @if (Request::segment(1) == 'Jurnal Ekstra')
    <li class="nav-item active">
        <a class="nav-link active" href="/jurnal">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/jurnal">
            @endif
            <i class="fas fa-book"></i>
            <span>Jurnal Ekstra</span></a>
    </li>

    @if (Request::segment(1) == 'Lihat Pendaftar')
    <li class="nav-item active">
        <a class="nav-link active" href="/pendaftaran">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/pendaftaran">
            @endif
            <i class="fas fa-child"></i>
            <span>Lihat Pendaftar</span></a>
    </li>
    @endif
    @endif
    

    @if ( Auth::guard('pembina')->check())
    <!-- Heading -->
    <div class="sidebar-heading">
        PEMBINA
    </div>

    @if (Request::segment(1) == 'Data Anggota')
    <li class="nav-item active">
        <a class="nav-link active" href="/anggotaekstra">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/anggotaekstra">
            @endif
            <i class="fas fa-sign-in-alt"></i>
            <span>Data Anggota</span></a>
    </li>

    @if (Request::segment(1) == 'Jurnal Ekstra')
    <li class="nav-item active">
        <a class="nav-link active" href="/jurnal">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/jurnal">
            @endif
            <i class="fas fa-book"></i>
            <span>Jurnal Ekstra</span></a>
    </li>

    @if (Request::segment(1) == 'Lihat Pendaftar')
    <li class="nav-item active">
        <a class="nav-link active" href="/pendaftaran">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/pendaftaran">
            @endif
            <i class="fas fa-child"></i>
            <span>Lihat Pendaftar</span></a>
    </li>
    @endif

    @if ( Str::length(Auth::guard('user')->user()) > 0)
    @if ( Auth::guard('user')->user()->level = "siswa")
    <!-- Heading -->
    <div class="sidebar-heading">
        SISWA
    </div>

    @if (Request::segment(1) == 'Pendaftaran Ekstra')
    <li class="nav-item active">
        <a class="nav-link active" href="/siswa/pendaftaran">
            @else
    <li class="nav-item">
        <a class="nav-link" href="/siswa/pendaftaran">
            @endif
            <i class="fas fa-child"></i>
            <span>Pendaftaran Ekstra</span></a>
    </li>
    @endif
    @endif

    
</ul>
<!-- End of Sidebar -->