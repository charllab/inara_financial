<?php get_header(); ?>
<?php get_template_part( 'partials/hero', null, array(
    'modifier'=>'contact'
) );?>
<?php $contact=get_field('contact', 'options');?>
<div class="contact-section">
    <div class="contact-section__container container">
        <div class="contact-section__content">
            <div class="contact-section__text">
                <?= get_field('content');?>
                <a class="contact-section__tel" href="tel:<?= strip_tel($contact['phone_number']);?>" target="_blank"><?= $contact['phone_number'];?></a>
            </div>
            <div class="contact-section__form">
                <?= the_content();?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();