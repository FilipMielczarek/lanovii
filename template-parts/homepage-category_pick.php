<section class="category-pick standard-margins">
    <div class="container">
        <?php $homepage_category_switcher = get_field('homepage_category_switcher');
            $first_category = $homepage_category_switcher['first_category'];
            $second_category = $homepage_category_switcher['second_category'];
            $third_category = $homepage_category_switcher['third_category']; ?>
        <div class="category-pick__choices">
            <?php $first_category_name = $first_category['category_name'];
                $second_category_name = $second_category['category_name'];
                $third_category_name = $third_category['category_name']; ?>
            <button id="category-pick__choices__first-choice"><?= $first_category_name; ?></button>
            <button id="category-pick__choices__second-choice"><?= $second_category_name; ?></button>
            <button id="category-pick__choices__third-choice"><?= $third_category_name; ?></button>
        </div>
        <?php if ($first_category): ?>
            <div id="category-pick__products__first-choice" class="category-pick__products small-margin">
                <?php $products_shortcode = $first_category['products_shortcode']; ?>
                <?= $products_shortcode ?>
            </div>
        <?php endif; ?>

        <?php if ($second_category): ?>
            <div id="category-pick__products__second-choice" class="category-pick__products small-margin">
                <?php $products_shortcode = $second_category['products_shortcode']; ?>
                <?= $products_shortcode ?>
            </div>
        <?php endif; ?>

        <?php if ($third_category): ?>
            <div id="category-pick__products__third-choice" class="category-pick__products small-margin">
                <?php $products_shortcode = $third_category['products_shortcode']; ?>
                <?= $products_shortcode ?>
            </div>
        <?php endif; ?>
    </div>
</section>