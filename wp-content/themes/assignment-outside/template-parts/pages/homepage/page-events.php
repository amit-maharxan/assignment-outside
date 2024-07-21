<style>
    .flip-card {
        perspective: 1000px;
        height: 60vh;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #f8f9fa;
        color: #000;
    }

    .flip-card-back {
        color: #000;
        transform: rotateY(180deg);
    }

    .card-img-top {
        max-height: 300px;
        object-fit: cover;
    }

    section#search {
        background-color: #90c490;
    }
</style>

<section id="hotels" class="hotels section">

    <div class="container section-title" data-aos="fade-up">
        <h2><?php echo get_field('featured_title');?></h2>
    </div>

    <div class="container">

    <div class="row gy-4">
        <?php
        $featured_posts = get_field('featured_events');
        if( $featured_posts ):
        foreach( $featured_posts as $featured_post ): 
            $permalink = get_permalink( $featured_post );
            $title = get_the_title( $featured_post );
            $description = get_the_content( $featured_post );
            $image = wp_get_attachment_url( get_post_thumbnail_id($featured_post), 'thumbnail' );
            setup_postdata( $featured_post );
        ?>
        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card">
                            <img src="<?php echo $image; ?>" class="card-img-top" alt="Front Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title;?></h5>
                                <img class="plus-icon" src="<?php echo site_url('/wp-content/uploads/2024/07/plus.png');?>" alt="plus-icon" width="40">
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><?php the_content();?></p>
                                <a href="<?php echo $permalink;?>">READ MORE</a>
                                <img class="cross-icon" src="<?php echo site_url('/wp-content/uploads/2024/07/cross.png');?>" alt="cross-icon" width="40">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; endif; ?>
    </div>

    </div>

</section>