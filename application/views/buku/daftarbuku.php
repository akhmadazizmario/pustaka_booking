<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background-image: url('http://localhost/pustaka-booking/assets1/img/banner_4_2.jpg');">
    <div class="container">
        <h1><span class="bg-danger text-white">Welcome to </span><span class="bg-white text-dark">| PUSTAKA-BOOKING</span></h1>
        <h2><span class="bg-warning text-dark">Website aplikasi pustaka untuk mahasiswa </span></h2>
        <a class="btn btn-danger fas fw fa-search description text-white" href="#buku">Booking Sekarang</a>
    </div>
    </div>
</section><!-- End Hero -->
<?php
if (!empty($this->session->userdata('email'))) { ?>
    <?= $this->session->flashdata('pesan'); ?>
<?php } else { ?>
    <?= $this->session->flashdata('pesan'); ?>
<?php } ?>


<!-- ======= Featured Services Section ======= -->
<style type="text/css">
    /* Card */
    .card {
        margin-bottom: 30px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
    }

    .card-header,
    .card-footer {
        border-color: #ebeef4;
        background-color: #fff;
        color: #798eb3;
        padding: 15px;
    }

    .card-title {
        padding: 20px 0 15px 0;
        font-size: 18px;
        font-weight: 500;
        color: #012970;
        font-family: "Poppins", sans-serif;
    }

    .card-title span {
        color: #899bbd;
        font-size: 14px;
        font-weight: 400;
    }

    .card-body {
        padding: 0 20px 20px 20px;
    }

    .card-img-overlay {
        background-color: rgba(255, 255, 255, 0.6);
    }
</style>
<hr style="color: white;">
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <section id="featured-services" class="featured-services">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" style="width: 400px;" data-aos="fade-up" data-aos-delay="100">
                                <center>
                                    <div class="icon description"><a href="<?= base_url('Pages/fakultas'); ?>"><i class="bx bx-buildings" style="color:black"></i></a></div>
                                </center>
                                <h4 class="title text-center"><a href="<?= base_url('Pages/fakultas'); ?>">FAKULTAS</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box " style=" width: 400px;" data-aos="fade-up" data-aos-delay="200">
                                <center>
                                    <div class="icon description"><a href="<?= base_url('Pages/fasilitas'); ?>"><i class="bx bxs-factory" style="color:black"></i></a></div>
                                    <center>
                                        <h4 class="title text-center"><a href="<?= base_url('Pages/fasilitas'); ?>">FASILITAS</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" style=" width: 400px;" data-aos="fade-up" data-aos-delay="300">
                                <center>
                                    <div class="icon description"><a href="<?= base_url('Pages/video'); ?>"><i class='bx bxl-youtube'></i></a></div>
                                    <center>
                                        <h4 class="title text-center"><a href="<?= base_url('Pages/video'); ?>">VIDEO MATERI</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" style=" width: 400px;" data-aos=" fade-up" data-aos-delay="400">
                                <center>
                                    <div class="icon description"><a href="<?= base_url('pages/scan'); ?>"><i class="bx bx-qr-scan" style="color:black"></i></a></div>
                                    <center>
                                        <h4 class="title text-center"><a href="<?= base_url('pages/scan'); ?>">SCAN QR</a></h4>
                            </div>
                        </div>
                        <br>
                        <hr style="color: white;">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box " style="width: 400px;" data-aos="fade-up" data-aos-delay="400">
                                <center>
                                    <div class="icon description"><a href="<?= base_url('Pages/syarat'); ?>"><i class="bx bx-spreadsheet" style="color:black"></i></a></div>
                                    <center>
                                        <h4 class="title text-center"><a href="<?= base_url('Pages/syarat'); ?>">PERSYARATAN</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box " style="width: 400px;" data-aos="fade-up" data-aos-delay="400">
                                <center>
                                    <div class="icon description"><a href="<?= base_url('pages/calender'); ?>"><i class="bx bx-calendar" style="color:black"></i></a></div>
                                    <center>
                                        <h4 class="title text-center"><a href="<?= base_url('pages/calender'); ?>">JADWAL PUSTAKA</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box " style="width: 400px;" data-aos="fade-up" data-aos-delay="400">
                                <center>
                                    <div class="icon description"><a href="<?= base_url('Pages/pengumuman'); ?>"><i class="bx bxs-megaphone" style="color:black"></i></a></div>
                                    <center>
                                        <h4 class="title text-center"><a href="<?= base_url('Pages/pengumuman'); ?>">PENGUMUMAN</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box " style="width: 400px;" data-aos="fade-up" data-aos-delay="400">
                                <center>
                                    <div class="icon description"><a href="<?= base_url('pages/blog'); ?>"><i class="bx bxl-blogger" style="color:black"></i></a></div>
                                    <center>
                                        <h4 class="title text-center"><a href="<?= base_url('pages/blog'); ?>">BLOG KAMPUS</a></h4>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

