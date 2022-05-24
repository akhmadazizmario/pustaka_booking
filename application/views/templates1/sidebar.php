<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= base_url('admin'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">profil</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('user'); ?>">
                <i class="bi bi-person"></i>
                <span>profil</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-heading">buku</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('buku/kategori'); ?>">
                <i class="bi bi-border-style"></i>
                <span>kategori buku</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('buku'); ?>">
                <i class="bi bi-book"></i>
                <span>Data Buku</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-heading">menu</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('user/anggota'); ?>">
                <i class="bi bi-person-lines-fill"></i>
                <span>Data Anggota</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('pinjam'); ?>">
                <i class="bi bi-card-list"></i>
                <span>Data Peminjaman</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('pinjam/daftarBooking'); ?>">
                <i class="bi bi-file-ruled"></i>
                <span>Data Booking</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-heading">laporan</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('laporan/laporan_buku'); ?>">
                <i class="bi bi-clipboard"></i>
                <span>Laporan Data Buku</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('laporan/laporan_anggota'); ?>">
                <i class="bi bi-clipboard"></i>
                <span>Laporan Data Anggota</span>
            </a>
        </li><!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('laporan/laporan_pinjam'); ?>">
                <i class="bi bi-clipboard"></i>
                <span>Laporan Data Peminjaman</span>
            </a>
        </li><!-- End Blank Page Nav -->

        <li class="nav-heading">end</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('autentifikasi/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>LOGOUT</span>
            </a>
        </li><!-- End-->


    </ul>

</aside><!-- End Sidebar-->
<main id="main" class="main">