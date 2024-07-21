<section id="search" class="search section">

    <div class="container section-title" data-aos="fade-up">
        <form name="search-form" class="form__search">
            <input type="text" name="_s" placeholder="Search Events" class="search-field">
        </form>
    </div>

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
            $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card">
                                <img src="<?php echo $image; ?>" class="card-img-top" alt="Front Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title();?></h5>
                                    <img class="plus-icon" src="<?php echo site_url('/wp-content/uploads/2024/07/plus.png');?>" alt="plus-icon" width="40">
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text"><?php the_content();?></p>
                                    <a href="<?php the_permalink();?>">READ MORE</a>
                                    <img class="cross-icon" src="<?php echo site_url('/wp-content/uploads/2024/07/cross.png');?>" alt="cross-icon" width="40">
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

<script>
    jQuery(document).ready(function(){
        $('.form__search').submit(function(e){
            e.preventDefault();
            $("#search-events").html('');
            load_posts();    
        });

        function load_posts(){

            var string = $('.search-field').val();
            var str = '&string=' + string + '&action=search_events';

            $.ajax({
                type: "POST",
                dataType: "html",
                url: '<?php echo admin_url( "admin-ajax.php" );?>',
                data: str, 
                success: function(data){
                    $('#loader').hide('1000');
                    $("#search-events").append( data ).show('slow');
                },
                error : function(jqXHR, textStatus, errorThrown) {
                    $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }

            });
        }
    });
</script>