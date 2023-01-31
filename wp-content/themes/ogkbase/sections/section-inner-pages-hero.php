
<?php $page_title = $wp_query->post->post_title; ?>
<section class="inner-pages-hero-section <?php echo $page_title; ?>" style="background-image: url(<?php the_sub_field('inner_pages_hero_bg_image'); ?>);">
<?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?>
    <div class="banner-video">
        <video autoplay playsinline muted loop class="hero-video-bkg">
            <source src="<?php the_sub_field('inner_pages_hero_bg') ?>">
        </video>
    </div>
    
    <div class="banner-content">
        <h1 class="tc-wht"><?php the_sub_field('inner_pages_hero_title') ?></h1>
        <?php the_sub_field('inner_pages_hero_content_1'); ?>
        <?php $para2 = get_sub_field('inner_pages_hero_content_2'); 
       if ($para2) :
       ?>
       <div class="banner-content2">
        <?php echo $para2; ?> 
       </div>
       <?php endif; ?>
    </div>
</section>
