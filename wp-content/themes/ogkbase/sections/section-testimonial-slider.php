<section class="testimonial-slider-section">
    <div class="container">
        <div class="owl-carousel owl-theme testimonil-slider">
        <?php  
        if( have_rows('client_testimonials') ):
            while( have_rows('client_testimonials') ) : the_row();
            ?>
            <div>
                <div class="testimonial-slider-innerwrap">
                    <h3><?php the_sub_field('testimonials_heading'); ?></h3>
                     <?php the_sub_field('client_testimonial'); ?>
                    <span><?php the_sub_field('client_name'); ?></span>
                    <div class="testimonial-slider-btn">
                        <a class="btn-blue" href="<?php the_sub_field('testimonial_btn_url'); ?>"><?php the_sub_field('testimonial_btn'); ?></a>
                    </div>
                    <div class="testimonial-btn1">

                    </div>
                    <div class="testimonial-img1">
                        <img src="<?php bloginfo('template_url') ;?>/images/cloud-sun.svg" alt="">
                    </div>
                    <div class="testimonial-img2">
                        <img src="<?php bloginfo('template_url') ;?>/images/clouds.svg" alt="">
                    </div>
                </div>
            </div>
            <?php 
            endwhile;
        endif;
             ?> 
        </div>
    </div>
</section>

