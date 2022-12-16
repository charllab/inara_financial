<section class="ideal-section">
    <div class="ideal-section__container container">
        <div class="ideal-section__content"><?= get_field('ideal_section')['content'];?></div>
        <?php
        $ideal_list=get_field('ideal_section')['list'];
        if(!empty($ideal_list)){?>
            <ul class="ideal-section__list">
                <?php foreach($ideal_list as $item){?>
                    <li class="ideal-section__list-item">
                        <div class="ideal-section__card">                            
                            <img src="<?= wp_get_attachment_url($item['icon']);?>" alt="">
                            <p><?= $item['label'];?></p>
                        </div>
                    </li>
                <?php }?>
            </ul>
        <?php }?>
    </div>
</section>