<?php


  $args = [
	"post_type"      => 'testimonials',
	"order_by"       => 'ID',
	"order"          => 'DESC',
	"posts_per_page" => 2 
];

$query = new WP_Query( $args );

?>
	<?php if ( $query->have_posts() ): ?>
		<div class="owl-carousel testimonials-slider" id="testimonials-slider">
			<?php while ( $query->have_posts() ): $query->the_post(); ?>
				<div class="item">
					<div class="text">
						<?= get_the_content() ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; wp_reset_query(); ?>

