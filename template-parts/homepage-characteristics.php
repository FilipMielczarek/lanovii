<section class="characteristics standard-margins">
    <div class="container">
        <div class="characteristics__wrapper">
            <?php $homepage_characteristics = get_field('homepage_characteristics');
                $single = $homepage_characteristics['single'];
                if ($single):
                    foreach ($single as $item):
                        $icon = $item['icon'];
                        $heading = $item['heading'];
                        $content = $item['content']; ?>
                        <div class="characteristics__single">
                            <div class="characteristics__single__icon">
                                <?php if (!empty($icon)): ?>
                                    <img src="<?= $icon['url']; ?>"
                                         alt="<?= $icon['alt']; ?>"/>
                                <?php endif; ?>
                            </div>
                            <div class="characteristics__single__texts">
                                <div class="characteristics__single__heading">
                                    <p><?= $heading; ?></p>
                                </div>
                                <div class="characteristics__single__content">
                                    <p class="p-14"><?= $content; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                endif; ?>
        </div>
    </div>
</section>