<footer id="footer" class="footer dark-background">

    <div class="footer-top">
        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="<?php echo site_url();?>" class="logo d-flex align-items-center">
                    <img src="<?php echo get_field('footer_logo', 'option'); ?>" alt="footer-logo">
                </a>
                <div class="footer-contact pt-3">
                    <p><?php echo get_field('address', 'option');?></p>
                    <p class="mt-3"><strong>Phone:</strong> <span><?php echo get_field('phone', 'option');?></span></p>
                    <p><strong>Email:</strong> <span><?php echo get_field('email', 'option');?></span></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 footer-links">
                <h4><?php echo get_field('footer_title_2', 'option');?></h4>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ));?>
            </div>

            <div class="col-lg-4 col-md-3 footer-links">
                <h4><?php echo get_field('footer_title_3', 'option');?></h4>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ));?>
            </div>

        </div>
        </div>
    </div>

    <div class="copyright text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
            <div>
            © Copyright <strong><span><?php echo date('Y');?></span></strong>. All Rights Reserved.
            </div>
            <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
            <a href="<?php echo get_field('twitter', 'option');?>" target="_blank" class="bi bi-twitter-x"></i></a>
            <a href="<?php echo get_field('facebook', 'option');?>" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="<?php echo get_field('instagram', 'option');?>" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>

        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>