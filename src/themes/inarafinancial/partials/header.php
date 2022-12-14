<header id="header" class="header">
    <nav class="nav navbar navbar-expand-lg">
        <div class="container">            
            <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?= wp_get_attachment_url( get_field('logo', 'options') );?>"
                            alt="<?php bloginfo('name'); ?> - Logo"
                            class="img-fluid">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div>            
            <div class="d-flex">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".mainnav-m" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="d-lg-flex flex-lg-column d-none d-lg-block">
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'mainnav',
                        'menu_class' => 'navbar-nav ml-auto',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>
                </div>
                <a class="nav__cta button" href="#">Schedule a Call</a>
            </div>
        </div>        
    </nav>    

    <div class="mainnav-m collapse navbar-collapse">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'container',
            'container_id' => 'mainnav',
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => '',
            'menu_id' => 'main-menu',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>
    </div>
</header>