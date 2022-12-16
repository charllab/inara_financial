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
<section class="testimonial-section">
    <div class="testimonial-section__container container">
        <div class="testimonial-section__content">
            <div class="testimonial-section__heading"><?= get_field('testimonial_section')['content'];?></div>
            <?php
            $testimonial_cards=get_field('testimonial_section')['cards'];
            if(!empty($testimonial_cards)){?>
                <div class="testimonial-section__slider-container">
                    <div id="testimonial-slider" class="testimonial-section__slider carousel slide" data-ride="false">
                        <div class="carousel-inner">
                            <?php foreach($testimonial_cards as $i=>$card){?>
                                <div class="carousel-item <?= ($i === 0 ? 'active' : '') ?>">
                                    <figure class="testimonial-card">
                                        <blockquote>
                                            <?= $card['quote'];?>
                                        </blockquote>
                                        <figcaption>
                                            <?= wp_get_attachment_image($card['author']['image']);?>                                            
                                            <div class="body-text-semi">
                                                <?= $card['author']['credentials']?>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            <?php }?>
                        </div>
                        <?php if( count($testimonial_cards) > 1 ){?>
                            <a class="carousel-control-prev" href="#testimonial-slider" role="button" data-slide="prev">
                                <i class="fas fa-arrow-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#testimonial-slider" role="button" data-slide="next">
                                <i class="fas fa-arrow-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        <?php }?>                        
                    </div>
                </div>
            <?php }?>            
        </div>
    </div>
</section>                        
<?php get_footer();
