<?php do_action('outside_header');

global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request)); ?>

    <div class="page-title" data-aos="fade" style="background-image: url(<?php echo site_url('/wp-content/uploads/2024/07/events-banner.jpg');?>);">
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
                <?php $event_date = get_field('event_date');
                $event_time = get_field('event_time');
                $venue = get_field('venue');
                $speaker = get_field('speaker');
                if($event_date){ ?>
                <p class="event-date"><i class="fa-regular fa-calendar"></i><?php echo $event_date;?></p>
                <?php } if($event_time){ ?>
                <p class="event-time"><i class="fa-regular fa-clock"></i><?php echo $event_time;?></p>
                <?php } if($venue){ ?>
                <p class="event-venue"><i class="fa-solid fa-map-pin"></i><?php echo $venue;?></p>
                <?php } if($speaker){ ?>
                <p class="event-speaker"><i class="fa-regular fa-user"></i><?php echo $speaker;?></p>
                <?php } ?>
              </div>  

              <div class="event-description">
                <?php the_content();?>
              </div>
              
              <div class="social">
                <span class="share_text">Share: </span>
                <a href="http://x.com/share?url=<?php echo $current_url;?>"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url;?>"><i class="bi bi-facebook"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url;?>"><i class="bi bi-instagram"></i></a>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section>

<?php do_action('outside_footer'); ?>