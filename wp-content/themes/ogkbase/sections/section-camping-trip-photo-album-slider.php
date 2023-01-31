<section class="camping-trip-photo-album-slider-section">
    <div class="owl-carousel owl-theme camping-trip-photo">
    <?php
      if( have_rows('camping_trip_photo_album_slider_repeater') ):
          while( have_rows('camping_trip_photo_album_slider_repeater') ) : the_row(); ?>
        <div class="item">
            <div class="camping-trip-photo-album-innerwrap">
                <div class="camping-trip-photo-album-slider-img">
                    <img src="<?php the_sub_field('camping_trip_photo_album_slider_img'); ?>" alt="">
                </div>
                <span><?php the_sub_field('camping_trip_photo_album_slider_caption'); ?></span>
            </div>
        </div>
        <?php 
          endwhile;
        endif;
          ?>
    </div>
</section>