<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>PUSTAKA</span></h1>
        <h2>Website aplikasi pustaka untuk mahasiswa</h2>
    </div>
</section><!-- End Hero -->
<?php
if (!empty($this->session->userdata('email'))) { ?>
    <?= $this->session->flashdata('pesan'); ?>
<?php } else { ?>
    <?= $this->session->flashdata('pesan'); ?>
<?php } ?>
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services bg-white">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box bg-dark" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-dribbble" style="color:aqua"></i></div>
                    <h4 class="title text-white"><a href="http://localhost/pustaka-booking/">
                            <font color="white">http://localhost/pustaka-booking.com</font>
                        </a></h4>
                    <p class="description text-white">website pustaka booking mahasiswa universitas bsi</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box bg-dark" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bxs-book" style="color:aqua"></i></div>
                    <h4 class="title text-white">buku</h4>
                    <p class="description text-white">macam-macam buku airlangga yang bisa dipinjam dan dipelajari</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box bg-dark" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bxs-school" style="color:aqua"></i></div>
                    <h4 class="title text-white">kampus</h4>
                    <p class="description text-white">Universitas bina sarana informatika kampus kota tegal</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box bg-dark" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bx bxs-map" style="color:aqua"></i></div>
                    <h4 class="title text-white">location</h4>
                    <p class="description text-white">jalan.sipelem,kecamatan tegal barat,kota tegal</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Featured Services Section -->
<section id="featured-services" class="featured-services bg-white">
    <div class="container" data-aos="fade-up">
        <!-- ini isi bodinya ya gaees -->
        <div style="padding: 25px;" id="bookingdaftarbuku">
            <div class="x_panel">
                <div class="x_content">
                    <!-- Tampilkan semua produk -->
                    <div class="row">
                        <!-- looping products -->
                        <?php foreach ($buku as $buku) { ?>
                            <div class="col-md-2 col-md-3">
                                <div class="thumbnail" style="height: 370px;">
                                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $buku->image; ?>" style="max-width:100%; max-height: 100%; height: 200px; width: 180px">
                                    <div class="caption">
                                        <h5 style="min-height:30px;"><?= $buku->pengarang ?></h5>
                                        <h5><?= $buku->penerbit ?></h5>
                                        <h5><?= substr($buku->tahun_terbit, 0, 4) ?></h5>
                                        <p>
                                            <?php
                                            if ($buku->stok < 1) {
                                                echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking</i>";
                                            } else {
                                                echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href='" . base_url('booking/tambahBooking/' . $buku->id) . "'> Booking</a>";
                                            }
                                            ?>
                                            <a class="btn btn-outline-warning fas fw fa-search" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"> Detail</a>
                                        </p>
                                    </div>
                                </div>
                            </div> <?php } ?>
                        <!-- end looping -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======= About Section ======= -->
<section id="about" class="about section-bg bg-white">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tentang Perpustakaan</h2>
            <h3><span>UNIVERSITAS BINA SARANA INFORMATIKA TEGAL KAMPUS TEGAL</span></h3>
            <p><i class="bx bxs-map" style="color:black"></i>jl.sipelem ,kec.tegal barat, kota tegal</p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="http://localhost/pustaka-booking/assets1/img/bsi.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>PUSTAKA-BOOKING</h3>
                <p class="fst-italic">
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
</section><!-- End About Section -->