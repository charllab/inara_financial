<?php get_header(); ?>
<div class="hero">
    <?= wp_get_attachment_image(get_field('hero')['image'], 'hero');?>    
    <div class="container">
        <div class="hero__content">
            <h1 class="sub-text">Achieve The Profits & Wealth You Deserve.</h1>
            <p class="body-text">Reach your potential with a Profit First coach on your side. </p>
            <ul class="hero__buttons">
                <li><a class="button button--book" href="#">Book a Discovery Call</a></li>
                <li><a class="button button--secondary" href="#">Learn More</a></li>
            </ul>
        </div>
    </div>
</div>
<section class="main-catch-section">
    <div class="main-catch-section__container container">
        <?= wp_get_attachment_image( get_field('logo', 'options') );?>
        <div class="main-catch-section__content">
            <h2>The first step to realizing sustainable profitability. </h2>
            <p>What’s the secret to reaching your profit targets? There is a recipe, but it’s not a secret.
            It starts with a trusted profit expert creating a blueprint just for you.</p>
        </div>
    </div>
</section>
<section class="about-section">
    <div class="about-section__container container">
        <div class="about-section__inner">
            <img src="https://placekitten.com/445/514" alt="">
            <div class="about-section__content">
                <h2 class="h1">I’m Jodi Bariesheff, </h2>
                <p class="sub-text">A certified Profit First Professional.</p>
                <p>
                    After more than 12 years supporting small businesses, I began looking for a way to help clients better understand the numbers behind their operations so they could make informed decisions and keep more money.<br><br>
                    I discovered Profit First—a proven, easy-to-use cash management system I now use in my own business and as a profit coach. The payoff starts on day one.
                </p>
            </div>
        </div>
    </div>
</section>
<?php get_footer();
