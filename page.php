<?php get_header(); ?>
    <div id="primary" class="site-main standard-margins wysiwyg-content">
        <div class="container">
            <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'page');
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                endwhile;
            ?>
        </div>
    </div>
<?php get_footer();
