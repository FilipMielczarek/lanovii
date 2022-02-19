<section class="newsletter standard-margins">
    <div class="container">
        <div class="newsletter__wrapper">
            <div class="newsletter__sign-up">
                <?php $homepage_newsletter = get_field('homepage_newsletter'); ?>
                <div class="newsletter__sign-up__heading">
                    <?php $heading = $homepage_newsletter['heading']; ?>
                    <h3 class="h2"><?= $heading; ?></h3>
                </div>
                <div class="newsletter__sign-up__subheading">
                    <?php $subheading = $homepage_newsletter['subheading']; ?>
                    <h3 class="h2"><?= $subheading; ?></h3>
                </div>
                <?= do_shortcode('[newsletter_form form="1"]'); ?>
            </div>
            <div class="newsletter__image">
                <?php $image = $homepage_newsletter['image'];
                    if (!empty($image)): ?>
                        <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>"/>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</section>