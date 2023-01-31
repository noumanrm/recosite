<section class="camping-trip-detail-section">
    <div class="camping-trip-detail-img-outerwrap">
        <?php
        if( have_rows('trip_main_images') ):
        while( have_rows('trip_main_images') ) : the_row();
        ?>
        <div class="camping-trip-detail-img-innerwrap">
            <?php 
        $image = get_sub_field('trip_main_image');
        ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php 
        endwhile;
        endif;
        ?>
    </div>
    <div class="camping-trip-detail-outerwrap">
        <h2><?php the_sub_field('trip_main_heading'); ?></h2>
        <div class="camping-trip-detail-innerwrap">
            <?php
        if( have_rows('trip_detail') ):
        while( have_rows('trip_detail') ) : the_row();
        ?>
            <div class="camping-trip-detail-content-outerwrap">
                <div class="camping-trip-detail-heading">
                    <div class="camping-trip-detail-content-img">
                        <?php 
                        $image = get_sub_field('trip_detail_img');
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <h3><?php the_sub_field('trip_detail_heading'); ?></h3>
                </div>
                <div class="camping-trip-detail-content">
                    <span><?php the_sub_field('trip_detail_content'); ?></span>
                    <?php if( get_sub_field('trip_detail_btn') ): ?>
                    <div class="camping-trip-detail-btn">
                        <a href="<?php the_sub_field('trip_detail_btn_url'); ?>"
                            class="pink-btn"><?php the_sub_field('trip_detail_btn'); ?></a>
                    </div>
                    <?php 
                    endif;
                ?>
                </div>
            </div>
            <?php 
        endwhile;
        endif;
        ?>

        </div>

    </div>
</section>