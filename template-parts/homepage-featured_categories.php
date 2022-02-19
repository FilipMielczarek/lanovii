<section class="featured-categories small-margin">
    <div class="container">
        <?php $homepage_categories = get_field('homepage_categories'); ?>
        <div class="featured-categories__wrapper">
            <?php $homepage_categories_first = $homepage_categories['homepage_categories_first'];
                $first_wcc = $homepage_categories_first['homepage_categories__wcc'];
                $first_image = $homepage_categories_first['homepage_categories__image']; ?>
            <?php if ($homepage_categories_first): ?>
                <div class="featured-categories__single">
                    <a href="<?= get_term_link($first_wcc); ?>">
                        <?php if (!empty($first_image)): ?>
                            <img src="<?= $first_image['url']; ?>" alt="<?= $first_image['alt']; ?>"/>
                        <?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php $homepage_categories_second = $homepage_categories['homepage_categories_second'];
                $first_wcc = $homepage_categories_second['homepage_categories__wcc'];
                $first_image = $homepage_categories_second['homepage_categories__image']; ?>
            <?php if ($homepage_categories_second): ?>
                <div class="featured-categories__single">
                    <a href="<?= get_term_link($first_wcc); ?>">
                        <?php if (!empty($first_image)): ?>
                            <img src="<?= $first_image['url']; ?>" alt="<?= $first_image['alt']; ?>"/>
                        <?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php $homepage_categories_third = $homepage_categories['homepage_categories_third'];
                $first_wcc = $homepage_categories_third['homepage_categories__wcc'];
                $first_image = $homepage_categories_third['homepage_categories__image']; ?>
            <?php if ($homepage_categories_third): ?>
                <div class="featured-categories__single">
                    <a href="<?= get_term_link($first_wcc); ?>">
                        <?php if (!empty($first_image)): ?>
                            <img src="<?= $first_image['url']; ?>" alt="<?= $first_image['alt']; ?>"/>
                        <?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>