<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/jquery.dataTables.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/css/adminlte.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/skins/_all-skins.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datepicker/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
        <!-- CSS kustom untuk navigasi biru-kuning -->
        <style>
                :root {
                        --primary-blue: #1565C0;
                        --secondary-blue: #1976D2;
                        --primary-yellow: #FFC107;
                        --secondary-yellow: #FFD54F;
                        --text-color-dark: #212121;
                        --text-color-light: #FFFFFF;
                }

                .skin-blue .main-header .navbar,
                .skin-blue .main-header .logo {
                        background-color: var(--primary-blue) !important;
                        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                }

                .skin-blue .main-header .navbar .nav > li > a,
                .skin-blue .main-header .logo {
                        color: var(--text-color-light) !important;
                        font-weight: 500;
                }

                .skin-blue .main-sidebar {
                        background-color: var(--secondary-blue) !important;
                        box-shadow: 2px 0 4px rgba(0,0,0,0.1);
                }

                .skin-blue .sidebar-menu > li > a {
                        color: var(--text-color-light) !important;
                        border-left: 3px solid transparent;
                        transition: all 0.3s ease;
                }

                .skin-blue .sidebar-menu > li:hover > a,
                .skin-blue .sidebar-menu > li.active > a {
                        background-color: var(--primary-yellow) !important;
                        color: var(--text-color-dark) !important;
                        border-left-color: var(--secondary-yellow);
                }

                .skin-blue .main-header .navbar .sidebar-toggle:hover {
                        background-color: var(--secondary-yellow) !important;
                        color: var(--text-color-dark) !important;
                }

                .skin-blue .sidebar-menu > li > a > i {
                        margin-right: 10px;
                        color: var(--primary-yellow);
                }

                .skin-blue .sidebar-menu > li > a {
                        padding: 12px 15px;
                }

                .skin-blue .main-header .logo:hover {
                        background-color: var(--secondary-blue) !important;
                }
        </style>
        <!-- JavaScript -->
        <script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/adminlte/js/adminlte.js"></script>
        <script src="<?php echo base_url(); ?>assets/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/datepicker/js/bootstrap-datepicker.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
                <header class="main-header">
                        <a href="<?php echo base_url('beranda'); ?>" class="logo">
                                <span class="logo-mini"><b>S</b></span>
                                <span class="logo-lg"><img src="<?php echo base_url('assets/images/logopmii.png'); ?>" width="25"
                                                alt="SIMPENDUK"><b> PMII JAMBI</b></span>
                        </a>
                        <nav class="navbar navbar-static-top">
                                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                                        <span class="sr-only">Toggle navigation</span>

                                </a>


                                <div class="navbar-custom-menu">
                                        <ul class="nav navbar-nav">
                                                <li>
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                Selamat Datang <?php echo $this->session->userdata('nama_petugas'); ?>
                                                        </a>

                                                </li>
                                        </ul>
                                </div>
                        </nav>
                </header>



                <aside class="main-sidebar">
                        <section class="sidebar">
                                <ul class="sidebar-menu" data-widget="tree">
                                        <?php
                                        //jika admin
                                        if ($this->session->userdata('level') == 'admin') {
                                        ?>
                                                <li><a href="<?php echo base_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i>
                                                                <span>Dashboard</span></a>
                                                <?php
                                        }
                                                ?>

                                                <li><a href="<?php echo base_url('beranda'); ?>"><i class="fa fa-home"></i> <span>Beranda</span></a>
                                                </li>

                                                <?php

                                                //jika admin
                                                if ($this->session->userdata('level') == 'admin') {
                                                ?>
                                                        <li><a href="<?php echo base_url('penduduk/tampil'); ?>"><i class="fa fa-address-card-o"></i>
                                                                        <span>Data Mapaba</span></a></li>
                                                <?php
                                                }

                                                //jika kepala desa atau sekertaris
                                                if ($this->session->userdata('level') == 'kepaladesa' || $this->session->userdata('level') == 'sekertaris') {
                                                ?>
                                                        <li><a href="<?php echo base_url('penduduk/tampil_penduduk'); ?>"><i
                                                                                class="fa fa-address-card-o"></i> <span>Data Mapaba</span></a></li>
                                                <?php
                                                }

                                                //jika admin
                                                if ($this->session->userdata('level') == 'admin') {
                                                ?>

                                                        <li><a href="<?php echo base_url('kelahiran/tampil'); ?>"><i class="fa fa-book"
                                                                                aria-hidden="true"></i> <span>Data PKD</span></a></li>
                                                        <li><a href="<?php echo base_url('Kematian/tampil'); ?>"><i class="fa fa-history"
                                                                                aria-hidden="true"></i> <span>Data PKL</span></a></li>
                                                        <li><a href="<?php echo base_url('pindah/tampil'); ?>"><i class="fa fa-exchange"
                                                                                aria-hidden="true"></i> <span>Data PKN</span></a>
                                                        </li>



                                                <?php
                                                }

                                                //jika kepala desa atau sekertaris
                                                if ($this->session->userdata('level') == 'sekertaris') {
                                                ?>
                                                        <li><a href="<?php echo base_url('kelahiran/tampil_kelahiran'); ?>"><i class="fa fa-book"
                                                                                aria-hidden="true"></i> <span>Data Kelahiran</span></a></li>
                                                        <li><a href="<?php echo base_url('Kematian/tampil_kematian'); ?>"><i class="fa fa-history"
                                                                                aria-hidden="true"></i> <span>Data Kematian</span></a></li>
                                                        <li><a href="<?php echo base_url('pindah/tampil_pindah2'); ?>"><i class="fa fa-exchange"
                                                                                aria-hidden="true"></i> <span>Data Pindah</span></a>
                                                        </li>



                                                <?php
                                                }
                                                //jika admin
                                                if ($this->session->userdata('level') == 'admin') {
                                                ?>
                                                        <li><a href="<?php echo base_url('pengaturan/'); ?>"><i class="fa fa-gear"></i>
                                                                <span>Pengaturan</span></a></li>
                                                <?php
                                                }
                                                ?>
                                                <li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-power-off"></i> <span>Logout</span></a>
                                                </li>
                        </ul>
                        </section>
                </aside>
