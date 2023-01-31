<section class="group-therapy2-section">
    <div class="group-therapy2-list-outerwrap">
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
        <a href="<?php the_permalink(); ?>">
            <div class="group-therapy2-list-innerwrap">
                <div class="group-therapy2-list-icon">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                <img src="<?php echo $url; ?>" alt="">
                </div>
                <div class="group-therapy2-list-heading">
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
        </a>
        <?php 
        wp_reset_postdata();
        endwhile; ?>
            <?php endif; ?>

    </div>
</section>