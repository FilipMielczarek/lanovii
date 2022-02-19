<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package lanovii
     */
?>
</main>
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
            <div class="footer__single-section">
                <?php $fourth_section_title = $footer_sections['fourth_section_title'];
                    $fourth_section = $footer_sections['fourth_section']; ?>
                <button class="accordion"><span class="accordion-footer-title"><?= $fourth_section_title; ?></span>
                </button>
                <div class="panel footer__social-media">
                    <?= $fourth_section; ?>
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
