<?php get_header(); ?>
<?php get_template_part( 'partials/hero', null, array(
    'modifier'=>'profits'
) );?>
<section class="inner-catch-section">
    <div class="inner-catch-section__container container">
        <div class="inner-catch-section__content">
            <?= get_field('catch_section')['content'];?>
            <a class="button button--book" href="<?= get_field('catch_section')['book_button']['link'];?>"><?= get_field('catch_section')['book_button']['label'];?></a>
        </div>
    </div>
</section>
<?php get_template_part( 'partials/about-section', null, array(
    'modifier'=>'profits'
) );?>
<?php get_template_part( 'partials/blueprint-section' );?>
<?php get_template_part( 'partials/book-banner-section' );?>
<?php get_footer();