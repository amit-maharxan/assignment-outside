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

<section id="contact" class="contact section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

        <div class="col-lg-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p><?php the_field('address', 'option');?></p>
        </div>
        </div>

        <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p><a href="tel:<?php the_field('phone', 'option');?>">+ <?php the_field('phone', 'option');?></a></p>
        </div>
        </div>

        <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p><a href="mailto:<?php the_field('email', 'option');?>"><?php the_field('email', 'option');?></a></p>
        </div>
        </div>

    </div>

    <div class="row gy-4 mt-1">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Kathmandu+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>
        </div>

        <div class="col-lg-6">
            <?php echo do_shortcode('[contact-form-7 id="d2b29f4" title="Contact form"]');?>
        </div>

    </div>

    </div>

</section>