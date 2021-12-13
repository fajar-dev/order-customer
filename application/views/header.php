<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $title ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="<?php echo base_url() ?>assets/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/select2/css/select2.min.css">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url() ?>assets/images/logo.png" alt="">
                <img class="logo-compact" src="<?php echo base_url() ?>assets/images/logo-text.png" alt="">
                <img class="brand-title" src="<?php echo base_url() ?>assets/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo site_url('login/logout') ?>" class="dropdown-item">
                                        <i class="icon-logout"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li>
                        <a href="<?php echo site_url() ?>"><i class="icon icon-world-2"></i><span class="nav-text">DASHBOARD</span></a>
                    </li>
                    <li class="nav-label">Main Menu</li>
                    <li>
                        <a href="<?php echo site_url('page/pelanggan') ?>"><i class="icon icon-users-mm-2"></i><span class="nav-text">DATA PELANGGAN</span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('page/layanan') ?>"><i class="icon icon-app-store"></i><span class="nav-text">LAYANAN</span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('page/order') ?>"><i class="icon-bag"></i><span class="nav-text">ORDER</span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('page/cetak') ?>"><i class="icon-printer"></i><span class="nav-text">CETAK</span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('login/logout') ?>"><i class="icon-logout"></i><span class="nav-text">LOGOUT</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
