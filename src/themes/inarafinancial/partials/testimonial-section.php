<?php $testimonial_section=get_field('testimonial_section', 'options');?>
<section class="testimonial-section">
    <div class="testimonial-section__container container">
        <div class="testimonial-section__content">
            <div class="testimonial-section__heading"><?= $testimonial_section['content'];?></div>
            <?php
            $testimonial_cards=$testimonial_section['cards'];
            if(!empty($testimonial_cards)){?>
                <div class="testimonial-section__slider-container"
                     data-aos="fade-up"
                     data-aos-offset="120"
                     data-aos-delay="0"
                     data-aos-duration="1000"
                     data-aos-easing="ease"
                     data-aos-mirror="false"
                     data-aos-once="false"
                >
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