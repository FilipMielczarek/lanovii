<?php get_header(); ?>

    <div class="page-not-found standard-margins">
        <div class="container">
            <?php $pnf = get_field('pnf', 'option'); ?>
            <div class="page-not-found__heading">
                <?php $heading = $pnf['heading']; ?>
                <h1><?= $heading; ?></h1>
            </div>
            <div class="page-not-found__subheading">
                <?php $subheading = $pnf['subheading']; ?>
                <h2><?= $subheading; ?></h2>
            </div>
            <div class="page-not-found__go-back">
                <?php $go_back = $pnf['go_back']; ?>
                <a href="<?= $go_back['url']; ?>" aria-label="Wróć na stronę główną"><?= $go_back['title']; ?></a>
            </div>
        </div>
    </div>

<?php get_footer();
