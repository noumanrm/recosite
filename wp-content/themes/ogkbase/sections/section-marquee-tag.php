<section class="marquee-tag-section">
    <div class="marquee-img">        
        <?php 
        $marquee_tag_img = get_sub_field('marquee_tag_img');
        if( !empty( $marquee_tag_img ) ): ?>
        <img src="<?php echo esc_url($marquee_tag_img['url']); ?>" alt="<?php echo esc_attr($marquee_tag_img['alt']); ?>" />
        <?php endif; ?>
    </div>
    <marquee style="text-decoration:none" scrollamount="6"><?php the_sub_field('marquee_tag'); ?>
    </marquee>
</section>