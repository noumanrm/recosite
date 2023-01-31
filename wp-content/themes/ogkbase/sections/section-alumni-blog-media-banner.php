
<?php $bg_banner_image = get_sub_field('bg_banner_image'); ?>
<section class="alumni-blog-media-banner-section <?php the_sub_field('text_side_by_side'); ?>" style="background-color: <?php the_sub_field('bg_color'); ?>;<?php if($bg_banner_image){ ?>background-image: url(<?php echo $bg_banner_image;  ?>);  min-height:533px;<?php } ?>">
    <h1><?php the_sub_field('alumni_blog_media_banner_heading'); ?></h1>
    <?php the_sub_field('alumni_blog_media_banner_content'); ?>
</section>