<section class="addiction-treatment-section">
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
            <h2><?php the_title(); ?></h2>
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