<section class="book-banner-section">
    <div class="book-banner-section__container container"
         data-aos="zoom-in"
         data-aos-offset="120"
         data-aos-delay="100"
         data-aos-duration="1000"
         data-aos-easing="ease"
         data-aos-mirror="false"
         data-aos-once="false"
    >
        <?= get_field('book_banner_section')['content'];?>
        <a class="button button--book" href="<?= get_field('book_banner_section')['book_button']['link'];?>"><?= get_field('book_banner_section')['book_button']['label'];?></a>
    </div>
</section>