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
            <div class="text-nama" style="text-align: center;"><?php echo $user['email']; ?></div>
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

                <a href="<?php echo base_url('nasabah/editprofile'); ?>">
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