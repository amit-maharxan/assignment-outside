<?php do_action('outside_header'); ?>

    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1><?php the_title();?></h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?php echo site_url();?>">Home</a></li>
            <li><a href="<?php echo site_url('events');?>">Events</a></li>
            <li class="current"><?php the_title();?></li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="events" class="events section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );?>" alt="event-image" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <div class="event-details">
                <p class="event-date"><i class="fa-regular fa-calendar"></i><?php echo get_field('event_date');?></p>
                <p class="event-time"><i class="fa-regular fa-clock"></i><?php echo get_field('event_time');?></p>
                <p class="event-venue"><i class="fa-solid fa-map-pin"></i><?php echo get_field('venue');?></p>
                <p class="event-speaker"><i class="fa-regular fa-user"></i><?php echo get_field('speaker');?></p>
              </div>  

              <div class="event-description">
                <?php the_content();?>
              </div>
              
              <div class="social">
                <span class="share_text">Share: </span>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section>

<?php do_action('outside_footer'); ?>