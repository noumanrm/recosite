<section class="home-gallery-section">
    <div class="home-gallery-innerwrap">
        <?php 
        $image = get_sub_field('home_gallery_left_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="home-gallery-innerwrap">
        <?php 
        $image = get_sub_field('home_gallery_center_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="home-gallery-innerwrap">
        <?php 
        $image = get_sub_field('home_gallery_right_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
</section>