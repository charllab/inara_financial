<?php get_header(); ?>
<div class="hero">
    <?= wp_get_attachment_image(get_field('hero')['image'], 'hero');?>    
    <div class="container">
        <div class="hero__content">
            <?= get_field('hero')['content'];?>
            <ul class="hero__buttons">
                <li><a class="button button--book" href="<?= get_field('hero')['book_button']['link'];?>"><?= get_field('hero')['book_button']['label'];?></a></li>
                <li><a class="button button--secondary" href="<?= get_field('hero')['learn_button']['link'];?>"><?= get_field('hero')['learn_button']['label'];?></a></li>
            </ul>
        </div>
    </div>
</div>
<section class="main-catch-section">
    <div class="main-catch-section__container container">
        <?= wp_get_attachment_image( get_field('logos', 'options')['for_light_bg'] );?>
        <div class="main-catch-section__content">
            <?= get_field('catch_section')['content'];?>
        </div>
    </div>
</section>
<section class="about-section">
    <div class="about-section__container container">
        <div class="about-section__inner">
            <div class="about-section__image"><?= wp_get_attachment_image( get_field('about_section')['image'], 'about-section' );?></div>
            <div class="about-section__content">
                <?= get_field('about_section')['content'];?>
            </div>
        </div>
    </div>
</section>
<section class="profits-section">
    <div class="profits-section__container container">
        <h2>Improve profits instantly.</h2>
        <ul>
            <?php for($i=0; $i < 2; $i++){?>
                <li>
                    <div class="profit-card">
                        <img src="https://placekitten.com/162/162" alt="">
                        <h3>Startup Profits</h3>
                        <p class="body-text-semi">New small businesses with strong revenue potential</p>
                        <p>Get the keys to smart financial decisions so you can reach your business goals faster.</p>
                        <a class="button button--arrow" href="#">Learn More<i class="fas fa-chevron-right"></i></a>
                    </div>
                </li>
            <?php }?>
        </ul>
    </div>
</section>
<section class="testimonial-section">
    <div class="testimonial-section__container container">
        <div class="testimonial-section__content">
            <h2 class="h1">What customer say about us.</h2>
            <div class="testimonial-section__slider-container">
                <div id="testimonial-slider" class="testimonial-section__slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php for($i=0; $i < 3; $i++){?>
                            <div class="carousel-item <?= ($i === 0 ? 'active' : '') ?>">
                                <figure class="testimonial-card">
                                    <blockquote>
                                        <p class="sub-text">“Our team worked with Joti to take our business to the next level. She was amazing to work with and her help allowed us to grow from a start up, to an established business.”</p>
                                    </blockquote>
                                    <figcaption>
                                        <img src="https://placekitten.com/68/68" alt="">
                                        <div class="body-text-semi">
                                            <span>Djamila Malak,</span>
                                            <cite>Owner of RoboCo.</cite>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        <?php }?>
                    </div>
                    <a class="carousel-control-prev" href="#testimonial-slider" role="button" data-slide="prev">
                        <i class="fas fa-arrow-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonial-slider" role="button" data-slide="next">
                        <i class="fas fa-arrow-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
    </div>
</section>
<?php get_footer();
