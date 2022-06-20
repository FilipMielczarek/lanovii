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
    <div class="top-bar">
        <div class="container">
            <div class="top-bar__wrapper">
                <?php $topbar = get_field("topbar", "options");
                    $information = $topbar['topbar_information']; ?>
                <div class="top-bar__inforamtion">
                    <?= $information; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header__grid">
            <?php $header = get_field('header', 'options');
                $facebook = $header['facebook'];
                $instagram = $header['instagram'];
                $icons = $header['icons']; ?>
            <div class="header__hamburger">
                <?php $hamburger_icon = $icons['hamburger_icon']; ?>
                <button id="hamburger">
                    <?php if (!empty($hamburger_icon)): ?>
                        <img src="<?= $hamburger_icon['url']; ?>" alt="<?= $hamburger_icon['alt']; ?>"/>
                    <?php endif; ?>
                </button>
                <a href='<?= $instagram['url']; ?>' aria-label="Instagram La`Novii" rel="noopener noreferrer"
                   class="header__social">
                    <?php $instagram_icon = $icons['instagram_icon'];
                        if (!empty($instagram_icon)): ?>
                            <img src="<?= $instagram_icon['url']; ?>" alt="<?= $instagram_icon['alt']; ?>"/>
                        <?php endif; ?>
                </a>
                <a href='<?= $facebook['url']; ?>' aria-label="Facebook La`Novii" rel="noopener noreferrer"
                   class="header__social">
                    <?php $facebook_icon = $icons['facebook_icon'];
                        if (!empty($facebook_icon)): ?>
                            <img src="<?= $facebook_icon['url']; ?>" alt="<?= $facebook_icon['alt']; ?>"/>
                        <?php endif; ?>
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
                    $cart = $header['cart'];
                    $search_icon = $icons['search_icon'];
                    $account_icon = $icons['account_icon'];
                    $heart_icon = $icons['heart_icon'];
                    $shopping_icon = $icons['shopping_icon']; ?>
                <?php if (!empty($search_icon)): ?>
                    <img src="<?= $search_icon['url']; ?>"
                         alt="<?= $search_icon['alt']; ?>" id="header__menu__search"/>
                <?php endif; ?>
                <a href='<?= $profile['url']; ?>' class="header__menu__profile" aria-label="Twój profil">
                    <?php if (!empty($account_icon)): ?>
                        <img src="<?= $account_icon['url']; ?>" alt="<?= $account_icon['alt']; ?>"/>
                    <?php endif; ?>
                </a>
                <a href='<?= $wishlist['url']; ?>' class="header__menu__wishlist" aria-label="Lista życzeń">
                    <?php if (!empty($heart_icon)): ?>
                        <img src="<?= $heart_icon['url']; ?>" alt="<?= $heart_icon['alt']; ?>"/>
                    <?php endif; ?>
                </a>
                <a href='<?= $cart['url']; ?>' class="header__menu__cart" aria-label="Koszyk">
                    <?php if (!empty($shopping_icon)): ?>
                        <img src="<?= $shopping_icon['url']; ?>" alt="<?= $shopping_icon['alt']; ?>"/>
                    <?php endif; ?>
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