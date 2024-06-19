<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   Change your logo from here   ============ -->
                <img src="<?php echo base_url('assets/') ?>img/logo/logo1.png" alt="" class="logo logo-lg" style="width: 200px; margin-left: -30px;">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Dashboard</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item">
                    <a href="<?php echo base_url('vendor/admindashboard/') ?>dashboard/index.html" class="pc-link"><span class="pc-micon"><i class="ti ti-dashboard"></i></span><span class="pc-mtext">Dashboard</span></a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Data User</label>
                    <i class="ti ti-news"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-user"></i></span><span class="pc-mtext">User</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" target="_blank" href="#">Administrator</a></li>
                        <li class="pc-item"><a class="pc-link" target="_blank" href="#">Petugas</a></li>
                        <li class="pc-item"><a class="pc-link" target="_blank" href="#">Nasabah</a></li>
                    </ul>
                </li>

                <li class="pc-item pc-caption">
                    <label>Data Sampah</label>
                    <i class="ti ti-news"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-trash"></i></span><span class="pc-mtext">Sampah</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" target="_blank" href="#">Detail Sampah</a></li>
                        <li class="pc-item"><a class="pc-link" target="_blank" href="#">Laporan Sampah</a></li>
                    </ul>
                </li>

                <li class="pc-item pc-caption">
                    <label>Other</label>
                    <i class="ti ti-brand-chrome"></i>
                </li>
                <li class="pc-item"><a href="#" class="pc-link"><span class="pc-micon"><i class="ti ti-credit-card"></i></span><span class="pc-mtext">Buku Tabungan</span></a></li>
                <li class="pc-item"><a href="#" class="pc-link"><span class="pc-micon"><i class="ti ti-map-pins"></i></span><span class="pc-mtext">Penjemputan Sampah</span></a></li>
                <li class="pc-item"><a href="#" class="pc-link"><span class="pc-micon"><i class="ti ti-book"></i></span><span class="pc-mtext">Pendaftaran Nasabah</span></a></li>
                <li class="pc-item"><a href="<?php echo base_url('admin/editProfile'); ?>" class="pc-link"><span class="pc-micon"><i class="ti ti-settings"></i></span><span class="pc-mtext">Pengaturan</span></a></li>
            </ul>
            <div class="pc-navbar-card bg-primary rounded">
                <a href="<?php echo base_url('auth/logout'); ?>" target="_blank" class="btn btn-light text-primary" style="width: 100%;">LogOut</a>
            </div>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->