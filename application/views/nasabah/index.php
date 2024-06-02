<div class="page-content">

    <div class="page-title page-title-large">
        <h2 data-username="<?php echo $user['name']; ?>" class="greeting-text"></h2>
        <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="<?php echo base_url('assets/img/profile/') . $user['image']; ?>"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="210">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="<?php echo base_url('vendor/pengguna/assets/'); ?>images/pictures/20s.jpg"></div>
    </div>


    <!-- Homepage Slider-->
    <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
        <div class="card rounded-l shadow-l" data-card-height="320">
            <div class="card-bottom">
                <h1 class="font-24 font-700">Meet Azures</h1>
                <p class="boxed-text-xl">
                    Azures brings beauty and colors to your Mobile device with a stunning user interface to match.
                </p>
            </div>
            <div class="card-overlay bg-gradient-fade"></div>
            <div class="card-bg owl-lazy" data-src="<?php echo base_url('vendor/pengguna/assets/'); ?>images/pictures/17m.jpg"></div>
        </div>
        <div class="card rounded-l shadow-l" data-card-height="320">
            <div class="card-bottom">
                <h1 class="font-24 font-700">Beyond Powerful</h1>
                <p class="boxed-text-xl">
                    Azures is a Mobile Web App Kit, fully featured, supporting PWA and Native Dark Mode!
                </p>
            </div>
            <div class="card-overlay bg-gradient-fade"></div>
            <div class="card-bg owl-lazy" data-src="<?php echo base_url('vendor/pengguna/assets/'); ?>images/pictures/8m.jpg"></div>
        </div>
        <div class="card rounded-l shadow-l" data-card-height="320">
            <div class="card-bottom">
                <h1 class="font-24 font-700">A-Level Quality</h1>
                <p class="boxed-text-xl">
                    We build custom, premium products, that are easy to use and provide all features for you!
                </p>
            </div>
            <div class="card-overlay bg-gradient-fade"></div>
            <div class="card-bg owl-lazy" data-src="<?php echo base_url('vendor/pengguna/assets/'); ?>images/pictures/14m.jpg"></div>
        </div>
    </div>

    <div class="card mt-4 preload-img" data-src="<?php echo base_url('vendor/pengguna/assets/'); ?>images/pictures/20s.jpg">
        <div class="card-body">
            <div class="card card-style ml-0 mr-0 bg-white my-auto">
                <div class="row mt-3 pt-1 mb-3">
                    <div class="col-6">
                        <i class="float-left ml-3 mr-3" data-feather="globe" data-feather-line="1" data-feather-size="35" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light">
                        </i>
                        <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Mobile<br>Website</h5>
                    </div>
                    <div class="col-6">
                        <i class="float-left ml-3 mr-3" data-feather="smartphone" data-feather-line="1" data-feather-size="35" data-feather-color="dark2-dark" data-feather-bg="dark2-fade-light">
                        </i>
                        <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Mobile<br>PWA</h5>
                    </div>
                    <div class="col-6">
                        <i class="float-left ml-3 mr-3" data-feather="user" data-feather-line="1" data-feather-size="35" data-feather-color="brown2-dark" data-feather-bg="brown2-fade-light">
                        </i>
                        <h5 class="color-black float-left font-13 font-500 line-height-s">Mobile<br>Website</h5>
                    </div>
                    <div class="col-6">
                        <i class="float-left ml-3 mr-3" data-feather="box" data-feather-line="1" data-feather-size="35" data-feather-color="green1-dark" data-feather-bg="green1-fade-light">
                        </i>
                        <h5 class="color-black float-left font-13 font-500 line-height-s">Mobile<br>PWA</h5>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
    </div>

    <div class="card card-style mt-4 shadow-l" data-card-height="150">
        <div class="card-center pl-3 pr-3">
            <h4 class="color-white">Laporan Sampah</h4>
            <p class="color-white mb-0 opacity-60">
                We're the top selling Mobile Author on Envato. We value the quality of products and efficiency of our support!
            </p>
        </div>
        <div class="card-overlay bg-highlight opacity-90"></div>
    </div>

    <div class="card card-style mt-4 shadow-l" data-card-height="150">
        <div class="card-center pl-3 pr-3">
            <h4 class="color-white">Pringkat Keaktifan Nasabah</h4>
            <p class="color-white mb-0 opacity-60">
                We're the top selling Mobile Author on Envato. We value the quality of products and efficiency of our support!
            </p>
        </div>
        <div class="card-overlay bg-highlight opacity-90"></div>
    </div>

    <!-- footer and footer card-->
    <div class="footer" data-menu-load="menu-footer.html"></div>
</div>
<!-- end of page content-->


<div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html" data-menu-height="420" data-menu-effect="menu-over">
</div>

<div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over">
</div>

<div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-load="menu-main.html" data-menu-active="nav-welcome" data-menu-effect="menu-over">
</div>

<!-- Be sure this is on your main visiting page, for example, the index.html page-->
<!-- Install Prompt for Android -->
<div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="350" data-menu-effect="menu-parallax">
    <div class="boxed-text-l mt-4">
        <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
        <h4 class="mt-3">Azures on your Home Screen</h4>
        <p>
            Install Azures on your home screen, and access it just like a regular app. It really is that simple!
        </p>
        <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to Home Screen</a><br>
        <a href="#" class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Maybe later</a>
        <div class="clear"></div>
    </div>
</div>

<!-- Install instructions for iOS -->
<div id="menu-install-pwa-ios" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="320" data-menu-effect="menu-parallax">
    <div class="boxed-text-xl mt-4">
        <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
        <h4 class="mt-3">Azures on your Home Screen</h4>
        <p class="mb-0 pb-3">
            Install Azures on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
        </p>
        <div class="clear"></div>
        <a href="#" class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Maybe later</a><br>
        <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
    </div>
</div>


</div>