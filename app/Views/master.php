<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:56:45 GMT -->

<head>
    <meta charset="utf-8">
    <title><?= $title; ?> - Deyan Ardi Portfolio </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url(); ?>/debly.ico" type="image/x-icon">
    <?= $this->include('header'); ?>
</head>

<?php if ($id == 1) : ?>

<body class="home">
    <?php elseif ($id == 2) : ?>

    <body class="about">
        <?php elseif ($id == 3) : ?>

        <body class="portfolio">
            <?php elseif ($id == 4) : ?>

            <body class="contact">
                <?php endif; ?>
                <!-- Live Style Switcher Ends - demo only -->
                <!-- Header Starts -->
                <header class="header" id="navbar-collapse-toggle">
                    <!-- Fixed Navigation Starts -->
                    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
                        <?php if ($id == 1) : ?>
                        <li class="icon-box active">
                            <?php else : ?>
                        <li class="icon-box">
                            <?php endif; ?>
                            <i class="fa fa-home"></i>
                            <a href="<?= base_url(); ?>">
                                <h2>Home</h2>
                            </a>
                        </li>
                        <?php if ($id == 2) : ?>
                        <li class="icon-box active">
                            <?php else : ?>
                        <li class="icon-box">
                            <?php endif; ?>
                            <i class="fa fa-user"></i>
                            <a href="<?= base_url(); ?>/about">
                                <h2>About</h2>
                            </a>
                        </li>
                        <?php if ($id == 3) : ?>
                        <li class="icon-box active">
                            <?php else : ?>
                        <li class="icon-box">
                            <?php endif; ?>
                            <i class="fa fa-briefcase"></i>
                            <a href="<?= base_url(); ?>/portfolio">
                                <h2>Portfolio</h2>
                            </a>
                        </li>
                        <?php if ($id == 4) : ?>
                        <li class="icon-box active">
                            <?php else : ?>
                        <li class="icon-box">
                            <?php endif; ?>
                            <i class="fa fa-envelope-open"></i>
                            <a href="<?= base_url(); ?>/contact">
                                <h2>Contact</h2>
                            </a>
                        </li>
                    </ul>
                    <!-- Fixed Navigation Ends -->
                    <!-- Mobile Menu Starts -->
                    <nav role="navigation" class="d-block d-lg-none">
                        <div id="menuToggle">
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span></span>
                            <ul class="list-unstyled" id="menu">

                                <?php if ($id == 1) : ?>
                                <li class="active">
                                    <?php else : ?>
                                <li>
                                    <?php endif; ?>
                                    <a href="<?= base_url(); ?>"><i class="fa fa-home"></i><span>Home</span></a>
                                </li>
                                <?php if ($id == 2) : ?>
                                <li class="active">
                                    <?php else : ?>
                                <li>
                                    <?php endif; ?>
                                    <a href="<?= base_url(); ?>/about"><i class="fa fa-user"></i><span>About</span></a>
                                </li>
                                <?php if ($id == 3) : ?>
                                <li class="active">
                                    <?php else : ?>
                                <li>
                                    <?php endif; ?>
                                    <a href="<?= base_url(); ?>/portfolio"><i
                                            class="fa fa-folder-open"></i><span>Portfolio</span></a>
                                </li>
                                <?php if ($id == 4) : ?>
                                <li class="active">
                                    <?php else : ?>
                                <li>
                                    <?php endif; ?>
                                    <a href="<?= base_url(); ?>/contact"><i
                                            class="fa fa-envelope-open"></i><span>Contact</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Mobile Menu Ends -->
                </header>
                <!-- Header Ends -->
                <!-- Main Content Starts -->
                <?= $this->renderSection('main'); ?>
                <!-- Main Content Ends -->

                <!-- Template JS Files -->
                <?= $this->include('footer'); ?>

            </body>


            <!-- Mirrored from slimhamdi.net/tunis/dark by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:57:16 GMT -->

</html>