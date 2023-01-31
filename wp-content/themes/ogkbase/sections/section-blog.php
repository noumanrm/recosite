<?php
$args = [
	"post_type"      => 'post',
	"order_by"       => 'ID',
	"order"          => 'DESC',
	"posts_per_page" => 2
];

$query = new WP_Query( $args );

if ( $query->have_posts() ):
	?>
	<div class="blog-listings">
		<?php while ( $query->have_posts() ): $query->the_post(); ?>
			<div class="blog-item">
				<a href="<?= get_the_permalink() ?>"  title="<?= get_the_title()?>" >
				<?= get_featured_image( get_the_ID(), get_the_title(), 'blog-post', false ) ?>
				<h2><?= get_the_date('m.d.y') ?> | <?= ogk_get_category( $post, 'category' ) ?></h2>
				<h4><?= get_the_title() ?></h4>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; wp_reset_query();  ?>