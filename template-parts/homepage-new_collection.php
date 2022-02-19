<section class="new-arrivals standard-margins">
    <div class="container">
        <div class="new-arrivals__wrapper">
            <?php $new_arrivals = get_field('homepage_new_arrivals'); ?>
            <div class="new-arrivals__heading">
                <?php $heading = $new_arrivals['heading']; ?>
                <h2><?= $heading; ?></h2>
            </div>
            <div class="new-arrivals__products">
                <?php $shortcode = $new_arrivals['shortcode']; ?>
                <?= $shortcode; ?>
            </div>
        </div>
    </div>
</section>