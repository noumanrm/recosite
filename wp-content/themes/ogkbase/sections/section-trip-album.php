<section class="trip-album-section">
    <div class="featured-alumni-section">
        <h2><?php the_sub_field('trip_album_heading'); ?></h2>
        <div class="alumni-bestblog-innerwrap">
            <div class="alumni-bestblog-img">
            <?php 
            $image = get_sub_field('video_thumbnail_img');
            ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="alumni-bestblog-content">
                <h2><?php the_sub_field('trip_album_sub_heading'); ?></h2>
                <?php the_sub_field('trip_album_sub_content'); ?>
                <div class="trip-album-btn">
                    <a href="<?php the_sub_field('trip_album_btn_url'); ?>" class="pink-btn"><?php the_sub_field('trip_album_btn'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>