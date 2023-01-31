<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<section class="therapy-single-outerwrap">
<h1><?= get_the_title(); ?></h1>
<?= apply_filters('the_excerpt', $post->post_excerpt); ?>
</section>
<div class="therapy-single-bottom">

    <div class="therapy-images-outerwrap">
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                <img src="<?php echo $url; ?>" alt="">
                <?= apply_filters('the_content', $post->post_content); ?>
    </div>
    
</div>
<?php endwhile; ?>

<section class="single-group-therapy-section">
    <div class="group-therapy-innerwrap">
        <div class="group-therapy-content">
            <h2>Other group therapies we offer.</h2> 
        </div>
        <div class="group-therapy-btn">
            <a class="btn-blue" href="#">View All</a>
        </div>
    </div>
    <div class="group-therapy-slider">
        <div class="loop owl-carousel owl-theme owl-loaded owl-drag">
        <?php 
        $args = array(  
        'post_type' => 'grouptherapy',
        'post_status' => 'publish',
        'posts_per_page' => '-1', 
        'order' => 'ASC'
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts()  ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <div class="group-content-outerwrap">
                <div class="group-therapy-img">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                <img src="<?php echo $url; ?>" alt="">
                </div>
                <div class="group-therapy-content">
                    <h4><?php the_title(); ?></h4>
                </div>
            </div>
            <?php 
            wp_reset_postdata();
            endwhile; 
         endif; ?>

        </div>
    </div>

</section>

<!-- Reuseble Sections -->
<?php

if( have_rows('reusable_sections') ):

    while( have_rows('reusable_sections') ): the_row();

        ogk_get_reusable_sections();

    endwhile;
endif;
?>
<?php get_footer(); ?>