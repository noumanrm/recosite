<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<section class="team-bio-section">
<?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?>
    <div class="team-bio-outerwrap">
        <h1>More about me</h1>
        <span>Executive Team</span>
        <div class="team-bio-innerwrap">
            <div class="team-bio-img">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'full' ); ?>
                <img src="<?php echo $url; ?>" alt="">
            </div>
            <div class="team-bio-content">
                <h2><?php the_title(); ?></h2>
                <span><?php the_field('designation'); ?></span>
            </div>
        </div>
        <?php the_content(); ?>
        <div class="back-btn">
            <a href="<?php echo get_home_url(); ?>/our-team" class="pink-btn back">Back to Our Team</a>
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