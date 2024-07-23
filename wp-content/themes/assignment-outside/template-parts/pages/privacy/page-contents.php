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

<section id="privacy" class="privacy section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                <?php the_content();?>

            </div>

        </div>

    </div>

</section>