<div class="hero hero--<?= $args['modifier'];?>"
     data-aos="fade-left"
     data-aos-offset="0"
     data-aos-delay="0"
     data-aos-duration="1000"
     data-aos-easing="ease"
     data-aos-mirror="false"
     data-aos-once="true"
>
    <?= wp_get_attachment_image(get_field('hero')['image'], 'hero');?>
    <div class="hero__container container"
         data-aos="fade-up"
         data-aos-offset="0"
         data-aos-delay="200"
         data-aos-duration="500"
         data-aos-easing="ease"
         data-aos-mirror="false"
         data-aos-once="true"
    >
        <?php if(!empty(get_field('hero')['content'])){?>
            <div class="hero__content">

                <?php if(!empty(get_field('hero')['icon'])){?>
                    <div class="hero__icon"><?= wp_get_attachment_image(get_field('hero')['icon']);?></div>
                <?php }?>

                <?= get_field('hero')['content'];?>

                <?php if(!empty(get_field('hero')['book_button'])){?>
                    <ul class="hero__buttons">
                        <li><a class="button button--secondary" href="<?= get_field('hero')['book_button']['link'];?>"><?= get_field('hero')['book_button']['label'];?></a></li>
                        <li><a class="button button--book" href="<?= get_field('hero')['learn_button']['link'];?>"><?= get_field('hero')['learn_button']['label'];?></a></li>
                    </ul>
                <?php }?>

            </div>
        <?php }?>
    </div>
</div>