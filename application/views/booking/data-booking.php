<div class="pagetitle">
    <h1><?= $judul; ?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active"><?= $judul; ?></li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<hr>
<section class="section dashboard">
    <div class="row">
        <center>
            <table>
                <tr>
                    <td>
                        <div class="table-responsive full-width">
                            <table class="table table-bordered table-striped tablehover" id="table-datatable">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Buku</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">penerbit</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($temp as $t) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td>
                                            <img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded" alt="No Picture" width="10%">
                                        </td>
                                        <td><?= $t['penulis']; ?></td>
                                        <td><?= $t['penerbit']; ?></td>
                                        <td><?= substr(
                                                $t['tahun_terbit'],
                                                0,
                                                4
                                            ); ?></td>
                                        <td>
                                            <a href="<?= base_url('booking/hapusbooking/' . $t['id_buku']); ?>" onclick="return_konfirm('Yakin tidak Jadi Booking '.$t['judul_buku'])">hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url(); ?>"><span class="fas fw fa-play"></span> Lanjutkan Booking Buku</a>
                        <a class="btn btn-sm btn-outline-success" href="<?php echo base_url() . 'booking/bookingSelesai' . $this->session->userdata('id_user'); ?>"><span class="fas fw fa-stop"></span> Selesaikan Booking</a>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</section>