<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="<?php echo site_url();?>" class="logo d-flex align-items-center me-auto">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
            <img src="<?php echo $image[0];?>" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
            <?php
              wp_nav_menu([
                 'menu'            => 'top',
                 'theme_location'  => 'header-menu',
                 'container'       => false,
                 'menu_id'         => '',
                 'menu_class'      => '',
                 'depth'           => 2,
                 'fallback_cb'     => 'bs4navwalker::fallback',
                 'walker'          => new bs4navwalker()
              ]);
            ?>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>