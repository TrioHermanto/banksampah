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
                <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Profile Nasabah</h2>
            </div>
            <div class="card header-card shape-rounded" data-card-height="210">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="<?php echo base_url('vendor/pengguna/assets/') ?>images/pictures/20s.jpg"></div>
            </div>

            <div class="card card-style">
                <div class="content mt-0 mb-2">
                    <div class="img1 mt-4" style="display:flex; justify-content:center">
                        <img src="<?php echo base_url('assets/img/profile/') . $user['image']; ?>" style="height: 100px; width: 100px; border-radius:50%; background-color:lightgray;">
                    </div>
                    <div class="text-nama mt-2" style="text-align: center;"><?php echo $user['name']; ?></div>
                    <div class="text-nama" style="text-align: center;"> Nasabah mulai <?php echo date('d F Y', $user['date_created']); ?></div>
                </div>
            </div>

            <div class="card card-style">
                <div class="content mt-0 mb-2">
                    <div class="list-group list-custom-large mb-4">
                        <a href="#">
                            <i class="fa font-14 fa-file bg-green1-dark rounded-sm"></i>
                            <span>Lihat schedule</span>
                            <strong>lihat schedule harian disini.</strong>
                            <i class="fa fa-angle-right mr-2"></i>
                        </a>
                        <a href="#">
                            <i class="fa font-14 fa-qrcode bg-green1-dark rounded-sm"></i>
                            <span>Buat Barcode</span>
                            <strong>buat barcode monitoring tanaman disini.</strong>
                            <i class="fa fa-angle-right mr-2"></i>
                        </a>

                        <a href="<?php echo base_url('petugas/editProfile'); ?>">
                            <i class="fa font-14 fa-user bg-green1-dark rounded-sm"></i>
                            <span>Edit Profile</span>
                            <strong>edit profile kamu disini.</strong>
                            <i class="fa fa-angle-right mr-2"></i>
                        </a>
                        <a href="<?php echo base_url('auth/logout'); ?>">
                            <i class="fa font-14 fa-right-from-bracket bg-green1-dark rounded-sm"></i>
                            <span>Logout</span>
                            <strong>jangan lupa kembali lagi, aku menunggumu.</strong>
                            <i class="fa fa-angle-right mr-2"></i>
                        </a>
                    </div>

                    <h5>Apakah Kamu Tahu??</h5>
                    <p>
                        Aplikasi Sistem Informasi Pertanian atau SiTani ini di desain dan rancang khusus sebagai aplikasi website yang support dengan tampilan mobile phone, serta dilengkapi juga dengan sistem PWA agar user bisa mendowloadnya di mobile. Untuk menggunkan PWA, bisa klik menu dibawah ini -> ...
                    </p>
                    <div class="divider mb-1"></div>
                    <div class="list-group list-custom-large">
                        <a href="#" data-menu="menu-tips-1" class="border-0">
                            <i class="fa font-14 fa-gift bg-green1-dark rounded-sm"></i>
                            <span>Mulai menggunkan PWA</span>
                            <strong>langkah-langkah unutk proses installasi</strong>
                            <i class="fa fa-angle-right mr-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card card-style preload-img" data-src="images/pictures/20.jpg">
                <div class="card-body text-center">
                    <h1 class="color-white pt-4">Feature Requests</h1>
                    <p class="color-white mt-n2 mb-3 pb-1">We're always listening to your feedback</p>
                    <p class="boxed-text-xl color-white opacity-80 pb-2">
                        Do you like Azures, but want a specific feature? Please send us Feedback and feature suggestions and we'll consider it for future updates!
                    </p>
                    <a href="#" class="btn btn-m rounded-sm btn-border btn-center-l border-white color-white font-900 text-uppercase mb-4">Request Feature</a>
                </div>
                <div class="card-overlay bg-highlight opacity-95"></div>
            </div>

            <!-- footer and footer card-->
            <div class="footer" data-menu-load="menu-footer.html"></div>
        </div>
        <!-- end of page content-->

        <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html" data-menu-height="420" data-menu-effect="menu-over">
        </div>

        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over">
        </div>

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-load="menu-main.html" data-menu-active="nav-settings" data-menu-effect="menu-over">
        </div>

    </div>
    <script type="text/javascript" src="<?php echo base_url('vendor/pengguna/assets/js/'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('vendor/pengguna/assets/js/'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('vendor/pengguna/assets/js/'); ?>custom.js"></script>
</body>

</html>