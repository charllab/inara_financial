<section class="profits-banner-section">
    <div class="profits-banner-section__container container">
        <div class="profits-banner-section__content">
            <?= get_field('profits_banner_section')['content'];?>
            <a class="button button--book" href="<?= get_field('profits_banner_section')['book_button']['link'];?>"><?= get_field('profits_banner_section')['book_button']['label'];?></a>
        </div>
    </div>
</section>