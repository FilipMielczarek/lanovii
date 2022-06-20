<footer class="footer standard-margins">
    <div class="container">
        <div class="footer__wrapper">
            <?php $footer_sections = get_field('footer_sections', 'options'); ?>
            <div class="footer__single-section">
                <?php $first_section_title = $footer_sections['first_section_title'];
                    $first_section = $footer_sections['first_section']; ?>
                <button class="accordion"><span class="accordion-footer-title"><?= $first_section_title; ?></span>
                </button>
                <div class="panel">
                    <?= $first_section; ?>
                </div>
            </div>
            <div class="footer__single-section">
                <?php $second_section_title = $footer_sections['second_section_title'];
                    $second_section = $footer_sections['second_section']; ?>
                <button class="accordion"><span class="accordion-footer-title"><?= $second_section_title; ?></span>
                </button>
                <div class="panel">
                    <?= $second_section; ?>
                </div>
            </div>
            <div class="footer__single-section">
                <?php $third_section_title = $footer_sections['third_section_title'];
                    $third_section = $footer_sections['third_section']; ?>
                <button class="accordion"><span class="accordion-footer-title"><?= $third_section_title; ?></span>
                </button>
                <div class="panel">
                    <?= $third_section; ?>
                </div>
            </div>
            <div class="footer__single-section footer__fourth-section">
                <?php $fourth_section_title = $footer_sections['fourth_section_title'];
                    $fourth_section = $footer_sections['fourth_section']; ?>
                <span class="accordion-footer-title"><?= $fourth_section_title; ?></span>
                <div class="footer__social-media">
                    <?php if ($fourth_section):
                        foreach ($fourth_section as $item):
                            $single_icon = $item['single_icon'];
                            $social_media_link = $item['social_media_link']; ?>
                            <div class="footer__social-media__single">
                                <a href='<?= $social_media_link['url']; ?>' rel="noreferrer noopener">
                                    <?php if (!empty($single_icon)): ?>
                                        <img src="<?= $single_icon['url']; ?>" alt="<?= $single_icon['alt']; ?>"/>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <?php $copyright = $footer_sections['copyright']; ?>
        <p><?= $copyright; ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
