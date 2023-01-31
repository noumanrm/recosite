<section class="upcoming-alumni-events-section">
<?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?>
    <?php the_sub_field('event_top_content'); ?>
    <div class="upcoming-alumni-events-bottom-outerwrap">
    <?php $args = array(  
        'post_type' => 'alumnievents',
        'post_status' => 'publish',
        'posts_per_page' => 6,  
        'order' => 'DESC'
    );

    $loop = new WP_Query( $args );
    if ( $loop->have_posts()  ) :
    while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
        <div class="upcoming-alumni-events-bottom-innerwrap">
            <div class="upcoming-alumni-events-bottom-innerwrap-img">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                <img src="<?php echo $url; ?>" alt="">
            </div>
            <div class="upcoming-alumni-events-bottom-innerwrap-content">
                <h2><?php the_title(); ?></h2>
                <span><?php the_field('event_date_&_time'); ?></span>
                <p><?php the_field('event_address'); ?></p>
                <div class="upcoming-alumni-events-bottom-content-btn">
                    <a href="<?php the_permalink(); ?>" class="pink-btn">More Info</a>
                </div>
            </div>
        </div>
        <?php 
    wp_reset_postdata();
    endwhile; ?>
        <?php endif;
         ?>
    </div>
</section>