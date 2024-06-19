<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Profile</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ edit profile ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hello <span class="small text-muted"><?php echo $user['name']; ?></span></h5>
                    </div>
                    <div class="card-body">
                        <div class="content mb-0">
                            <?php echo form_open_multipart('admin/editProfile'); ?>
                            <div><?php echo $this->session->flashdata('message'); ?></div>
                            <div class="form-group input-style input-style-2 has-icon input-required">
                                <i class="input-icon fa fa-envelope"></i>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" readonly>
                            </div>
                            <div class="form-group input-style input-style-2 has-icon input-required">
                                <i class="input-icon fa fa-user"></i>
                                <span class="color-highlight">Nama</span>
                                <input class="form-control form-control-user" type="text" id="name" name="name" value="<?php echo $user['name']; ?>" placeholder="">
                                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group input-style input-style-2 has-icon input-required">
                                <i class="input-icon fa fa-venus-mars"></i>
                                <span class="color-highlight">Jenis Kelamin</span>
                                <input class="form-control form-control-user" type="text" id="jk" name="jk" value="<?php echo $user['jk']; ?>" placeholder="">
                                <?php echo form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group input-style input-style-2 has-icon input-required">
                                <i class="input-icon fa fa-calendar-days"></i>
                                <span class="color-highlight">Tanggal Lahir</span>
                                <input class="form-control form-control-user" type="text" id="ttl" name="ttl" value="<?php echo $user['ttl']; ?>" placeholder="">
                                <?php echo form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group input-style input-style-2 has-icon input-required">
                                <i class="input-icon fa fa-location"></i>
                                <span class="color-highlight">Alamat</span>
                                <input class="form-control form-control-user" type="text" id="alamat" name="alamat" value="<?php echo $user['alamat']; ?>" placeholder="">
                                <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3" style="display:flex; justify-content:center; margin-bottom:10px;">
                                        <img src="<?php echo base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file input-style my-3">
                                            <input class="form-control align-content-center" type="file" id="image" name="image" style="height: 50px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success my-3" style="width:100%;">Edit Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ edit profile ] end -->
        </div>

        <div class="row">
            <!-- [ ubah password ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Ubah Password</h5>
                    </div>
                    <div class="card-body">
                        <div class="content mb-0">
                            <form action="<?php echo base_url('admin/ubahPassword'); ?>" method="post">
                                <div class="form-group input-style input-style-2 has-icon input-required">
                                    <span class="color-highlight">Password Lama</span>
                                    <input class="form-control form-control-user" type="password" id="password_lama" name="password_lama">
                                    <?php echo form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group input-style input-style-2 has-icon input-required">
                                    <span class="color-highlight">Password Baru</span>
                                    <input class="form-control form-control-user" type="password" id="password_baru1" name="password_baru1">
                                    <?php echo form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group input-style input-style-2 has-icon input-required">
                                    <span class="color-highlight">Masukan Password Baru</span>
                                    <input class="form-control form-control-user" type="password" id="password_baru2" name="password_baru2">
                                    <?php echo form_error('password_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-success my-3" style="width:100%;">Ubah Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ ubah password ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->