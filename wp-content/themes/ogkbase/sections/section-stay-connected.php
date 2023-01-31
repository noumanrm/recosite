<section class="stay-connected-section">
    <h2><?php the_sub_field('stay_connected_heading'); ?></h2>
    <div class="stay-connected-outerwrap">
        <?php
    if( have_rows('stay_connected_wraper') ):
    while( have_rows('stay_connected_wraper') ) : the_row();
    ?>
    <a href="<?php the_sub_field('stay_connected_url'); ?>" target="_blank">
        <div class="stay-connected-innerwrap"
            style="background-color: <?php the_sub_field('stay_connected_bg_color'); ?>">
            <div class="stay-connected-img">
                <?php 
            $image = get_sub_field('stay_connected_img');
            ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="stay-connected-content">
                <span><?php the_sub_field('stay_connected_heading'); ?></span>
            </div>
        </div>
        </a>

        <?php 
        endwhile;
        endif;
        ?>

    </div>
</section>