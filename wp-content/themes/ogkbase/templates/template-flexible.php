<?php
/* Template Name: Flexible Content */
get_header(); ?>



<?php

// Check value exists.
if( have_rows('flexible_rows') ):

    // Loop through rows.
    while ( have_rows('flexible_rows') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'intro_section' ):

        get_template_part("sections/section", "intro");

        elseif( get_row_layout() == 'banner_section' ):
            $banner_img = get_sub_field('banner_image'); ?>

            <section class="banner-section" style="background: url(<?= $banner_img ?>) no-repeat center / cover;">
            </section>

            <?php elseif( get_row_layout() == 'blog_section' ): ?>

            <section class="blog-section">
                <div class="container">

                    <?php
                    $args = [
                        'post_type' => 'post',
                        'posts_per_page' => -1
                    ];

                    $posts = new WP_Query($args);

                    if($posts->have_posts()): while ($posts->have_posts()): $posts->the_post(); ?>

                        <div class="post">
                            <?= get_the_title() ?>
                        </div>

                    <?php endwhile; wp_reset_postdata(); endif; ?>

                </div>
            </section>


        <?php endif;

        // End loop.
    endwhile;
endif; ?>



<?php get_footer();
