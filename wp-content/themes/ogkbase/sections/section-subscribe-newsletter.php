<section class="subscribe-newsletter-section" style="background-color: <?php the_sub_field('bg_color'); ?>">
   <div class="newsletter-img">
   <?php 
    $image = get_sub_field('subscribe_newsletter_image');
    if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
         <?php endif; ?>
   </div>
   <div class="newsletter-content">
      <h2><?php the_sub_field('subscribe_newsletter_heading'); ?></h2>
       <div class="newsletter-form">
           <?php the_sub_field('newsletter_form'); ?>
       </div>
   </div>
</section>