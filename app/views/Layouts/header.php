<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilham Romadhani</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('/public/img/svg/logo.svg'); ?>" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url('/public/css/style.min.css'); ?>">
    <!-- Tambahkan di header.php atau di bagian <head> -->
    <script src="<?= base_url('/public/sweetalert.js'); ?>"></script>

</head>

<body>
    <div class="layer"></div>
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <?php
        require_once 'app/views/Layouts/sidebar.php';

        ?>
      
        <div class="main-wrapper">

            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">
                        <i class="main-title">Selamat Datang di Halaman Admin</i>
                    </div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>
                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="<?= base_url('/public/img/avatar/avatar-illustrated-02.webp'); ?>" type="image/webp"><img src="<?= base_url('/public/img/avatar/avatar-illustrated-02.png'); ?>" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li><a href="##">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span>Profile</span>
                                    </a></li>
                                <li><a href="##">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>Account settings</span>
                                    </a></li>
                                <li><a class="danger" href="##">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span>Log out</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>