<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<!--  Single Banner  -->
<section class="addiction-treatment-single-outerwrap">
    <h1><?= get_the_title(); ?></h1>
    <?= apply_filters('the_content', $post->post_content); ?>
</section>
<!-- Bottom content -->
<div class="addiction-treatment-single-bottom">

    <div class="images-outerwrap">
        <?php 
    $image = get_field('right_image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php 
    $image = get_field('left_image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>

    <div class="addiction-treatment-single-content">
        <?php 
    // Check rows existexists.
    if( have_rows('bottom_content') ):
    
        // Loop through rows.
        while( have_rows('bottom_content') ) : the_row();
            $heading = get_sub_field('heading');
            $content = get_sub_field('content');
            ?>
        <div class="addiction-treatment-content-innerwrap">
            <h3><?php echo $heading; ?></h3>
            <?php echo $content; ?>
        </div>
        <?php
        endwhile;
    
    endif; ?>
    </div>
</div>
<?php endwhile; ?>

<!-- Learn about addiction treatment start -->
<section class="addiction-treatment-section-single">
    <div class="addiction-treatment-top">
        <h2>Learn about addiction treatment</h2>
        <div class="addiction-treatment-top-btn">
            <a href="/addiction-treatment" class="btn-blue">Learn More</a>
        </div>
    </div>
    <div class="addiction-treatment-outerwrap">
    <?php $args = array(  
        'post_type' => 'addictiontreatment',
        'post_status' => 'publish',
        'posts_per_page' => 6,  
        'order' => 'DESC'
    );

    $loop = new WP_Query( $args );
    if ( $loop->have_posts()  ) :
    while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>

        <div class="addiction-treatment-innerwrap">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <div class="addiction-treatment-btn">
                <a href="<?php the_permalink(); ?>" class="pink-btn">Read More</a>
            </div>
        </div>

        <?php 
        wp_reset_postdata();
        endwhile;
    endif;
     ?>
    </div>
</section>
<!-- Learn about addiction treatment end -->

<!-- Reuseble Sections -->
<?php

if( have_rows('reusable_sections') ):

    while( have_rows('reusable_sections') ): the_row();

        ogk_get_reusable_sections();

    endwhile;

endif;?>
<?php get_footer(); ?>