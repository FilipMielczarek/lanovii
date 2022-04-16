<?php

    if (!defined('_S_VERSION')) {
        define('_S_VERSION', '1.0.1');
    }

    function lanovii_setup()
    {
        load_theme_textdomain('lanovii', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'lanovii'),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        add_theme_support(
            'custom-background',
            apply_filters(
                'lanovii_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }

    add_action('after_setup_theme', 'lanovii_setup');

    function lanovii_content_width()
    {
        $GLOBALS['content_width'] = apply_filters('lanovii_content_width', 640);
    }

    add_action('after_setup_theme', 'lanovii_content_width', 0);

    function lanovii_widgets_init()
    {
        register_sidebar(
            array(
                'name' => esc_html__('Sidebar', 'lanovii'),
                'id' => 'sidebar-1',
                'description' => esc_html__('Add widgets here.', 'lanovii'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            )
        );
    }

    add_action('widgets_init', 'lanovii_widgets_init');

    function lanovii_scripts()
    {
        wp_enqueue_style('lanovii-style', get_stylesheet_uri(), array(), _S_VERSION);
        wp_style_add_data('lanovii-style', 'rtl', 'replace');
        wp_enqueue_style('lanovii-style-min', get_template_directory_uri() . '/dist/main.css', array(), _S_VERSION);
        wp_enqueue_script('lanovii-script-min', get_template_directory_uri() . '/dist/main.js', [], _S_VERSION, true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        if (
            $_SERVER['SERVER_NAME'] == 'localhost' ||
            strpos($_SERVER['SERVER_NAME'], '.test') ||
            strpos($_SERVER['SERVER_NAME'], '.local')
        ) {
            wp_enqueue_script('livereload', 'http://localhost:35729/livereload.js', [], _S_VERSION, true);
        }
    }

    add_action('wp_enqueue_scripts', 'lanovii_scripts');

    if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
            'page_title' => 'Ogólne ustawienia',
            'menu_title' => 'Ustawienia motywu',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Ustawienia nagłówka',
            'menu_title' => 'Nagłówek',
            'parent_slug' => 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Ustawienia stopki',
            'menu_title' => 'Stopka',
            'parent_slug' => 'theme-general-settings',
        ));

    }

    function lanovii_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }

    add_action('after_setup_theme', 'lanovii_add_woocommerce_support');

    function disable_woo_commerce_sidebar()
    {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    add_action('init', 'disable_woo_commerce_sidebar');

    require get_template_directory() . '/inc/custom-header.php';
    require get_template_directory() . '/inc/template-tags.php';
    require get_template_directory() . '/inc/template-functions.php';
    require get_template_directory() . '/inc/customizer.php';
    if (defined('JETPACK__VERSION')) {
        require get_template_directory() . '/inc/jetpack.php';
    }

    add_filter('wc_product_sku_enabled', '__return_false');

    add_filter('get_comment_author', 'wpse_use_user_real_name', 10, 3);

    function wpse_use_user_real_name($author, $comment_id, $comment)
    {
        $firstname = '';
        $lastname = '';
        $user_id = $comment->user_id;

        if ($user_id) {
            $user_object = get_userdata($user_id);
            $firstname = $user_object->user_firstname;
            $lastname = $user_object->user_lastname;
        }

        if ($firstname || $lastname) {
            $author = $firstname . ' ' . $lastname;
            $author = trim($author);
        }

        return $author;
    }