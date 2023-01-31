<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<div class="internal-banner-slider">
    <div class="owl-carousel owl-theme internal">
        <?php
            if( have_rows('slider_images') ):
            while( have_rows('slider_images') ) : the_row();
            $image = get_sub_field('slider_image');
        ?>
        <div class="item">
            <div class="internal-outerwrap">
                <div class="internal-img">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <?php 
            endwhile;
            endif;
        ?>

    </div>
    <?php
        if( have_rows('property_details') ):?>
    <div class="banner-inner-content">
        <ul>
            <?php
                while( have_rows('property_details') ) : the_row();
                $icon = get_sub_field('icon');
            ?>
            <li>
                <?php if($icon) { ?>
                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                <?php } ?>
                <h5><?php the_sub_field('property_details'); ?></h5>
            </li>
            <?php 
            endwhile;
           ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
<div class="internal-content-outerwrap">
<?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?>
    <?php the_content(); ?>
</div>
<?php  if( have_rows('availability_&_get_in_touch') ): ?>
<div class="internal-outerwrap">
    <div class="camping-trip-detail-innerwrap">
        <?php
            while( have_rows('availability_&_get_in_touch') ) : the_row();
            $logo_icon = get_sub_field('logo_icon');
        ?>
        <div class="camping-trip-detail-content-outerwrap">
            <div class="camping-trip-detail-heading">
                <div class="camping-trip-detail-content-img">
                    <img src="<?php echo esc_url($logo_icon['url']); ?>"
                        alt="<?php echo esc_attr($logo_icon['alt']); ?>" />
                </div>
                <h3><?php the_sub_field('heading'); ?></h3>
            </div>
            <div class="camping-trip-detail-content">
                <?php the_sub_field('description'); ?>
            </div>
        </div>
        <?php endwhile; ?>
       
    </div>
    <div class="internal-btn">
        <a href="<?php the_field('button_url'); ?>" class="btn-blue"><?php the_field('button_text'); ?></a>
    </div>
</div>
<?php endif; ?>
<?php if( have_rows('residence_amenities_list') ): ?>
<div class="siebold-outerwrap">
    <h2><?php the_field('residence_amenities_list_heading'); ?></h2>
    <ul>
        <?php
            while( have_rows('residence_amenities_list') ) : the_row();    
        ?>
        <li><?php the_sub_field('amenities_list'); ?></li>
        <?php endwhile; ?>

    </ul>
</div>
<?php endif; ?>
<?php if( has_term('female-residences','properties_category') ) { ?>
<div class="female-sober-outerwrap">
    <div class="female-sober-top">
        <h2>More Female Sober Living Residences</h2>
        <div class="female-sober-btn">
            <a href="<?php echo get_home_url(); ?>/our-properties/" class="btn-blue">View All Properties</a>
        </div>
    </div>
    <div class="owl-carousel owl-theme female-sober">
        <?php 
            $loop = new WP_Query(array(
                'post_type' => 'ourproperties',
                'taxonomy'   => 'properties_category',
                'order'   => 'ASC',
                'properties_category'  => 'female-residences',
                'posts_per_page' => -1
            ));
            while( $loop->have_posts() ) : $loop->the_post();
            ?>
        <div class="item">
            <div class="our-property-filters-outerwrap">
                <div class="our-property-filters-img">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                    <img src="<?php echo $url; ?>" alt="">
                </div>
                <div class="our-property-filters-content-wrap">
                    <h2><?php the_title(); ?></h2>
                    <div class="our-property-filters-content-btn">
                        <a href="<?php the_permalink(); ?>" class="pink-btn">View Property</a>
                    </div>
                </div>
            </div>
        </div>
        <?php   
            wp_reset_postdata(); 
            endwhile;
        ?>
    </div>
</div>
<?php } ?>
<div class="our-properties-outerwrap">
    <div class="our-properties-top">
        <h2>Our Properties</h2>
        <div class="our-properties-btn">
            <a href="<?php echo get_home_url(); ?>/our-properties/" class="btn-blue">View All Properties</a>
        </div>
    </div>
    <div class="our-properties-bottom">
        <ul>
            <li>
                <a href="<?php echo get_home_url(); ?>/ourproperties/reco-towers/">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-property-img1.svg" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo get_home_url(); ?>/ourproperties/reco-ranch/">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-property-img2.svg" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo get_home_url(); ?>/ourproperties/the-parker/">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-property-img3.svg" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo get_home_url(); ?>/ourproperties/the-hart/">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-property-img4.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>

<?php endwhile; ?>
<!-- Reuseble Sections -->
<?php

if( have_rows('reusable_sections') ):

    while( have_rows('reusable_sections') ): the_row();

        ogk_get_reusable_sections();

    endwhile;

endif;?>
<?php get_footer(); ?>