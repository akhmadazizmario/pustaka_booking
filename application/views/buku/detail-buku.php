<br>
<br>
<div class="x_panel" align="center">
    <div class="x_content">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="thumbnail" style="height: auto; position: relative; left: 100%; width: 200%;">
                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $gambar; ?>" style="max-width:100%; max-height: 100%; height: 150px; width: 120px">
                    <div class="caption">
                        <h5 style="min-height:40px;" align="center"><?= $pengarang ?></h5>
                        <center>
                            <table class="table table-stripped">
                                <tr>
                                    <th nowrap>Judul Buku: </th>
                                    <td nowrap><?= $judul; ?></td>
                                    <td>&nbsp;</td>
                                    <th>Kategori: </th>
                                    <td><?= $kategori ?></td>
                                </tr>
                                <tr>
                                    <th nowrap>Penerbit: </th>
                                    <td><?= $penerbit ?></td>
                                    <td>&nbsp;</td>
                                    <th>Dipinjam: </th>
                                    <td><?= $dipinjam ?></td>
                                </tr>
                                <tr>
                                    <th nowrap>Tahun Terbit: </th>
                                    <td><?= substr($tahun, 0, 4) ?></td>
                                    <td>&nbsp;</td>
                                    <th>Dibooking: </th>
                                    <td><?= $dibooking ?></td>
                                </tr>
                                <tr>
                                    <th>ISBN: </th>
                                    <td><?= $isbn ?></td>
                                    <td>&nbsp;</td>
                                    <th>Tersedia: </th>
                                    <td><?= $stok ?></td>
                                </tr>
                            </table>
                        </center>
                        <p>
                            <a class="btn btn-outline-primary fas fw fa-shopping-cart" href="<?= base_url('booking/tambahBooking/' . $id); ?>"> Booking</a>
                            <span class="btn btn-outline-secondary fas fw fa-reply" onclick="window.history.go(-1)"> Kembali</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services bg-light">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">http://localhost/pustaka-booking.com</a></h4>
                    <p class="description">website pustaka booking mahasiswa universitas bsi</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bxs-book"></i></div>
                    <h4 class="title"><a href="">buku </a></h4>
                    <p class="description">macam-macam buku airlangga yang bisa dipinjam dan dipelajari</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bxs-school"></i></div>
                    <h4 class="title"><a href="">kampus</a></h4>
                    <p class="description">Universitas bina sarana informatika</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bx bxs-map"></i></div>
                    <h4 class="title"><a href="">location</a></h4>
                    <p class="description">jalan.sipelem,kecamatan tegal barat,kota tegal</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Featured Services Section -->