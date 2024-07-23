<section id="hero" class="hero section dark-background">

    <img src="<?php the_field('banner_image'); ?>" alt="" data-aos="fade-in" class="">

    <div class="container d-flex flex-column align-items-center text-center mt-auto">
        <h2 data-aos="fade-up" data-aos-delay="100" class=""><?php the_field('banner_title'); ?></h2>
        <p data-aos="fade-up" data-aos-delay="200"><?php the_field('banner_description'); ?></p>
        <div data-aos="fade-up" data-aos-delay="300" class="">
            <a href="<?php the_field('banner_video_url'); ?>" class="glightbox pulsating-play-btn mt-3"></a>
        </div>
    </div>

    <div class="about-info mt-auto position-relative">
        <div class="container position-relative" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6">
              <h2>About The Event</h2>
              <p><?php the_field('about_the_event');?></p>
            </div>
            <div class="col-lg-3">
              <h3>Where</h3>
              <p><?php the_field('where_event');?></p>
            </div>
            <div class="col-lg-3">
              <h3>When</h3>
              <p><?php the_field('when_event');?></p>
            </div>
          </div>
        </div>
    </div>

</section>