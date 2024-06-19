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
            <a href="<?php echo base_url('nasabah'); ?>" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span class="mt-1">Home</span></a>
            <a href="#" class="active-nav"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span class="mt-1">Jemput</span></a>
            <a href="#" class="active-nav"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span class="mt-1">Riwayat</span></a>
            <a href="<?php echo base_url('nasabah/account'); ?>" class="active-nav"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span class="mt-1">User</span></a>
        </div>
        <div class="page-content">

            <div class="page-title page-title-small">
                <h2><a href="<?php echo base_url('nasabah/account'); ?>" data-back-button><i class="fa fa-arrow-left"></i></a>Ubah Password</h2>
            </div>
            <div class="card header-card shape-rounded" data-card-height="210">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('assets/') ?>images/pictures/20s.jpg"></div>
            </div>
            <div class="card card-style">
                <div class="content mb-0">
                    <form action="<?php echo base_url('nasabah/ubahPassword'); ?>" method="post">
                        <div class="row" style="margin-left: 40px;">
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-lock"></i>
                            <span class="color-highlight">Password Lama</span>
                            <input class="form-control form-control-user" type="password" id="password_lama" name="password_lama">
                            <?php echo form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-key"></i>
                            <span class="color-highlight">Password Baru</span>
                            <input class="form-control form-control-user" type="password" id="password_baru1" name="password_baru1">
                            <?php echo form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group input-style input-style-2 has-icon input-required">
                            <i class="input-icon fa fa-key"></i>
                            <span class="color-highlight">Masukan Password Baru</span>
                            <input class="form-control form-control-user" type="password" id="password_baru2" name="password_baru2">
                            <?php echo form_error('password_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn alert-success mb-3" style="width:100%;">Ubah Password</button>
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