</div>


<!-- ======= Tata cara peminjaman hal ======= -->
<style type="text/css">
    .about .resume-title {
        font-size: 26px;
        font-weight: 700;
        margin-top: 20px;
        margin-bottom: 20px;
        color: #45505b;
    }

    .about .resume-item {
        padding: 0 0 20px 20px;
        margin-top: -2px;
        border-left: 2px solid #0563bb;
        position: relative;
    }

    .about .resume-item h4 {
        line-height: 18px;
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        font-family: "Poppins", sans-serif;
        color: #0563bb;
        margin-bottom: 10px;
    }

    .about .resume-item h5 {
        font-size: 16px;
        background: #f7f8f9;
        padding: 5px 15px;
        display: inline-block;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .about .resume-item ul {
        padding-left: 20px;
    }

    .about .resume-item ul li {
        padding-bottom: 10px;
    }

    .about .resume-item:last-child {
        padding-bottom: 0;
    }

    .about .resume-item::before {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 50px;
        left: -9px;
        top: 0;
        background: #fff;
        border: 2px solid #0563bb;
    }
</style>
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <section id="about" class="about section-bg bg-white" style="background-image: url('http://localhost/pustaka-booking/assets1/img/3.png');">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Tata Cara peminjaman di Perpustakaan</h2>
                        <h3><span class="text-dark">UNIVERSITAS BINA SARANA INFORMATIKA KAMPUS TEGAL</span></h3>
                        <p class="text-dark"><i class="bx bxs-map" style="color:black"></i>jl.sipelem ,kec.tegal barat, kota tegal</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                            <img src="http://localhost/pustaka-booking/assets/img/undraw_posting_photo.svg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="resume-item pb-0">
                                        <h4>REGISTRASI</h4>
                                        <p> bagi kamu yang belum registrasi, maka harus registrasi terlebih dahulu agar bisa mngakses websitenya</p><br>
                                    </div>
                                    <div class="resume-item pb-0">
                                        <h4>LOGIN</h4>
                                        <p> bila sudah registrasi , silahkan login terlebih dahulu</p><br>
                                    </div>
                                    <div class="resume-item pb-0">
                                        <h4>PILIH BUKU YANG DISUKA</h4>
                                        <p> Pilihlah buku yang anda suka , yang mau anda pinjam </p><br>
                                    </div>
                                    <div class="resume-item pb-0">
                                        <h4>BOOKING</h4>
                                        <p> jika sudah , maka kliklah tombol booking </p><br>
                                    </div>
                                    <div class="resume-item pb-0">
                                        <h4>SELESAIKAN BOOKING</h4>
                                        <p> Jika sudah di booking, maka kliklah tombol selesaikan booking</p><br>
                                    </div>
                                    <div class="resume-item pb-0">
                                        <h4>SELESAI</h4>
                                        <p>cetak bukti pdf, dan ke perpus untuk mengambil bukunya dan sertakan buktinya</p><br>
                                    </div>
                                </div>
                            </div>

                        </div>
            </section><!-- End About Section -->
        </div>
    </div>
</div>




<!-- total facts-->
<style type="text/css">
    .facts .count-box {
        padding: 30px 30px 25px 30px;
        margin-top: 30px;
        width: 100%;
        position: relative;
        text-align: center;
        background: rgba(red, green, blue, alpha);
    }

    .facts .count-box i {
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 24px;
        background: green;
        color: #fff;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
    }

    .facts .count-box span {
        font-size: 36px;
        display: block;
        font-weight: 600;
        color: #011426;
    }

    .facts .count-box p {
        padding: 0;
        margin: 0;
        font-family: "Raleway", sans-serif;
        font-size: 14px;
    }
</style>
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <section id="facts" class="facts">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>TOTAL REPORT</h2>
                        <p>
                            banyak beberapa buku yang
                            ada di perpustakaan, dimana teman-teman
                            mahasiswa bisa memilih buku yang di pinjam. berikut total-total perkiraan buku di perpustakaan universitas bina sarana informatika kampus tegal
                        </p>
                    </div>

                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="count-box">
                                <i class="bx bx-male"></i>
                                <span><?= $this->ModelUser->getUserWhere(['role_id'])->num_rows(); ?></span>
                                <p>Pengguna Aktif</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                            <div class="count-box">
                                <i class="bx bx-food-menu"></i>
                                <span><?php
                                        $where = ['stok != 0'];
                                        $totalstok = $this->ModelBuku->total('stok', $where);
                                        echo $totalstok;
                                        ?></span>
                                <p>BUKU</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                            <div class="count-box">
                                <i class="bx bx-server"></i>
                                <span><?= $this->ModelPinjam->getUserPinjam(['no_pinjam'])->num_rows(); ?></span>
                                <p>Dipinjam</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                            <div class="count-box">
                                <i class="bx bx-sitemap"></i>
                                <span><?= $this->ModelPinjam->getUserKategori(['id'])->num_rows(); ?></span>
                                <p>kategori buku</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<!--selesai total facts pinjam-->

<!-- End Featured Services Section -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <section id="featured-services" class="featured-services bg-white">
                <div class="container" data-aos="fade-up">
                    <div class="row justify-content-center mb-5 pb-3">
                        <div class="section-title">
                            <h2>DAFTAR BUKU</h2>
                            <p>
                                pilih buku yang anda minati
                            </p>
                        </div>
                    </div>
                    <!-- ini isi bodinya ya gaees -->
                    <div style="padding: 25px;" id="buku">
                        <div class="x_panel">
                            <div class="x_content">
                                <!-- Tampilkan semua produk -->
                                <div class="row">
                                    <!-- looping products -->
                                    <?php foreach ($buku as $buku) { ?>
                                        <div class="col-md-2 col-md-3">
                                            <div class="icon-box " style="height: 400px;">
                                                <!--daftarbuku-->
                                                <center>
                                                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $buku->image; ?>" style="max-width:100%; max-height: 100%; height: 200px; width: 180px">
                                                    <div class="caption">
                                                        <h5 style="min-height:30px;" class="description "><?= $buku->pengarang ?></h5>
                                                        <h5 class="description "><?= $buku->penerbit ?></h5>
                                                        <h5 class="description "><?= substr($buku->tahun_terbit, 0, 4) ?></h5>
                                                        <p>
                                                            <?php
                                                            if ($buku->stok < 1) {
                                                                echo "<i class='btn btn-warning fas fw fa-shopping-cart description'> Booking&nbsp;&nbsp 0</i>";
                                                            } else {
                                                                echo "<a class='btn btn-warning fas fw fa-shopping-cart description' href='" . base_url('booking/tambahBooking/' . $buku->id) . "'> Booking</a>";
                                                            }
                                                            ?>
                                                            <a class="btn btn-danger fas fw fa-search description" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"> Detail</a>
                                                        </p>
                                                    </div>
                                                </center>
                                            </div><br><br>
                                        </div>
                                    <?php } ?>
                                    <!-- end looping -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- end daftar buku-->


<!-- ======= Testimonials Section ======= -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <link href="http://localhost/pustaka-booking/assets/css/style1.css" rel="stylesheet" type="text/css">
            <section id="testimonials" class="testimonials section-bg-white">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Testimonials</h2>
                    </div>

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="http://localhost/pustaka-booking/assets1/img/th.jpg" class="testimonial-img" alt="">
                                    <h3 class="text-white">AZIZ MARIO</h3>
                                    <h4>Mahasiswa ubsi d3 sistem informasi</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        semangat terus dan jangan pernah putus asa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="http://localhost/pustaka-booking/assets1/img/th.jpg" class="testimonial-img" alt="">
                                    <h3 class="text-white">AZIZ MARIO</h3>
                                    <h4>Mahasiswa</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        membaca adalah jembatan ilmu
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="http://localhost/pustaka-booking/assets1/img/th.jpg" class="testimonial-img" alt="">
                                    <h3 class="text-white">naruto</h3>
                                    <h4>Ninja konoha</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        kagebunsin no jutsu.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="http://localhost/pustaka-booking/assets1/img/th.jpg" class="testimonial-img" alt="">
                                    <h3 class="text-white">sasuke</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        chidori raikiri no jutsu.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div><!-- End Testimonials Section -->

<!-- ======= Portfolio Section ======= -->
<link href="http://localhost/pustaka-booking/assets/css/style1.css" rel="stylesheet" type="text/css">
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <section id="portfolio" class="portfolio section-bg-white">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>GALERI PENGUNJUNG</h2>
                    </div>
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting perpustkaan.</p>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-card">Card</li>
                                <li data-filter=".filter-web">Web</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="http://localhost/pustaka-booking/assets1/img/buku1.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="http://localhost/pustaka-booking/assets1/img/buku2.jpeg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="http://localhost/pustaka-booking/assets1/img/buku5.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="http://localhost/pustaka-booking/assets1/img/buku4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="http://localhost/pustaka-booking/assets1/img/buju.jpg" class="img-fluid" alt="">
                        </div>

                    </div>
            </section>
        </div>
    </div>
</div><!-- End Portfolio Section -->

<!-- Mmebaca bagan-->
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <section id="about" class="d-flex align-items-center" style="background-image: url('http://localhost/pustaka-booking/assets1/img/c3.jpg');">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="text-dark">MEMBACA</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                            <img src="http://localhost/pustaka-booking/assets1/img/t.jpg" height="380px" width="630px">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-dark">MEMBACA BUKU</h3>
                            <p class="icon-box text-dark">
                                <font color="black">
                                    Membaca merupakan kegiatan melihat tulisan bacaan dan proses memahami isi teks dengan bersuara atau dalam hati.[1]
                                    Membaca adalah mengungkapkan suatu imajinasi terhadap suatu pembaca yang disukai khalayak ramai dan juga dimengerti oleh
                                    seseorang yang dicintai. Kegiatan membaca meliputi membaca nyaring dan membaca dalam hati. Membaca nyaring adalah kegiatan
                                    membaca yang dilakukan dengan cara membaca keras di depan umum. Sedangkan kegiatan membaca dalam hati adalah kegiatan membaca
                                    dengan seksama yang dilakukan untuk mengerti dan memahami maksud atau tujuan penulis dalam media tertulis.[2]

                                    Membaca menjadi salah satu jenis kemampuan berbahasa melalui tulisan yang bersifat reseptif
                                    karena dengan membaca seseorang akan memperoleh informasi, ilmu pengetahuan, dan pengalaman-pengalaman baru yang belum
                                    pernah diketahui sebelumnya. Semua yang diperoleh melalui bacaan itu akan membuat orang tersebut mampu mempertinggi daya pikirannya,
                                    mempertajam pandangannya, dan memperluas wawasannya.[3]</font>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--end bagan membaca-->

<!-- ======= About Section ======= -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <section id="about" class="about section-bg bg-white">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Tentang Perpustakaan</h2>
                        <h3><span>UNIVERSITAS BINA SARANA INFORMATIKA KAMPUS TEGAL</span></h3>
                        <p class="text-dark"><i class="bx bxs-map" style="color:black"></i>jl.sipelem ,kec.tegal barat, kota tegal</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                            <img src="http://localhost/pustaka-booking/assets1/img/bsi.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <h3>PUSTAKA-BOOKING</h3>
                            <p class="fst-italic ">
                                website pustaka-booking ini dibuat yaitu bertujuan untuk mempermudah mahasiswa meminjam buku kampus secara online,
                                dan mempermudahkannya dalam meminjam
                            </p>
                            <ul>
                                <li>
                                    <i class="bx bx-book"></i>
                                    <div>
                                        <h5>Jenis Buku</h5>
                                        <p>Perpustakaan menyediakan banyak buku mulai dari buku komik, buku matakuliah, buku penelitian dll </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="bx bx-alarm"></i>
                                    <div>
                                        <h5>Jam Buka</h5>
                                        <p> Buka setiap Senin - jumat jam 08.00 sd 15.00</p>
                                    </div>
                                </li>
                            </ul>
                            <p>
                                ayok, mahasiswa sekalian mulailah baca buku dari sekarang dan bisa meminjam di pustaka booking,
                                karena buku adalah jembatan ilmu
                            </p>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div><!-- End About Section -->

<!-- maps -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body info-card sales-card">
            <hr style="color: white;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2194358316983!2d109.1188162143274!3d-6.864286095039526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7613e508bbf%3A0x29b9f43bc3956608!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Tegal%20(UBSI%20Tegal)!5e0!3m2!1sid!2sid!4v1653274180287!5m2!1sid!2sid" width="1480" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</div>
<!-- end maps-->

<!-- ======= Contact Section ======= -->
<section id="contact" class="testimonials section-bg-white">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        <div class="row mt-1">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-map"></i>
                        <h4 class="text-white">Location:</h4>
                        <p class="text-white">jl.sipelem kota tegal</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4 class="text-white">Email:</h4>
                        <p class="text-white">ubsitegal@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4 class="text-white">Call:</h4>
                        <p class="text-white">+62 xxxx xxxx xxx</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama kamu" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email kamu" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading text-white">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message text-white">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button class="bg-success" type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<!-- develloper-->
<section>
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>DEVELOPER</h2>
        </div>
        <center>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="http://localhost/pustaka-booking/assets1/img/th.jpg" class="testimonial-img" alt="">
                            <h3 class="text-dark">AKHMAD AZIZ MARIO</h3>
                            <h4>Mahasiswa ubsi D3 sistem informasi</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                semangat terus dan jangan pernah putus asa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
            </div>
        </center>
    </div>
</section>