<?php get_header(); ?>
    <div id="primary" class="site-main">
        <div class="container">
            <?php if (have_posts()) : ?>
            <header class="page-header page-header__search">
                <h1 class="page-title">
                    <?php
                        printf(esc_html__('Search Results for: %s', 'lanovii'), '<span>' . get_search_query() . '</span>');
                    ?>
                </h1>
            </header>

            <section class="product-search">
                <?php while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'search');

                endwhile;
                    the_posts_navigation();
                    else :
                        get_template_part('template-parts/content', 'none');
                    endif;
                ?>
            </section>
        </div>
    </div>
<?php get_footer();
