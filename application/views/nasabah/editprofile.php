<div class="page-content">

    <div class="page-title page-title-small">
        <h2><a href="<?php echo base_url('nasabah/account'); ?>" data-back-button><i class="fa fa-arrow-left"></i></a>Edit Profile</h2>
    </div>
    <div class="card header-card shape-rounded" data-card-height="210">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="<?php echo base_url('assets/') ?>images/pictures/20s.jpg"></div>
    </div>
    <div class="card card-style">
        <div class="content mb-0">
            <?php echo form_open_multipart('nasabah/editProfile'); ?>
            <div style="margin-left: 50px;"><?php echo $this->session->flashdata('message'); ?></div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-3" style="display:flex; justify-content:center; margin-bottom:10px;">
                        <img src="<?php echo base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" style="width: 100px; height: 100px;">
                    </div>
                    <div class="col-sm-9">
                        <div class="custom-file input-style">
                            <input class="form-control align-content-center" type="file" id="image" name="image" style="height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group input-style input-style-2 has-icon input-required">
                <i class="input-icon fa fa-envelope"></i>
                <em style="color: black;">(readonly)</em>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" readonly>
            </div>
            <div class="form-group input-style input-style-2 has-icon input-required">
                <i class="input-icon fa fa-user"></i>
                <span class="color-highlight">Nama</span>
                <em style="color: black;">(edit)</em>
                <input class="form-control form-control-user" type="text" id="name" name="name" value="<?php echo $user['name']; ?>" placeholder="">
                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group input-style input-style-2 has-icon input-required">
                <i class="input-icon fa fa-venus-mars"></i>
                <span class="color-highlight">Jenis Kelamin</span>
                <em style="color: black;">(edit)</em>
                <input class="form-control form-control-user" type="text" id="jk" name="jk" value="<?php echo $user['jk']; ?>" placeholder="">
                <?php echo form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group input-style input-style-2 has-icon input-required">
                <i class="input-icon fa fa-calendar-days"></i>
                <span class="color-highlight">Tanggal Lahir</span>
                <em style="color: black;">(edit)</em>
                <input class="form-control form-control-user" type="text" id="ttl" name="ttl" value="<?php echo $user['ttl']; ?>" placeholder="">
                <?php echo form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group input-style input-style-2 has-icon input-required">
                <i class="input-icon fa fa-location"></i>
                <span class="color-highlight">Alamat</span>
                <!-- <em style="color: black;">(required)</em> -->
                <input class="form-control form-control-user" type="text" id="alamat" name="alamat" value="<?php echo $user['alamat']; ?>" placeholder="">
                <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <button type="submit" class="btn alert-success mb-3" style="width:100%;">Edit Profile</button>
            </form>
        </div>
    </div>

    <!-- footer and footer card-->
    <div class="footer" data-menu-load="menu-footer.html"></div>
</div>
<!-- end of page content-->
</div>