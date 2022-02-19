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
            <div class="swiper inspirations__swiper">
                <div class="swiper-wrapper inspirations__swiper__wrapper">
                    <?php $inspirations = $homepage_inspirations['inspirations'];
                        if ($inspirations):
                            foreach ($inspirations as $item):
                                $image = $item['inspiration_image'];
                                $link = $item['inspiration_link']; ?>
                                <div class="swiper-slide inspirations__swiper__slide">
                                    <?php if (!empty($image)): ?>
                                        <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>"/>
                                    <?php endif; ?>
                                    <div class="inspirations__swiper__slide__button">
                                        <a href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
                                    </div>
                                </div>
                            <?php endforeach;
                        endif; ?>
                </div>
                <div class="swiper-button-next inspirations__swiper__next"></div>
                <div class="swiper-button-prev inspirations__swiper__prev"></div>
            </div>
        </div>
    </div>
</section>