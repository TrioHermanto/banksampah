<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Berkah Limbah Sari</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/pengguna/assets/css/'); ?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/pengguna/assets/css/'); ?>style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/pengguna/assets/'); ?>fontawesome/css/all.min.css">
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('vendor/pengguna/assets/images/'); ?>app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-highlight="green1">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <!-- header and footer bar go here-->
        <div class="header header-fixed header-auto-show header-logo-app">
            <a href="index.html" class="header-title">Bank Sampah</a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        </div>
        <div id="footer-bar" class="footer-bar-5">
            <a href="<?php echo base_url('petugas'); ?>" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span class="mt-1">Home</span></a>
            <a href="#" class="active-nav"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span class="mt-1">Jemput</span></a>
            <a href="#" class="active-nav"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span class="mt-1">Riwayat</span></a>
            <a href="<?php echo base_url('petugas/account'); ?>" class="active-nav"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span class="mt-1">User</span></a>
        </div>
        <div class="page-content">

            <div class="page-title page-title-small">
                <h2><a href="<?php echo base_url('petugas/account'); ?>" data-back-button><i class="fa fa-arrow-left"></i></a>Edit Profile</h2>
            </div>
            <div class="card header-card shape-rounded" data-card-height="210">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('assets/') ?>images/pictures/20s.jpg"></div>
            </div>
            <div class="card card-style">
                <div class="content mb-0">
                    <?php echo form_open_multipart('petugas/editProfile'); ?>
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
    </div>
    <script type="text/javascript" src="<?php echo base_url('vendor/pengguna/assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('vendor/pengguna/assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('vendor/pengguna/assets/js/'); ?>custom.js"></script>
</body>

</html>