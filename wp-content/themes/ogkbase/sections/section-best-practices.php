<section class="best-practices-section" style="background-color: <?php the_sub_field('section_bg_color'); ?>">
    <div class="best-practices-innerwrap">
        <div class="best-practices-content">
            <h2><?php the_sub_field('best_practices_heading'); ?></h2>
            <?php the_sub_field('best_practices_content'); ?>
        </div>
        <div class="best-practices-btn">
            <a class="btn-blue"
                href="<?php the_sub_field('best_practices_url'); ?>"><?php the_sub_field('best_practices_btn'); ?>
            </a>
        </div>
    </div>
    <div class="best-practices-slider">
        <div class="owl-carousel">
            <?php
        if( have_rows('slider_logos') ):
            while( have_rows('slider_logos') ) : the_row();
            $slider_logo = get_sub_field('slider_logo'); 
            ?>
            <div>
                <div class="best-practices-img">
                <img src="<?php echo esc_url($slider_logo['url']); ?>" alt="<?php echo esc_attr($slider_logo['alt']); ?>" />
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</section>