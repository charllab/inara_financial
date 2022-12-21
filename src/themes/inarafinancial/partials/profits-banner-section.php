<section class="profits-banner-section"
         data-aos="fade-left"
         data-aos-offset="120"
         data-aos-delay="100"
         data-aos-duration="1000"
         data-aos-easing="ease"
         data-aos-mirror="false"
         data-aos-once="false"
>
    <div class="profits-banner-section__container container">
        <div class="profits-banner-section__content">
            <?= get_field('profits_banner_section')['content'];?>
            <a class="button button--book" href="<?= get_field('profits_banner_section')['book_button']['link'];?>"><?= get_field('profits_banner_section')['book_button']['label'];?></a>
        </div>
    </div>
</section>