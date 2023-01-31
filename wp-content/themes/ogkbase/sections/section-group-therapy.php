<section class="group-therapy-section">
    <div class="group-therapy-innerwrap">
        <div class="group-therapy-content">
            <h2><?php the_sub_field('group_therapy_heading'); ?></h2>
            <?php the_sub_field('group_therapy_content'); ?>
        </div>
        <div class="group-therapy-btn">
            <a class="btn-blue"
                href="<?php the_sub_field('group_therapy_url'); ?>"><?php the_sub_field('group_therapy_btn'); ?></a>
        </div>
    </div>
    <div class="group-therapy-slider">
        <div class="loop owl-carousel owl-theme owl-loaded owl-drag">
            <?php
        if( have_rows('slider_logos') ):
           while( have_rows('slider_logos') ) : the_row();
            $slider_logo = get_sub_field('slider_logo'); 
            ?>
            <div class="group-content-outerwrap">
                <div class="group-therapy-img">
                    <img src="<?php echo esc_url($slider_logo['url']); ?>" alt="<?php echo esc_attr($slider_logo['alt']); ?>" />
                </div>
                <div class="group-therapy-content">
                    <h4><?php echo the_sub_field('logo_heading'); ?></h4>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</section>