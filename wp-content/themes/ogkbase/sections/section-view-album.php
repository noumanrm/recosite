<section class="view-album-section">
    <div class="view-album-outerwrap">
        <?php
            if( have_rows('view_album_content') ):
            while( have_rows('view_album_content') ) : the_row();
        ?>
        <div class="view-album-innerwrap">
            <div class="view-album-img">
                <?php 
            $image = get_sub_field('view_album_img');
            ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="view-album-content">
                <span><?php the_sub_field('view_album_year'); ?></span>
                <div class="view-album-btn">
                    <a href="<?php the_sub_field('view_album_btn_url'); ?>"
                        class="pink-btn"><?php the_sub_field('view_album_btn'); ?></a>
                </div>
            </div>
        </div>
        <?php 
            endwhile;
            endif;
        ?>

    </div>
</section>