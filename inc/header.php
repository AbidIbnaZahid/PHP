<?php
include "db.php";
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Richard. - Easy Onepage Personal Template">
    <meta name="author" content="Paul">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Richard. - Easy Onepage Personal Template</title>
</head>

<body>

    <!-- Loader -->
    <!-- <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- Click capture -->
    <div class="click-capture d-lg-none"></div>

    <!-- Navbar -->
    <nav id="scrollspy" class="navbar navbar-desctop">

        <div class="d-flex position-relative w-100">

            <!-- Brand-->
            <a class="navbar-brand" href="index.php"><?= settings('settings', 'author_name') ?>.</a>
            <ul class="navbar-nav-desctop mr-auto d-none d-lg-block">
                <li><a class="menu-active nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#experience">Experience</a></li>
                <li><a class="nav-link" href="#projects">Projects</a></li>
                <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <!-- <li><a class="nav-link" href="contact.php">Contact us</a></li> -->
            </ul>

            <!-- Social -->

            <ul class="social mr-auto mr-lg-0 d-none d-sm-block">
                <?php
                foreach (read_all_query('icons', 4) as $result) : ?>
                    <li><a href="<?= $result['link'] ?>">
                            <i class="text-black <?= $result['icon'] ?> fa-2x"></i>
                        </a></li>
                <?php endforeach; ?>
            </ul>

            <!-- Toggler -->
            <button class="toggler d-lg-none ml-auto">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>
        </div>
    </nav>


    <!-- Navbar Mobile -->
    <nav id="navbar-mobile" class="navbar navbar-mobile d-lg-none">
        <ion-icon class="close" name="close-outline"></ion-icon>

        <!-- Social -->
        <ul class="social-icons mr-auto mr-lg-0">
            <li><a href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>

        <ul class="navbar-nav navbar-nav-mobile">
            <li><a class="nav-link" href="#home">Home</a></li>
            <li><a class="nav-link" href="#about">About</a></li>
            <li><a class="nav-link" href="#experience">Experience</a></li>
            <li><a class="nav-link" href="#projects">Projects</a></li>
            <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
        </ul>
        <div class="navbar-mobile-footer">
            <p>© 2020 Richard. All Rights Reserved.</p>
        </div>
    </nav>