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
                'posts_per_page'  => 6,
                's' => $search
            ));
            
            $total = $wp_query->found_posts;
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

        <div id="loader">
            <img src="<?php echo site_url('/wp-content/uploads/2024/07/loader.gif');?>" width="200">
        </div>

        <?php $total_pages = ceil($total/6); ?>
        <div class="events-pagination">
            <?php for($i=1; $i<=$total_pages; $i++){ ?>
                <div class="page_num <?php echo ($i==1)?'active':'';?>" data-number="<?php echo $i;?>"><?php echo $i;?></div>
            <?php } ?>
        </div>
        <div class="events-loadmore">
            <?php if($total_pages>1){ ?>
                <button class="load-more-btn" data-number="<?php echo $i;?>">LOAD MORE</button>
            <?php } ?>
        </div>

      </div>
    </section>

    <script>
        jQuery(document).ready(function(){
            $('.load-more-btn').click(function(){
                var $activePage = $('.page_num.active');
                var $nextPage = $activePage.next('.page_num');
                if ($nextPage.length) {
                    $nextPage.click();
                }
                if (!$nextPage.next('.page_num').length) {
                    $('.load-more-btn').hide();
                }
            });

            $('.page_num').click(function(e){
                e.preventDefault();
                $("#search-events").html('');
                $('#loader').show();
                $('.page_num').removeClass('active');
                $(this).addClass('active');

                var page = $(this).attr("data-number");
                var str = '&page=' + page + '&action=load_events';

                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: '<?php echo admin_url( "admin-ajax.php" );?>',
                    data: str, 
                    success: function(data){
                        $('#loader').hide();
                        $("#search-events").html( data ).show('slow');

                        $('.load-more-btn').click(function(){
                            var $activePage = $('.page_num.active');
                            var $nextPage = $activePage.next('.page_num');
                            if ($nextPage.length) {
                                $nextPage.click();
                            }
                            if (!$nextPage.next('.page_num').length) {
                                $('.load-more-btn').hide();
                            }
                        });
                    },
                    error : function(jqXHR, textStatus, errorThrown) {
                        $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                    }

                });
            });
        });
    </script>

<?php do_action('outside_footer'); ?>