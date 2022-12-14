<?php get_header(); ?>
<div class="hero">
    <?= wp_get_attachment_image(get_field('hero')['image'], 'hero');?>    
    <div class="container">
        <div class="hero__content">
            <h1 class="sub">Achieve The Profits & Wealth You Deserve.</h1>
            <p class="body-text">Reach your potential with a Profit First coach on your side. </p>
            <ul class="hero__buttons">
                <li><a class="button button--book" href="#">Book a Discovery Call</a></li>
                <li><a class="button button--secondary" href="#">Learn More</a></li>
            </ul>
        </div>
    </div>
</div>
<?php get_footer();
