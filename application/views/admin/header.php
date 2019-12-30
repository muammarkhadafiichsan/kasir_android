<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nine Coffee</title>
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url() . "assets/images/logo_bundar.png"; ?>" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets0/'); ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets0/'); ?>vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets0/'); ?>vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets0/'); ?>/css/style.css">
    <!-- End layout styles -->

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex align-items-center">
                <a class="navbar-brand " href="index.html">

                </a>

            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
                <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Nine Coffee Roastery</h5>
                <ul class="navbar-nav navbar-nav-right ml-auto">
                    <?php if ($this->session->userdata('username')) { ?>
                        <li>
                            <div>Selamat Datang <?= $this->session->userdata('username')
                                                    ?> </div>
                        </li>
                        <li class="ml-2"><?php echo anchor('auth/logout', 'logout') ?></li>
                    <?php } else { ?>
                        <li><?php echo anchor('auth/login', 'Login') ?></li>

                    <?php } ?>



                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>