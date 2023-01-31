<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>

<section class="blog-single-internal-page">
        <h1><?= get_the_title(); ?></h1>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                <img src="<?php echo $url; ?>" alt="">
        <div class="author-outerwrap">
            <div class="author-top">
            <?php
  $category = get_the_category();?>
                <span><?php echo $category[0]->cat_name; ?></span>
                <?php $post_date = get_the_date( 'F j, Y' ); ?>
                <span><?php  echo $post_date; ?></span>
            </div>
            <div class="author-bottom">
                <h6>Author: Ilana Jael</h6>
                <div class="social-icons">
                    <ul>
                        <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>"><img src="<?php bloginfo('template_url'); ?>/images/fb-pink.svg" alt="">share</a></li>
                        <li><a href="https://twitter.com/recoinstitute"><img src="<?php bloginfo('template_url'); ?>/images/twitter-pink.svg" alt="">tweet</a></li>
                        <li><a href="#">copy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?= apply_filters('the_content', $post->post_content); ?> 
        <div class="author-outerwrap">
            <div class="author-bottom">
                <div class="social-icons">
                    <ul>
                        <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>"><img src="<?php bloginfo('template_url'); ?>/images/fb-pink.svg" alt="">share</a></li>
                        <li><a href="https://twitter.com/recoinstitute"><img src="<?php bloginfo('template_url'); ?>/images/twitter-pink.svg" alt="">tweet</a></li>
                        <li><a href="#">copy</a></li>
                    </ul>
                </div>
            </div>
        </div>
</section>


<?php endwhile; ?>
<!-- Reuseble Sections -->
<?php

if( have_rows('reusable_sections') ):

    while( have_rows('reusable_sections') ): the_row();

        ogk_get_reusable_sections();

    endwhile;

endif;?>
<?php get_footer(); ?>
