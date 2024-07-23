<div class="page-title" data-aos="fade" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>);">
    <div class="container position-relative">
    <h1><?php the_title();?></h1>
    <nav class="breadcrumbs">
        <ol>
        <li><a href="<?php echo site_url();?>">Home</a></li>
        <li class="current"><?php the_title();?></li>
        </ol>
    </nav>
    </div>
</div>

<section id="faq" class="faq section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                <div class="faq-container">
                <?php
                    $i = 1;
                    $wp_query = new WP_Query(array(
                        'post_type'       => 'faq',
                        'posts_per_page'  => -1
                    ));
                    while ($wp_query->have_posts()) : $wp_query->the_post();?>
                        <div class="faq-item <?php echo ($i==1)?'faq-active':'';?>">
                            <h3><?php the_title();?></h3>
                            <div class="faq-content">
                                <p><?php the_content();?></p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                <?php $i++; endwhile; wp_reset_query();?>
                </div>

            </div>

        </div>

    </div>

</section>