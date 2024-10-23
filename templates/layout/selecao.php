<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$description = 'Jims Recruiting';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $description ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-icons/bootstrap-icons.css') ?>
    <?= $this->Html->css('aos.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('glightbox.css') ?>
    <?= $this->Html->css('swiper-bundle.min.css') ?>

    <?= $this->Html->css(['main']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']); ?>" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Jims Recruiting</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']) ?>">Home</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']) ?>#about">About</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']) ?>#services">Services</a></li>
                <li class="dropdown"><a href="#navmenu"><span>Registration</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'organisation']) ?>">For Organisations</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'contractor']) ?>">For Contractors</a></li>
                    </ul>
                </li>
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'contact']) ?>">Contact Us</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>

<main class="main" style="padding-top: 60px;">
    <?= $this->fetch('content') ?>
</main>

<footer id="footer" class="footer dark-background">
    <div class="container">
        <h3 class="sitename">Jims Recruiting</h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
        <div class="social-links d-flex justify-content-center">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-skype"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
        <div class="container">
            <div class="copyright">
                <span>Copyright</span> <strong class="px-1 sitename">Selecao</strong> <span>All Rights Reserved</span>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<?= $this->Html->script('bootstrap.bundle.js'); ?>
<?= $this->Html->script('validate.js'); ?>
<?= $this->Html->script('aos.js'); ?>
<?= $this->Html->script('glightbox.js'); ?>
<?= $this->Html->script('imagesloaded.pkgd.min.js'); ?>
<?= $this->Html->script('isotope.pkgd.js'); ?>
<?= $this->Html->script('swiper-bundle.min.js'); ?>


<!-- Main JS File -->
<?= $this->Html->script('main.js'); ?>

</body>
</html>
