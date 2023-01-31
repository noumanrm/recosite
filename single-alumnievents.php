<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<div class="single-alumnievents-outerwrap">
<?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?>
    <h2><?php the_title(); ?></h2>
    <p>Stay connected with the RECO Alumni community through fun exciting events. Check back often to see what’s new. </p>
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                    <img src="<?php echo $url; ?>" alt="">
    <div class="single-date-location-outerwrap">
        <div class="single-date-location-innerwrap">
            <div class="single-date-location-heading">
                <img src="<?php bloginfo("template_url"); ?>/images/calender.png" alt="">
                <h4>Date and Time</h4>
            </div>
            <span><?php the_field('event_date_&_time'); ?></span>
            <a href="#" class="pink-btn">Add to Calendar</a>
        </div>
        <div class="single-date-location-innerwrap">
            <div class="single-date-location-heading">
            <img src="<?php bloginfo("template_url"); ?>/images/location.png" alt="">
                <h4>Location</h4>
            </div>
            <p><?php the_field('event_address'); ?></p>
            <a href="#" class="pink-btn">View Map</a>
        </div>
    </div>
    <?= apply_filters('the_content', $post->post_content); ?>
</div>
<div class="reserve-spot-outerwrap">
    <h3>Sign Up to Reserve Your Spot</h3>
    <!-- FORM START -->
    <?php echo do_shortcode('[gravityform id="9" title="false"]'); ?>
    <!-- FORM END -->
</div>

<?php endwhile; ?>
<!-- Reuseble Sections -->
<?php

if( have_rows('reusable_sections') ):

    while( have_rows('reusable_sections') ): the_row();

        ogk_get_reusable_sections();

    endwhile;

endif;?>

<?php get_footer(); ?>