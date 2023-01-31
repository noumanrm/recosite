<section class="trip-signup-section" style="background-color: <?php the_sub_field('bg_color'); ?>">
    <div class="signup-sec-outerwrap">
        <div class="signup-sec-img">
        <?php 
            $image = get_sub_field('trip_signup_img');
        ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <div class="signup-sec-content">
            <h2><?php the_sub_field('trip_signup_heading'); ?></h2>
            <?php the_sub_field('trip_signup_content'); ?>
            <div class="signup-sec-btn">
                <a href="<?php the_sub_field('trip_signup_btn_url'); ?>" class="btn-blue"><?php the_sub_field('trip_signup_btn'); ?></a>
            </div>
        </div>
    </div>
</section>