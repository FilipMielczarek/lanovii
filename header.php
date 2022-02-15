<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Niebanalna, włoska odzież dla najbardziej wymagających. Duży wybór sukienek. Szukasz sukienki? Zapraszamy na ulicę Nowa 5 w miejscowości Przystajń! 517 288 783 ul. Nowa 5 42-141 Przystajń">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="menu-background"></div>
<header class="header">
    <div class="topbar">
        <div class="container large-container">
            <div class="topbar__wrapper">
                <?php $topbar = get_field("topbar", "options"); ?>
                <div class="topbar__flex">
                    <div class="topbar__write-to-us">
                        <?php $write_to_us = $topbar['write_to_us']; ?>
                        <a href='<?= $write_to_us['url']; ?>' class="bold"
                           aria-label="Napisz do nas"><?= $write_to_us['title'] ?></a>
                    </div>
                    <div class="topbar__opening-hours">
                        <?php $opening_hours = $topbar['opening_hours']; ?>
                        <p class="p-14"><?= $opening_hours; ?></p>
                    </div>
                </div>
                <div class="topbar__flex">
                    <div class="topbar__payments">
                        <?php $payments = $topbar['payments']; ?>
                        <p class="p-14"><?= $payments; ?></p>
                    </div>
                    <div class="topbar__log-in">
                        <?php $log_in = $topbar['log_in']; ?>
                        <a href='<?= $log_in['url']; ?>' class="bold"
                           aria-label="Zaloguj się"><?= $log_in['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header__grid">
            <div class="header__hamburger">
                <i id="hamburger" class="fas fa-bars" aria-label="Menu" aria-expanded="false"></i>
            </div>
            <div class="header__logo">
                <?php $header = get_field('header', 'options');
                    $logo = $header['logo']; ?>
                <a href='<?php home_url(); ?>' aria-label="Strona główna">
                    <?php if (!empty($logo)): ?>
                        <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>"/>
                    <?php endif; ?>
                </a>
            </div>
            <div class="header__menu">
                <?php $profile = $header['profile'];
                    $wishlist = $header['wishlist'];
                    $cart = $header['cart']; ?>
                <i id="header__menu__search" class="fas fa-search pointer" aria-label="Szukaj"
                   aria-expanded="false"></i>
                <a href='<?= $profile['url']; ?>' class="header__menu__profile" aria-label="Twój profil"><i
                        class="fas fa-user"></i></a>
                <a href='<?= $wishlist['url']; ?>' class="header__menu__wishlist" aria-label="Lista życzeń"><i
                        class="fas fa-heart"></i></a>
                <a href='<?= $cart['url']; ?>' class="header__menu__cart" aria-label="Koszyk"><i
                        class="fas fa-shopping-bag"></i></a>
            </div>
        </div>
        <div class="header__searchbar">
            <?= do_shortcode('[fibosearch]'); ?>
        </div>
        <nav id="site-navigation" class="header__navigation">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                        'menu_class' => 'primary-menu',
                    )
                );
            ?>
        </nav>
    </div>
</header>
<main>