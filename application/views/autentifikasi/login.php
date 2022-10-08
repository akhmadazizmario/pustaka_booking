<div class="content" style="background-image: url('<?php echo base_url() ?>assets1/img/3.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url() ?>assets/img/undraw_posting_photo.svg" alt="Image" class="img-fluid">

            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <center><img src="<?php echo base_url() ?>assets2/images/Untitled4.jpg" width="340px" height="100px"></center>
                        </div>
                        <hr>
                        <?= $this->session->flashdata('pesan'); ?>
                        <form action="<?= base_url('autentifikasi'); ?>" method="post" class="bg-white">
                            <div class="form-group bg-white">Email :
                                <input type="text" class="form-control form-control-user bg-light" value="<?= set_value('email'); ?>" id="email" placeholder=" Masukkan Alamat Email" name="email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group bg-white">password :
                                <input type="password" class="form-control form-control-user bg-light" id="password" placeholder=" Masukkan Password" name="password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br>
                            <div class="d-flex mb-5 align-items-center">
                                <input type="submit" value="Log In" class="btn btn-block btn-primary">

                            </div>
                            <span class="ml-auto"><a href="<?php echo base_url() ?>views/autentifikasi/login" class="forgot-pass">Lupa Password?</a></span>
                            <span class="d-block text-left my-4 text-muted">&copy; Copyright <strong><span>2022</span></strong>. All Rights Reserved</span>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>