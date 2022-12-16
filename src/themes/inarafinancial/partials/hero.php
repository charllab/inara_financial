<div class="hero <?= $args['modifier'];?>">
    <?= wp_get_attachment_image(get_field('hero')['image'], 'hero');?>    
    <div class="hero__container container">
        <div class="hero__content">

            <?php if(!empty(get_field('hero')['icon'])){?>                
                <div class="hero__icon"><?= wp_get_attachment_image(get_field('hero')['icon']);?></div>
            <?php }?>

            <?= get_field('hero')['content'];?>

            <?php if(!empty(get_field('hero')['book_button'])){?>
                <ul class="hero__buttons">
                    <li><a class="button button--book" href="<?= get_field('hero')['book_button']['link'];?>"><?= get_field('hero')['book_button']['label'];?></a></li>
                    <li><a class="button button--secondary" href="<?= get_field('hero')['learn_button']['link'];?>"><?= get_field('hero')['learn_button']['label'];?></a></li>
                </ul>
            <?php }?>

        </div>
    </div>
</div>