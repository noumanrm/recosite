<section class="posts-showcase-section">
    <div class="illustrations-img">
        <?php $illustrations_image = get_sub_field('illustrations_image'); ?>
        <img src="<?php echo esc_url($illustrations_image['url']); ?>"
            alt="<?php echo esc_attr($illustrations_image['alt']); ?>" />
    </div>
    <?php
        if( have_rows('posts_showcase_repeater') ):
            while( have_rows('posts_showcase_repeater') ) : the_row();
            $posts_showcase_image = get_sub_field('posts_showcase_image'); 
            ?>
    <div class="posts-showcase-outerwrap">
        <div class="posts-showcase-innerwrap">
            <h2><?php the_sub_field('posts_showcase_heading'); ?></h2>
            <?php the_sub_field('posts_showcase_content'); ?>
            <div class="posts-showcase-btn">
                <a href="<?php the_sub_field('posts_showcase_url'); ?>"
                    class="pink-btn"><?php the_sub_field('posts_showcase_btn'); ?></a>
            </div>
            <?php if( have_rows('posts_categories') ): ?>
            <ul>
                <?php 
                 while( have_rows('posts_categories') ) : the_row(); 
                ?>
                <li>
                    <a
                        href="<?php the_sub_field('posts_category_url'); ?>"><?php the_sub_field('posts_category'); ?></a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="posts-showcase-img">
            <img src="<?php echo esc_url($posts_showcase_image['url']); ?>"
                alt="<?php echo esc_attr($posts_showcase_image['alt']); ?>" />
        </div>
    </div>
    <?php 
    endwhile;
endif;
    ?>
</section>