<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background-image: url('http://localhost/pustaka-booking/assets1/img/banner_4_2.jpg');">
    <div class="container">
        <h1><span class="bg-danger text-white">Welcome to </span><span class="bg-white text-dark"> PUSTAKA-BOOKING</span></h1>
        <h2><span class="bg-warning text-dark">Website aplikasi pustaka untuk mahasiswa .</span></h2>
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
<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <img src="http://localhost/pustaka-booking/assets/img/upload/img1555522493.jpg" width="250px" height="250px"><br>
                    <h4 class="title text-center">Bahasa pemrograman</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <img src="http://localhost/pustaka-booking/assets/img/upload/img1557401465.jpg" width="250px" height="250px"><br>
                    <h4 class="title text-center">KOMIK</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="300">
                    <img src="http://localhost/pustaka-booking/assets/img/upload/img1557402455.jpg" width="250px" height="250px"><br>
                    <h4 class="title text-center">PERHITUNGAN</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="400">
                    <img src="http://localhost/pustaka-booking/assets/img/upload/img1557402703.jpg" width="250px" height="250px"><br>
                    <h4 class="title text-center">MATERI SEKOLAH</h4>
                </div>
            </div>

        </div>
    </div>
</section>


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
<section id="about" class="about section-bg bg-white">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Tata Cara peminjaman di Perpustakaan</h2>
            <h3><span class="text-dark">UNIVERSITAS BINA SARANA INFORMATIKA TEGAL KAMPUS TEGAL</span></h3>
            <p class="text-white"><i class="bx bxs-map" style="color:white"></i>jl.sipelem ,kec.tegal barat, kota tegal</p>
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




