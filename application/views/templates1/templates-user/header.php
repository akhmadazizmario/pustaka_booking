<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pustaka-booking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="http://localhost/pustaka-booking/assets1/img/favicon.png" rel="icon">
    <link href="http://localhost/pustaka-booking/assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="http://localhost/pustaka-booking/assets1/vendor/aos/aos.css" rel="stylesheet">
    <link href="http://localhost/pustaka-booking/assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/pustaka-booking/assets1/vendor/bootstrap-icons/" rel="stylesheet">
    <link href="http://localhost/pustaka-booking/assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="http://localhost/pustaka-booking/assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="http://localhost/pustaka-booking/assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="http://localhost/pustaka-booking/assets1/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="#">aziz@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>089537897988</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="<?= base_url(); ?>">Pustaka<span class="sr-only"></span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-item nav-link active" href="<?= base_url(); ?>">Beranda <span class="sr-only"></span></a></li>
                    <?php
                    if (!empty($this->session->userdata('email'))) { ?>
                        <li><a class="nav-item nav-link" href="<?= base_url('booking'); ?>">
                                Booking <b> <?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?>
                                </b>Buku</a></li>
                        <li><a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a></li>
                        <li><a class="nav-item nav-link" href="<?= base_url('autentifikasi/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a></li>
                    <?php } else { ?>
                        <li><a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="<?= base_url('autentifikasi/registrasi'); ?>"> Daftar</a></li>
                        <li><a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal" href="<?= base_url('autentifikasi'); ?>"> Log in</a></li>
                    <?php } ?>
                    <li><span class="nav-item nav-link nav-right" style="display:block; margin-left:20px;">Selamat Datang <b><?= $user; ?></b></span></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->