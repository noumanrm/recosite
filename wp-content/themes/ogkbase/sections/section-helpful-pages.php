<section class="helpful-pages-section">
    <h2><?php the_sub_field('helpful_pages_heading'); ?></h2>
    <div class="helpful-pages-outerwrap">
        <?php
        if( have_rows('helpful_pages_wraper') ):
        while( have_rows('helpful_pages_wraper') ) : the_row();
        ?>
        <div class="helpful-pages-innerwrap">
            <div class="helpful-pages-img">
            <?php 
            $image = get_sub_field('helpful_pages_img');
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="helpful-pages-content">
                <a href="<?php the_sub_field('helpful_pages_btn_url'); ?>" class="pink-btn"><?php the_sub_field('helpful_pages_btn'); ?></a>
            </div>
        </div>
        <?php
        endwhile;
        endif;
        ?>
        
    </div>
</section>