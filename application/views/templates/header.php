<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title><?= $title?> - Sistem Informasi PUSJAK LLATP</title>

    <!-- Favicons-->
    <link rel="icon" href="<?= base_url('assets/images/logo_pusjak.png')?>" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/images/favicon/apple-touch-icon-152x152.png')?>">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="<?= base_url('assets/css/materialize.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?= base_url('assets/css/style.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?= base_url('assets/css/plugins/animate.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?= base_url('assets/js/plugins/easy-autocomplete/easy-autocomplete.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?= base_url('assets/js/plugins/easy-autocomplete/easy-autocomplete.themes.css')?>" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- Custome CSS-->
    <link href="<?= base_url('assets/css/custom/custom-style.css')?>" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?= base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?= base_url('assets/js/plugins/jvectormap/jquery-jvectormap.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?= base_url('assets/js/plugins/chartist-js/chartist.min.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- dataTables css plugins-->
    <link rel="stylesheet" href="<?=base_url('assets/css/plugins/material.min.css')?>" type="text/css" media="screen,projection">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/dataTables.material.min.css')?>" type="text/css" media="screen,projection">

    <style>
        label{
            color: #030303 !important;
        }
    </style>

</head>

<body>

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color" style="background-color:#3D176D;">
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="<?= base_url()?>" class="brand-logo darken-1">
                                <img style="width: 50px !important; height: 50px;" src="<?= base_url('assets/images/logo_pusjak.png')?>" alt="pusjak logo">
                                PUSJAK LLATP
                            </a>
                        </h1>
                    </li>
                </ul>
                <!-- <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Cari di Aplikasi"/>
                </div> -->
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <!--user profile -->
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="<?= base_url('assets/images/admin.png')?>" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <a class="btn-flat  waves-effect waves-light white-text profile-btn" href="#" >
                                <?= $this->session->userdata('name')?>
                            </a>
                            <p class="user-roal"><?= $this->session->userdata('level');?></p>
                        </div>
                    </div>
                </li>
                <!-- end user profile -->

                <!-- main menu -->
                <li class="li-hover"><p class="ultra-small margin more-text">Menu Utama</p></li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="mdi-action-dashboard"></i> Lihat Dashboard
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?= base_url('dashboard')?>" class="waves-effect waves-cyan"> Dashboard TU</a>
                                    </li>
                                    <li><a href="<?= base_url('dashboard-ptpp')?>" class="waves-effect waves-cyan"> Dashboard KTP</a>
                                    </li>
                                    <li><a href="<?= base_url('dashboard-pe')?>" class="waves-effect waves-cyan"> Dashboard LLA</a>
                                    </li>
                                    <li><a href="<?= base_url('dashboard-agenda')?>" class="waves-effect waves-cyan"> Dashboard Agenda</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="mdi-action-account-balance-wallet"></i> Edit Dashboard
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?= base_url('kehadiran')?>">Kehadiran</a>
                                    </li>
                                    <li><a href="<?= base_url('anggaran')?>">Anggaran</a>
                                    </li>
                                    <li><a href="<?= base_url('berkas')?>">Berkas</a>
                                    </li>
                                    <li><a href="<?= base_url('persuratan')?>">Persuratan</a>
                                    </li>
                                    <li><a href="<?= base_url('kegiatan-tu')?>">Kegiatan TU</a>
                                    </li>
                                    <li><a href="<?= base_url('kegiatan-ptpp')?>">Kegiatan KTP</a>
                                    </li>
                                    <li><a href="<?= base_url('kegiatan-pe')?>">Kegiatan LLA</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- <li class="bold">
                    <a href="<?= base_url('anggota')?>" class="waves-effect waves-cyan">
                        <i class="mdi-social-people"></i> Anggota
                    </a>
                </li> -->

                <li class="bold">
                    <a href="<?= base_url('agenda')?>" class="waves-effect waves-cyan">
                        <i class="mdi-social-people"></i> Agenda
                    </a>
                </li>

                <!-- <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="mdi-action-account-balance-wallet"></i> Edit Dashboard
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?= base_url('simpanan-amanah')?>">Amanah</a>
                                    </li>
                                    <li><a href="<?= base_url('simpanan-qurban-aqikah')?>">Qurban/Aqikah</a>
                                    </li>
                                    <li><a href="<?= base_url('simpanan-umrah')?>">Umrah</a>
                                    </li>
                                    <li><a href="<?= base_url('simpanan-idul-fitri')?>">Idul Fitri</a>
                                    </li>
                                    <li><a href="<?= base_url('simpanan-wadiah')?>">Wadi'ah</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="mdi-action-credit-card"></i> Pinjaman
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?= base_url('pinjaman-mudharabah')?>">Mudharabah</a>
                                    </li>
                                    <li><a href="<?= base_url('pinjaman-murabahah')?>">Murabhahah</a>
                                    </li>
                                    <li><a href="<?= base_url('pinjaman-musyarakah')?>">Musyarakah</a>
                                    </li>
                                    <li><a href="<?= base_url('pinjaman-ijarah')?>">Ijarah</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="mdi-editor-border-color"></i> Angsuran
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?= base_url('angsuran-mudharabah')?>">Mudharabah</a>
                                    </li>
                                    <li><a href="<?= base_url('angsuran-murabahah')?>">Murabhahah</a>
                                    </li>
                                    <li><a href="<?= base_url('angsuran-musyarakah')?>">Musyarakah</a>
                                    </li>
                                    <li><a href="<?= base_url('angsuran-ijarah')?>">Ijarah</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="mdi-action-book"></i> Laporan
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?= base_url('laporan-anggota')?>">Buku Anggota</a>
                                    </li>
                                    <li><a href="<?= base_url('laporan-simpanan')?>">Daftar Simpanan</a>
                                    </li>
                                    <li><a href="<?= base_url('laporan-pinjaman')?>">Daftar Pinjaman</a>
                                    </li>
                                    <li><a href="<?= base_url('laporan-tagihan-koperasi')?>">Daftar Tagihan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li> -->

                <li class="li-hover"><div class="divider"></div></li>

                <li class="li-hover"><p class="ultra-small margin more-text">Akun</p></li>
                <!-- <li>
                    <a href="<?= base_url('profil')?>"><i class="mdi-action-account-circle"></i> Profil</a>
                </li>
                <li>
                    <a href="<?= base_url('bantuan')?>"><i class="mdi-action-help"></i> Bantuan</a>
                </li>
                <li>
                    <a href="<?= base_url('pengaturan')?>"><i class="mdi-action-settings"></i> Pengaturan</a>
                </li> -->
                <li>
                    <a href="#logoutModal" class="modal-trigger"><i class="mdi-action-exit-to-app "></i> Keluar</a>
                </li>
                <!-- end main menu -->
            </ul>
            <a href="#" data-activates="slide-out"
               class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only teal"
               style="box-shadow: 0px 0px 0px transparent !important;">
                <i class="mdi-navigation-menu"></i>
            </a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- logout modal -->
        <div id="logoutModal" class="modal">
            <div class="modal-content">
                <h5 class="light">Keluar dari aplikasi ?</h5>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url('logout')?>" class="modal-close waves-effect waves-green btn-flat">Lanjutkan</a>
                <a href="#!" class="modal-close waves-effect waves-red btn-flat ">Batalkan</a>
            </div>
        </div>
        <!-- end logout modal -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">
                <!-- //////////////////////////////////////////////////////////////////////////// -->

            <?php
                switch ($this->session->flashdata('alert')){
                    case 'success-insert': ?>
                        <div id="card-alert" class="card green lighten-5 animated slideInDown">
                            <div class="card-content green-text">
                                <p>BERHASIL : Data telah ditambahkan.</p>
                            </div>
                        </div>
                    <?php
                        break;
                    case 'error-insert': ?>
                        <div id="card-alert" class="card red lighten-5 animated slideInDown">
                            <div class="card-content red-text">
                                <p>GAGAL : Kesalahan saat menambahkan data</p>
                            </div>
                        </div>
                    <?php
                        break;
                    case 'success-delete': ?>
                        <div id="card-alert" class="card green lighten-5 animated slideInDown">
                            <div class="card-content green-text">
                                <p>BERHASIL : Data telah dihapus.</p>
                            </div>
                        </div>
                    <?php
                        break;
                    case 'error-delete': ?>
                        <div id="card-alert" class="card red lighten-5 animated slideInDown">
                            <div class="card-content red-text">
                                <p>GAGAL : Kesalahan saat menghapus data</p>
                            </div>
                        </div>
                    <?php
                        break;
                    case 'success-update':?>
                        <div id="card-alert" class="card green lighten-5 animated slideInDown">
                            <div class="card-content green-text">
                                <p>BERHASIL : Data telah diubah.</p>
                            </div>
                        </div>
                    <?php
                        break;
                    case 'error-update':?>
                        <div id="card-alert" class="card red lighten-5 animated slideInDown">
                            <div class="card-content red-text">
                                <p>GAGAL : Kesalahan saat mengubah data</p>
                            </div>
                        </div>
                    <?php
                        break;
                }
            ?>
