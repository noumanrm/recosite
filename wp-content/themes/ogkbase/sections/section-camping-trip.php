<section class="camping-trip-section">
    <div class="camping-trip-outerwrap">
        <h3><?php the_sub_field('camping_trip_heading'); ?></h3>
        <?php the_sub_field('camping_trip_content'); ?>
        <ul>
            <?php
            if( have_rows('camping_trip_lists') ):
            while( have_rows('camping_trip_lists') ) : the_row();
            ?>
            <li><a href="<?php the_sub_field('trip_list_link'); ?>"><?php the_sub_field('trip_list'); ?></a></li>
            <?php 
               endwhile; 
                endif;
            ?>
        </ul>
        <div class="fire-img">
            <?php 
        $image = get_sub_field('camping_trip_image');
        ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    </div>
</section>