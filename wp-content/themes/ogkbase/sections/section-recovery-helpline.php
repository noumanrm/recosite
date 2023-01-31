<section class="recovery-helpline-section" style="background-color: <?php the_sub_field('bg_color'); ?>">
    <div class="container">
        <div class="recovery-img">
            <?php 
    $image = get_sub_field('recovery_image');
    if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="recovery-content">
            <h2><?php the_sub_field('recovery_helpline_heading'); ?></h2>
            <a class="btn-blue"
                href="tel:<?php the_sub_field('contact_btn_text'); ?>"><?php the_sub_field('contact_btn_text'); ?></a>
        </div>
    </div>
</section>