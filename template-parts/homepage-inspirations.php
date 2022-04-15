<section class="inspirations standard-margins">
    <div class="container">
        <div class="inspirations__wrapper">
            <?php $homepage_inspirations = get_field('homepage_inspirations'); ?>
            <div class="inspirations__heading">
                <?php $first_heading = $homepage_inspirations['first_heading']; ?>
                <h1 class="h2"><?= $first_heading; ?></h1>
            </div>
            <div class="inspirations__subheading">
                <?php $second_heading = $homepage_inspirations['second_heading']; ?>
                <h2><?= $second_heading; ?></h2>
            </div>
            <div class="inspirations__instagram">
                <?php $instagram_feed = $homepage_inspirations['instagram_feed']; ?>
                <?= $instagram_feed; ?>
            </div>
        </div>
    </div>
</section>