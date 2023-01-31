<section class="therapeutic-excursions-section">
    <h2><?php the_sub_field('therapeutic_excursions_heading'); ?></h2>
    <?php the_sub_field('therapeutic_excursions_content'); ?>
    <div class="therapeutic-excursions-outerwrap">
        <div class="owl-carousel owl-theme therapeutic-slider">
            <?php
        if( have_rows('therapeutic_excursions_slider') ):
            while( have_rows('therapeutic_excursions_slider') ) : the_row();
            $slider_image = get_sub_field('slider_image');
            $slider_text = get_sub_field('slider_text'); 
            ?>
            <div class="item">
                <div class="therapeutic-excursions-innerwrap">
                    <div class="therapeutic-excursions-img">
                        <img src="<?php echo esc_url($slider_image['url']); ?>"
                            alt="<?php echo esc_attr($slider_image['alt']); ?>" />
                    </div>
                    <div class="therapeutic-excursions-content">
                        <h3><?php echo $slider_text; ?></h3>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
    <div class="therapeutic-excursions-btn">
        <a class="btn-blue"
            href="<?php the_sub_field('adventure_therapy_btn_url'); ?>"><?php the_sub_field('adventure_therapy_btn');  ?></a>
        <a class="btn-blue"
            href="<?php the_sub_field('alumni_events_btn_url'); ?>"><?php the_sub_field('alumni_events_btn');  ?></a>

    </div>
</section>