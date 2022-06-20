<?php

    if (!defined('_S_VERSION')) {
        define('_S_VERSION', '1.0.7');
    }

    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

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

    remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form');
    add_action('woocommerce_after_checkout_form', 'woocommerce_checkout_coupon_form');

    add_action('woocommerce_register_form', 'njengah_terms_and_conditions_to_registration', 20);
    function njengah_terms_and_conditions_to_registration()
    {
        if (wc_get_page_id('terms') > 0 && is_account_page()) {
            ?>
            <p class="form-row terms wc-terms-and-conditions">
                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                    <input type="checkbox"
                           class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                           name="terms" <?php checked(apply_filters('woocommerce_terms_is_checked_default', isset($_POST['terms'])), true); ?>
                           id="terms"/>
                    <span><?php printf(__('Przeczytałem/am i akceptuję <a href="%s" target="_blank" class="woocommerce-terms-and-conditions-link">regulamin</a>', 'woocommerce'), esc_url(wc_get_page_permalink('terms'))); ?></span>
                    <span class="required">*</span>
                </label>
                <input type="hidden" name="terms-field" value="1"/>
            </p>
            <?php
        }
    }

    add_action('woocommerce_register_post', 'terms_and_conditions_validation', 20, 3);
    function terms_and_conditions_validation($username, $email, $validation_errors)
    {
        if (!isset($_POST['terms']))
            $validation_errors->add('terms_error', __('Proszę przeczytać i zaakceptować regulamin, aby kontynuować składanie zamówienia.', 'woocommerce'));
        return $validation_errors;
    }

    add_action('woocommerce_after_order_notes', 'wpdesk_vat_field');
    /**
     * Pole NIP w zamówieniu
     */
    function wpdesk_vat_field($checkout)
    {
        echo '<div id="wpdesk_vat_field"><h3>' . __('Dane do Faktury') . '</h3>';

        woocommerce_form_field('vat_number', array(
            'type' => 'text',
            'maxlength' => 10,
            'class' => array('vat-number-field form-row-wide'),
            'label' => __('NIP'),
            'placeholder' => __('Wpisz NIP, aby otrzymać fakturę'),
        ), $checkout->get_value('vat_number'));

        echo '</div>';
    }

    add_action('woocommerce_checkout_update_order_meta', 'wpdesk_checkout_vat_number_update_order_meta');

    function wpdesk_checkout_vat_number_update_order_meta($order_id)
    {
        if (!empty($_POST['vat_number'])) {
            update_post_meta($order_id, '_vat_number', sanitize_text_field($_POST['vat_number']));
        }
    }

    add_action('woocommerce_admin_order_data_after_billing_address', 'wpdesk_vat_number_display_admin_order_meta', 10, 1);

    function wpdesk_vat_number_display_admin_order_meta($order)
    {
        echo '<p><strong>' . __('NIP', 'woocommerce') . ':</strong> ' . get_post_meta($order->id, '_vat_number', true) . '</p>';
    }

    add_filter('woocommerce_email_order_meta_keys', 'wpdesk_vat_number_display_email');

    function wpdesk_vat_number_display_email($keys)
    {
        $keys['NIP'] = '_vat_number';
        return $keys;
    }