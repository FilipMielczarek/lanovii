<section class="banner">
    <div class="container">
        <div class="swiper banner__swiper">
            <div class="swiper-wrapper">
                <?php $banner = get_field('homepage_banner');
                    $homepage_banner_photos = $banner['homepage_banner_photos'];
                    if ($homepage_banner_photos):
                        foreach ($homepage_banner_photos as $item):
                            $single = $item['homepage_banner__photos__single']; ?>
                            <div class="swiper-slide">
                                <?php if (!empty($single)): ?>
                                    <img src="<?= $single['url']; ?>" alt="<?= $single['alt']; ?>"/>
                                <?php endif; ?>
                            </div>
                        <?php endforeach;
                    endif; ?>
            </div>
        </div>
    </div>
</section>