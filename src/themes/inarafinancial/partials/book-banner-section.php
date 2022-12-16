<section class="book-banner-section">
    <div class="book-banner-section__container container">
        <?= get_field('book_banner_section')['content'];?>
        <a class="button button--book" href="<?= get_field('book_banner_section')['book_button']['link'];?>"><?= get_field('book_banner_section')['book_button']['label'];?></a>
    </div>
</section>