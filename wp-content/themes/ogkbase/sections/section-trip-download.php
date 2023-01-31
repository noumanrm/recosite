<section class="trip-download-section">
    <div class="trip-download-outerwrap">
        <h2><?php the_sub_field('trip_download_main_heading'); ?></h2>
        <div class="trip-download-innerwrap">
            <?php   
        if( have_rows('trip_download_contents') ):
            while( have_rows('trip_download_contents') ) : the_row();
            ?>
            <div class="trip-download-content-outerwrap">
                <div class="trip-download-img">
                    <?php 
                $image = get_sub_field('trip_download_image');
                ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <div class="trip-download-content">
                    <h3><?php the_sub_field('trip_download_heading'); ?></h3>
                    <?php the_sub_field('trip_download_content'); ?>
                    <div class="trip-download-btn">
                        <a href="<?php the_sub_field('trip_download_url'); ?>"
                            class="pink-btn"><?php the_sub_field('trip_download_btn'); ?></a>
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