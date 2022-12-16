<?php get_header(); ?>
<?php get_template_part( 'partials/hero', null, array(
    'modifier'=>'frontpage'
) );?>
<section class="main-catch-section">
    <div class="main-catch-section__container container">
        <?= wp_get_attachment_image( get_field('logos', 'options')['for_light_bg'] );?>
        <div class="main-catch-section__content">
            <?= get_field('catch_section')['content'];?>
        </div>
    </div>
</section>
<?php get_template_part( 'partials/about-section', null, array(
    'modifier'=>'frontpage'
) );?>
<section class="profits-section">
    <div class="profits-section__container container">
        <div class="profits-section__heading"><?= get_field('profits_section')['content'];?></div>
        <?php
        $profit_cards=get_field('profits_section')['cards'];
        if(!empty($profit_cards)){?>
            <ul>
                <?php foreach($profit_cards as $card){?>
                    <li>
                        <div class="profit-card">                            
                            <?= wp_get_attachment_image($card['icon']);?>
                            <?= $card['content'];?>
                            <a class="button button--arrow" href="<?= $card['learn_button']['link'];?>"><?= $card['learn_button']['label'];?><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </li>
                <?php }?>
            </ul>
        <?php }?>        
    </div>
</section>
<?php get_template_part('partials/testimonial-section');?>                       
<?php get_footer();
