<section id="faq" class="faq section">

    <div class="container section-title" data-aos="fade-up">
        <h2><?php the_field('faq_title');?></h2>
        <p><?php the_field('faq_description');?></p>
    </div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                <div class="faq-container">
                <?php $i = 1;
                    if( have_rows('faqs') ):
                        while( have_rows('faqs') ) : the_row(); ?>
                        <div class="faq-item <?php echo ($i==1)?'faq-active':'';?>">
                            <h3><?php the_sub_field('question');?></h3>
                            <div class="faq-content">
                                <p><?php the_sub_field('answer');?></p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                <?php $i++; endwhile; endif;?>
                </div>

            </div>

        </div>

    </div>

</section>