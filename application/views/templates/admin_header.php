<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title> | Bank Sampah Berkah Limbah Sari</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Berry is made using Bootstrap 5 design framework. Download the free admin template & use it for your project." />
    <meta name="keywords" content="Berry, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template" />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="<?php echo base_url('assets/') ?>img/logo/logo2.png" type="image/x-icon">
    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="<?php echo base_url('vendor/admindashboard/') ?>assets/fonts/tabler-icons.min.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="<?php echo base_url('vendor/admindashboard/') ?>assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?php echo base_url('vendor/admindashboard/') ?>assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="<?php echo base_url('vendor/admindashboard/') ?>assets/css/style-preset.css" id="preset-style-link" />

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="<?php echo base_url('assets/') ?>img/logo/logo1.png" alt="" class="logo logo-lg" style="width: 200px; margin-left: -30px;">
            </a>
            <!-- ======= Menu collapse Icon ===== -->
            <div class="pc-h-item">
                <a href="#" class="pc-head-link head-link-secondary m-0" id="sidebar-hide">
                    <i class="ti ti-menu-2"></i>
                </a>
            </div>
        </div>
        <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <li class="pc-h-item header-mobile-collapse">
                        <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="dropdown pc-h-item d-inline-flex d-md-none">
                        <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-search"></i>
                        </a>
                        <div class="dropdown-menu pc-h-dropdown drp-search">
                            <form class="px-3">
                                <div class="form-group mb-0 d-flex align-items-center">
                                    <i class="ti ti-search"></i>
                                    <input type="search" class="form-control border-0 shadow-none" placeholder="Search here..." />
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="pc-h-item d-none d-md-inline-flex">
                        <form class="header-search">
                            <i class="ti ti-search icon-search"></i>
                            <input type="search" class="form-control" placeholder="Search here..." />
                            <button class="btn btn-light-secondary btn-search"><i class="ti ti-adjustments-horizontal"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header">
                                <a href="#!" class="link-primary float-end text-decoration-underline">Mark as all read</a>
                                <h5>All Notification <span class="badge bg-warning rounded-pill ms-1">01</span></h5>
                            </div>
                            <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                                <div class="list-group list-group-flush w-100">
                                    <div class="list-group-item">
                                        <select class="form-select">
                                            <option value="all">All Notification</option>
                                            <option value="new">New</option>
                                            <option value="unread">Unread</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url('vendor/admindashboard/') ?>assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">2 min ago</span>
                                                <h5>John Doe</h5>
                                                <p class="text-body fs-6">It is a long established fact that a reader will be distracted </p>
                                                <div class="badge rounded-pill bg-light-danger">Unread</div>
                                                <div class="badge rounded-pill bg-light-warning">New</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="user-avtar bg-light-success"><i class="ti ti-building-store"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">3 min ago</span>
                                                <h5>Store Verification Done</h5>
                                                <p class="text-body fs-6">We have successfully received your request.</p>
                                                <div class="badge rounded-pill bg-light-danger">Unread</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="user-avtar bg-light-primary"><i class="ti ti-mailbox"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">5 min ago</span>
                                                <h5>Check Your Mail.</h5>
                                                <p class="text-body fs-6">All done! Now check your inbox as you're in for a sweet treat! </p>
                                                <button class="btn btn-sm btn-primary">Mail <i class="ti ti-brand-telegram"></i></button>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url('vendor/admindashboard/') ?>assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar" />
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">8 min ago</span>
                                                <h5>John Doe</h5>
                                                <p class="text-body fs-6">Uploaded two file on &nbsp;<strong>21 Jan 2020</strong></p>
                                                <div class="notification-file d-flex p-3 bg-light-secondary rounded">
                                                    <i class="ti ti-arrow-bar-to-down"></i>
                                                    <h5 class="m-0">demo.jpg</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url('vendor/admindashboard/') ?>assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar" />
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">10 min ago</span>
                                                <h5>Joseph William</h5>
                                                <p class="text-body fs-6">It is a long established fact that a reader will be distracted </p>
                                                <div class="badge rounded-pill bg-light-success">Confirmation of Account</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="text-center py-2">
                                <a href="#!" class="link-primary">Mark as all read</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url('assets/img/profile/') . $user['image']; ?>" alt="user-image" class="user-avtar" />
                            <span>
                                <i class="ti ti-settings"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header">
                                <h4>Selamat Datang, <span class="small text-muted"><?php echo $user['name']; ?></span></h4>
                                <p class="text-muted">Administrator</p>
                                <hr />
                                <a href="<?php echo base_url('admin/editProfile'); ?>" class="dropdown-item">
                                    <i class="ti ti-settings"></i>
                                    <span>Account</span>
                                </a>
                                <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item">
                                    <i class="ti ti-logout"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
            </div>
            </li>
            </ul>
        </div>
        </div>
    </header>
    <!-- [ Header ] end -->