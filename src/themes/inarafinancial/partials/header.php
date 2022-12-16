<header id="header" class="header">
    <div class="header__container container">
        <div class="header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?= wp_get_attachment_url( get_field('logos', 'options')['for_light_bg'] );?>"
                        alt="<?php bloginfo('name'); ?> - Logo"
                        class="img-fluid">
                <span class="sr-only"><?php bloginfo('name'); ?></span>
            </a>
        </div>
        <div class="header__nav">
            <nav class="navigation navbar navbar-expand-lg">
                <?php
                    //bootstrap navwalker hooks
                    $navwalker_id='js-nav';
                ?>                
                <div class="navigation__main">          
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => $navwalker_id,
                        'menu_class' => 'navbar-nav',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>                    
                    <a class="navigation__cta button" href="#">Schedule a Call</a>
                    <div class="navigation__burger">
                        <button class="burger navbar-toggler collapsed"
                                type="button"
                                data-toggle="collapse"
                                data-target="#<?= $navwalker_id;?>"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                            <div></div>
                            <div></div>
                            <div></div>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>