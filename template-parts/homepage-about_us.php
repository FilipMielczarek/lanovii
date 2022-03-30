<section class="about-us standard-margins">
    <div class="container">
        <?php $homepage_about_us = get_field('homepage_about_us'); ?>
        <div class="about-us__heading">
            <?php $heading = $homepage_about_us['heading']; ?>
            <h4 class="h2"><?= $heading; ?></h4>
        </div>
        <div class="about-us__content">
            <?php $content = $homepage_about_us['content']; ?>
            <p><?= $content; ?></p>
        </div>
    </div>
</section>