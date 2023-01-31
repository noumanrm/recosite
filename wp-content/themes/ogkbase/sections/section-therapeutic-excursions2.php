<section class="therapeutic-excursions2-section">
    <div class="therapeutic-excursions2-outerwrap">
        <?php $args = array(  
        'post_type' => 'therapeutic',
        'post_status' => 'publish',  
        'order' => 'ASC'
    );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts()  ) :
    while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
        <div class="therapeutic-excursions2-innerwrap">
            <div class="therapeutic-excursions2-content">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <div class="therapeutic-excursions2-btn">
                    <a href="<?php the_permalink(); ?>" class="pink-btn">Read More</a>
                </div>
            </div>
            <div class="therapeutic-excursions2-img">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                <img src="<?php echo $url; ?>" alt="">
            </div>
        </div>
        <?php 
        wp_reset_postdata();
        endwhile;
    endif;
     ?>
    </div>
</section>