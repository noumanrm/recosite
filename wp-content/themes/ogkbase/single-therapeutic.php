<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<section class="therapeutic-single-outerwrap">
<h1><?= get_the_title(); ?></h1>
</section>

<div class="content-bottom-outerwrap">
<div class="therapeutic-single-img">
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'full' ); ?>
    <img src="<?php echo $url; ?>" alt="">
</div> 
<div class="therapeutic-single-content">
    <?= apply_filters('the_content', $post->post_content); ?>
</div>
</div>  
<?php endwhile; ?>
 <!-- Slider start -->
 <section class="therapeutic-excursions-single">
    <div class="therapeutic-excursions-single-top">
        <div class="therapeutic-excursions-content-top">
            <h2>Therapeutic Excursions</h2>
            <p>RECO believes that progress occurs through different experiences specifically designed to propel clients beyond their comfort zones.</p>
        </div>
        <div class="therapeutic-excursions-btn">
            <a class="btn-blue" href="#">View All</a>
        </div>
    </div>
    <div class="therapeutic-excursions-outerwrap">
        <div class="owl-carousel owl-theme therapeutic-slider">
        <?php 
        $args = array(  
        'post_type' => 'therapeutic',
        'post_status' => 'publish',  
        'order' => 'ASC'
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts()  ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <div class="item">
                <div class="therapeutic-excursions-innerwrap">
                    <div class="therapeutic-excursions-img">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                <img src="<?php echo $url; ?>" alt="">
                    </div>
                    <div class="therapeutic-excursions-content">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
            </div>
            <?php 
        wp_reset_postdata();
        endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section> 
 <!-- Slider end -->
<!-- Reuseble Sections -->
<?php

if( have_rows('reusable_sections') ):

    while( have_rows('reusable_sections') ): the_row();

        ogk_get_reusable_sections();

    endwhile;

endif;?>
<?php get_footer(); ?>