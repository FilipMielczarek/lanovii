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
        <div class="container">
            <div class="topbar__wrapper">
                <?php $topbar = get_field("topbar", "options"); ?>
                <div class="topbar__flex">
                    <div class="topbar__telephone-number">
                        <?php $telephone_number = $topbar['telephone_number']; ?>
                        <?= $telephone_number; ?>
                    </div>
                    <div class="topbar__email">
                        <?php $email = $topbar['email']; ?>
                        <?= $email; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header__grid">
            <?php $header = get_field('header', 'options');
                $facebook = $header['facebook'];
                $instagram = $header['instagram'];
            ?>
            <div class="header__hamburger">
                <i id="hamburger" class="fas fa-bars" aria-label="Menu" aria-expanded="false"></i>
                <a href='<?= $instagram['url']; ?>' aria-label="Instagram La`Novii" rel="noopener noreferrer"
                   class="header__social">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href='<?= $facebook['url']; ?>' aria-label="Facebook La`Novii" rel="noopener noreferrer" class="header__social">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
            <div class="header__logo">
                <?php $logo = $header['logo']; ?>
                <a href='<?= get_home_url(); ?>' aria-label="Strona główna">
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
                <a href='<?= $cart['url']; ?>' class="header__menu__cart" aria-label="Koszyk">
                    <i class="fas fa-shopping-bag"></i>
                </a>
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
<main class="main">