<?php do_action('outside_header'); ?>

    <div class="page-title" data-aos="fade" style="background-image: url(<?php echo site_url('/wp-content/uploads/2024/07/events-banner.jpg');?>);">
      <div class="container position-relative">
        <h1>EVENTS</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?php echo site_url();?>">Home</a></li>
            <li class="current">Events</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="events" class="events section">
      <div class="container">
        <div class="row gy-4" id="search-events">
          <?php
            $search = '';
            if (isset($_REQUEST['_s'])) {
                $search = sanitize_text_field($_REQUEST['_s']);
            }
            $wp_query = new WP_Query(array(
                'post_type'       => 'events',
                'posts_per_page'  => 12,
                's' => $search
            ));
            while ($wp_query->have_posts()) : $wp_query->the_post();
            $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
            $description = get_the_content();
            $description = wp_trim_words( $description, 50, '...' ); ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card">
                                <img src="<?php echo $image; ?>" class="card-img-top" alt="Front Image">
                                <div class="card-body">
                                    <h5 class="card-title same-height-2"><?php the_title();?></h5>
                                    <div class="plus-div">
                                        <img class="plus-icon" src="<?php echo site_url('/wp-content/uploads/2024/07/plus.png');?>" alt="plus-icon" width="40">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text"><?php echo $description;?></p>
                                    <a class="btn btn-read-more" href="<?php the_permalink();?>">READ MORE</a>
                                    <div class="cross-div">
                                        <img class="cross-icon" src="<?php echo site_url('/wp-content/uploads/2024/07/cross.png');?>" alt="cross-icon" width="40">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </section>

<?php do_action('outside_footer'); ?>