<section id="gallery" class="gallery section">

    <div class="container section-title" data-aos="fade-up">
    <h2><?php the_field('gallery_title');?></h2>
    <p><?php the_field('gallery_description');?></p>
    </div>

    <div class="container">

    <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
        {
            "loop": true,
            "speed": 600,
            "autoplay": {
            "delay": 5000
            },
            "slidesPerView": "auto",
            "centeredSlides": true,
            "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
            },
            "breakpoints": {
            "320": {
                "slidesPerView": 1,
                "spaceBetween": 0
            },
            "768": {
                "slidesPerView": 3,
                "spaceBetween": 20
            },
            "1200": {
                "slidesPerView": 5,
                "spaceBetween": 20
            }
            }
        }
        </script>
        <div class="swiper-wrapper align-items-center">
            <?php 
            $images = get_field('gallery_images');
            if( $images ):
            foreach( $images as $image ): ?>
            <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="<?php echo $image;?>">
                    <img src="<?php echo $image;?>" class="img-fluid" alt="">
                </a>
            </div>
            <?php endforeach; endif; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    </div>

</section>