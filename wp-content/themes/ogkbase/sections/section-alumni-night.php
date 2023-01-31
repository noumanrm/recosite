<section class="alumni-night-section">
    <div class="alumni-meeting-left-outerwrap">
        <?php  
        if( have_rows('alumni_schedule') ):
            while( have_rows('alumni_schedule') ) : the_row();
            ?>
        <div class="alumni-meeting-innerwrap">
            <div class="alumni-meeting-heading-wraper">
                <div class="alumni-meeting-img">
                    <?php 
                $logo = get_sub_field('alumni_schedule_logo');
                ?>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />

                </div>
                <div class="alumni-meeting-heading">
                    <h5><?php the_sub_field('alumni_schedule_heading'); ?></h5>
                </div>
            </div>
            <span><?php the_sub_field('alumni_schedule_content'); ?></span>
            <a href="<?php the_sub_field('alumni_schedule_text_url'); ?>"
                class="pink-btn"><?php the_sub_field('alumni_schedule_btn'); ?></a>
        </div>
        <?php endwhile;
        endif; ?>

    </div>
    <div class="alumni-meeting-right-content">
        <h2><?php the_sub_field('alumni_night_right_heading'); ?></h2>
        <?php the_sub_field('alumni_night_right_content'); ?>

        <div class="alumni-meeting-right-refreshment">
            <div class="alumni-meeting-right-refreshment-img">
                <img src="<?php the_sub_field('alumni_night_right_refreshment_img'); ?>" alt="">
            </div>
            <div class="alumni-meeting-right-refreshment-content">
                <p><?php the_sub_field('alumni_night_right_refreshment_content'); ?></p>
            </div>
        </div>
        <div class="alumni-meeting-right-content-btn">
            <a href="<?php the_sub_field('alumni_night_right_btn_url'); ?>"
                class="btn-blue"><?php the_sub_field('view_events_right_btn'); ?></a>
        </div>
    </div>
</section>