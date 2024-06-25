<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Menu</div>
            <!-- Sidenav Link (Dashboard)-->
            <a class="nav-link {{ Request:: is ('main/dashboard') ? 'active' : '' }}" href="{{ route('main-dashboard') }}">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboard
            </a>
            <a class="nav-link {{ Request:: is ('main/surat-masuk*') || Request:: is ('main/print/surat-masuk')  ? 'active' : '' }}" href="{{ route('surat-masuk.index') }}">
                <div class="nav-link-icon"><i data-feather="arrow-right"></i></div>
                Surat Masuk
            </a>
            <a class="nav-link {{ Request:: is ('main/surat-keluar*') || Request:: is ('main/print/surat-keluar')  ? 'active' : '' }}"  href="{{ route('surat-keluar.index') }}">
                <div class="nav-link-icon"><i data-feather="arrow-left"></i></div>
                Surat Keluar
            </a>
            <a class="nav-link {{ Request:: is ('main/generate-surat*')  ? 'active' : '' }}"  href="{{ route('generate-surat.index') }}">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Buat Surat
            </a>
            <a class="nav-link {{ Request:: is ('main/setting*') ? 'active' : '' }}"  href="{{ route('setting.index') }}">
                <div class="nav-link-icon"><i data-feather="settings"></i></div>
                Profile
            </a>
            @can('admin')
                <a class="nav-link {{ Request:: is ('main/user*') ? 'active' : '' }}"  href="{{ route('user.index') }}">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    Pengguna
                </a>
            @endcan
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>