<!-- total facts-->
<style type="text/css">
    .facts .count-box {
        padding: 30px 30px 25px 30px;
        margin-top: 30px;
        width: 100%;
        position: relative;
        text-align: center;
        background: #fff;
    }

    .facts .count-box i {
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 24px;
        background: #0563bb;
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
<section id="facts" class="facts">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>TOTAL COST</h2>
            <p>banyak beberapa buku yang ada di perpustakaan, dimana teman-teman mahasiswa bisa memilih buku yang disuka. berikut total-total perkiraan buku di perpustakaan universitas bina sarana informatika kampus tegal</p>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bx bx-male"></i>
                    <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1" class="purecounter"></span>
                    <p>MAHASISWA</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="bx bx-food-menu"></i>
                    <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                    <p>BUKU</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bx bx-server"></i>
                    <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Dipinjam</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bx bx-sitemap"></i>
                    <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                    <p>kategori buku</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!--selesai total facts pinjam-->




<!-- ======= Portfolio Section ======= -->
<link href="http://localhost/pustaka-booking/assets/css/style1.css" rel="stylesheet" type="text/css">
<section id="portfolio" class="portfolio section-bg">
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
                <img src="http://localhost/pustaka-booking/assets1/img/buku3.jpg.crdownload" class="img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="http://localhost/pustaka-booking/assets1/img/buku4.jpg" class="img-fluid" alt="">
            </div>

        </div>
</section><!-- End Portfolio Section -->



<!-- Mmebaca bagan-->
<section id="about" class="d-flex align-items-center" style="background-image: url('http://localhost/pustaka-booking/assets1/img/images.jpg');">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>MEMBACA</h2>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="http://localhost/pustaka-booking/assets1/img/baca3.jpg">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-white">MEMBACA BUKU</h3>
                <p class="fst-italic text-white">
                    Membaca merupakan kegiatan melihat tulisan bacaan dan proses memahami isi teks dengan bersuara atau dalam hati.[1]
                    Membaca adalah mengungkapkan suatu imajinasi terhadap suatu pembaca yang disukai khalayak ramai dan juga dimengerti oleh
                    seseorang yang dicintai. Kegiatan membaca meliputi membaca nyaring dan membaca dalam hati. Membaca nyaring adalah kegiatan
                    membaca yang dilakukan dengan cara membaca keras di depan umum. Sedangkan kegiatan membaca dalam hati adalah kegiatan membaca
                    dengan seksama yang dilakukan untuk mengerti dan memahami maksud atau tujuan penulis dalam media tertulis.[2]

                    Membaca menjadi salah satu jenis kemampuan berbahasa melalui tulisan yang bersifat reseptif
                    karena dengan membaca seseorang akan memperoleh informasi, ilmu pengetahuan, dan pengalaman-pengalaman baru yang belum
                    pernah diketahui sebelumnya. Semua yang diperoleh melalui bacaan itu akan membuat orang tersebut mampu mempertinggi daya pikirannya,
                    mempertajam pandangannya, dan memperluas wawasannya.[3]
                </p>
            </div>
        </div>
    </div>
</section>
<!--end bagan membaca-->



<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon description"><i class="bx bxl-dribbble" style="color:black"></i></div>
                    <h4 class="title description"><a href="http://localhost/pustaka-booking/">
                            <font color="black">http://localhost/pustaka-booking.com</font>
                        </a></h4>
                    <p class="description text-">website pustaka booking mahasiswa universitas bsi</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bxs-book" style="color:black"></i></div>
                    <h4 class="title text-">buku</h4>
                    <p class="description text-">macam-macam buku airlangga yang bisa dipinjam dan dipelajari</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bxs-school" style="color:black"></i></div>
                    <h4 class="title text-">kampus</h4>
                    <p class="description text-">Universitas bina sarana informatika kampus kota tegal</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bx bxs-map" style="color:black"></i></div>
                    <h4 class="title text-">location</h4>
                    <p class="description text-">jalan.sipelem,kecamatan tegal barat,kota tegal</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Featured Services Section -->
<section id="featured-services" class="featured-services bg-white">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading text-dark">=============== pinjam sekarang Juga!! ================</span>
                <h2 class="mb-4">DAFTAR BUKU</h2>
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
                                <div class="icon-box " style="height: 450px;">
                                    <!--daftarbuku-->
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
<!-- end daftar buku-->


<!-- ======= Testimonials Section ======= -->
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
</section><!-- End Testimonials Section -->

<!-- maps -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2194358316983!2d109.1188162143274!3d-6.864286095039526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7613e508bbf%3A0x29b9f43bc3956608!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Tegal%20(UBSI%20Tegal)!5e0!3m2!1sid!2sid!4v1653274180287!5m2!1sid!2sid" width="1520" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- end maps-->

<!-- ======= About Section ======= -->
<section id="about" class="about section-bg bg-primary">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tentang Perpustakaan</h2>
            <h3><span class="text-white">UNIVERSITAS BINA SARANA INFORMATIKA TEGAL KAMPUS TEGAL</span></h3>
            <p class="text-white"><i class="bx bxs-map" style="color:white"></i>jl.sipelem ,kec.tegal barat, kota tegal</p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="http://localhost/pustaka-booking/assets1/img/bsi.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-white">PUSTAKA-BOOKING</h3>
                <p class="fst-italic text-white">
                    website pustaka-booking ini dibuat yaitu bertujuan untuk mempermudah mahasiswa meminjam buku kampus secara online,
                    dan mempermudahkannya dalam meminjam
                </p>
                <ul>
                    <li>
                        <i class="bx bx-book"></i>
                        <div>
                            <h5 class="text-white">Jenis Buku</h5>
                            <p class="text-white">Perpustakaan menyediakan banyak buku mulai dari buku komik, buku matakuliah, buku penelitian dll </p>
                        </div>
                    </li>
                    <li>
                        <i class="bx bx-alarm"></i>
                        <div>
                            <h5 class="text-white">Jam Buka</h5>
                            <p class="text-white"> Buka setiap Senin - jumat jam 08.00 sd 15.00</p>
                        </div>
                    </li>
                </ul>
                <p class="text-white">
                    ayok, mahasiswa sekalian mulailah baca buku dari sekarang dan bisa meminjam di pustaka booking,
                    karena buku adalah jembatan ilmu
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

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