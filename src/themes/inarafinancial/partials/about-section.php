<section class="about-section about-section--<?= $args['modifier'];?>"
         data-aos="fade-up"
         data-aos-offset="120"
         data-aos-delay="100"
         data-aos-duration="1000"
         data-aos-easing="ease"
         data-aos-mirror="false"
         data-aos-once="false"
>
    <div class="about-section__container container">
        <div class="about-section__inner">
            <div class="about-section__image"><?= wp_get_attachment_image( get_field('about_section')['image'], 'about-section-' . $args['modifier'] );?></div>
            <div class="about-section__content">
                <?= get_field('about_section')['content'];?>
            </div>
        </div>
    </div>
</section>