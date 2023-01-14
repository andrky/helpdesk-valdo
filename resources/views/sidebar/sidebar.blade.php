<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Menu</div>
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="/dashboard">
                <div class="sb-nav-link-icon"><i class="bi bi-house fs-6"></i></div>
                Dashboard
            </a>
            <a class="nav-link {{ Request::is('pengaduan') ? 'active' : ''}}" href="/pengaduan">
                <div class="sb-nav-link-icon"><i class="bi bi-ticket-detailed fs-6"></i></div>
                Pengaduan
            </a>
            <a class="nav-link {{ Request::is('divisi*') ? 'active' : ''}}" href="/divisi">
                <div class="sb-nav-link-icon"><i class="bi bi-diagram-3 fs-6"></i></div>
                Divisi
            </a>
            <a class="nav-link {{ Request::is('team*') ? 'active' : ''}}" href="/team">
                <div class="sb-nav-link-icon"><i class="bi bi-globe fs-6"></i></div>
                Team
            </a>
            <a class="nav-link {{ Request::is('kategori*') ? 'active' : ''}}" href="/kategori">
                <div class="sb-nav-link-icon"><i class="bi bi-layout-three-columns fs-6"></i></div>
                Kategori
            </a>
            <a class="nav-link {{ Request::is('karyawan*') ? 'active' : ''}}" href="/karyawan">
                <div class="sb-nav-link-icon"><i class="bi bi-people fs-6"></i></div>
                Karyawan
            </a>
            <a class="nav-link {{ Request::is('user*') ? 'active' : ''}}" href="/user">
                <div class="sb-nav-link-icon"><i class="bi bi-person fs-6"></i></div>
                User
            </a>
        </div>
    </div>
    
</nav>
