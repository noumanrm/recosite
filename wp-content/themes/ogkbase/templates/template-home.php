<?php
/* Template Name: Homepage */

get_header(); ?>

<section id="home" class="container fadeUp">
	<div class="content">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
<?php endwhile; endif;?>
		<?php get_template_part('includes/template','sections'); ?>
		
	</div>
</section>

<?php get_footer(); ?>