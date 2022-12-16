<section class="about-section about-section--<?= $args['modifier'];?>">
    <div class="about-section__container container">
        <div class="about-section__inner">
            <div class="about-section__image"><?= wp_get_attachment_image( get_field('about_section')['image'], 'about-section-' . $args['modifier'] );?></div>
            <div class="about-section__content">
                <?= get_field('about_section')['content'];?>
            </div>
        </div>
    </div>
</section>