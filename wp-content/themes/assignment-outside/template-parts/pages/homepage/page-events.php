<section id="hotels" class="hotels section">

    <div class="container section-title" data-aos="fade-up">
        <h2><?php echo get_field('featured_title');?></h2>
    </div>

    <div class="container">

    <div class="row gy-4 slider-mobile">
        <?php
        $featured_posts = get_field('featured_events');
        if( $featured_posts ):
        foreach( $featured_posts as $featured_post ): 
            $permalink = get_permalink( $featured_post );
            $title = get_the_title( $featured_post );
            $image = wp_get_attachment_url( get_post_thumbnail_id($featured_post), 'thumbnail' );
            setup_postdata( $featured_post );
            $description = get_the_content( $featured_post );
            $description = wp_trim_words( $description, 50, '...' );
        ?>
        <div class="col-lg-6 col-md-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card">
                            <img src="<?php echo $image; ?>" class="card-img-top" alt="Front Image">
                            <div class="card-body">
                                <h5 class="card-title same-height-1"><?php echo $title;?></h5>
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
                                <a class="btn btn-read-more" href="<?php echo $permalink;?>">READ MORE</a>
                                <div class="cross-div">
                                <img class="cross-icon" src="<?php echo site_url('/wp-content/uploads/2024/07/cross.png');?>" alt="cross-icon" width="40">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
        <?php endforeach; endif; ?>
    </div>

    <div class="download-text">
        <a href="<?php echo get_field('featured_download_file');?>" download><?php echo get_field('featured_download_text');?> <i class="fa-solid fa-download"></i></a>
    </div>
    </div>

</section>