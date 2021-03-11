<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/public/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>/public/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>UPK Pembayaran SPP</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url() ?>/public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url() ?>/public/assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url() ?>/public/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="<?php echo base_url() ?>/public/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/public/assets/css/google-roboto-300-700.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="purple" data-background-color="white" data-image="<?php echo base_url() ?>/public/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="<?php echo site_url() ?>" class="simple-text">
                    Pembayaran SPP
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="<?php echo site_url() ?>" class="simple-text">
                    SPP
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?php echo base_url() ?>/public/assets/img/faces/avatar.jpg" />
                    </div>
                    <div class="info">
                        <a> <?php echo $author; ?> </a>
                        <a><?php echo $nama; ?></a>
                    </div>
                </div>
                <ul class="nav">
                    <li>
                        <a href="<?php echo site_url() ?>Pembayaran">
                            <i class="material-icons">add</i>
                            <p>Entry Pembayaran  (ADMIN)</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo site_url() ?>Dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>Pembayaran">
                            <i class="material-icons">content_paste</i>
                            <p>Pembayaran</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">person</i>
                            <p>Data
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="<?php echo site_url() ?>admin/Data_siswa">Data Siswa</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url() ?>admin/Data_petugas">Data Petugas</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url() ?>admin/Data_kelas">Data Kelas</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url() ?>admin/Data_spp">Data SPP</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form" action="<?php echo base_url(); ?>/logout" method="post">
                        <div class="input-group no-border">
                            <button type="submit" name="logout" value="ok" class="btn btn-danger btn-round">
                                <i class="material-icons">power_settings_new</i> Logout
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </nav>