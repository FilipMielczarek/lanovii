<?php /* Template Name: Homepage */
    get_header(); ?>
<main class="homepage">
    <?php
        get_template_part('template-parts/homepage', 'category_pick');
        get_template_part('template-parts/homepage', 'slider');
        get_template_part('template-parts/homepage', 'featured_categories');
        get_template_part('template-parts/homepage', 'characteristics');
        get_template_part('template-parts/homepage', 'inspirations');
        get_template_part('template-parts/homepage', 'new_arrivals');
        get_template_part('template-parts/homepage', 'about_us');
        get_template_part('template-parts/homepage', 'newsletter');
        get_template_part('template-parts/homepage', 'map');
    ?>
</main>
<?php get_footer(); ?>
