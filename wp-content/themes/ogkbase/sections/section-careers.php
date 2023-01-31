<?php
$args = [
	"post_type" => 'career',
	"order_by"  => 'ID',
	"order"     => 'DESC'
];

$query = new WP_Query( $args );
$count = 0;

if ( $query->have_posts() ):
	?>
	<div class="dropdown-wrapper">
		<?php while ( $query->have_posts() ): $query->the_post();
			$count ++; ?>
			<div class="item">
				<div class="shown">
					<strong><?= get_the_title() ?></strong>
					<div class='drop-down-toggle' data-target="#item-<?= $count ?>"><span></span><span></span></div>
				</div>
				<div class="hidden" id="item-<?= $count ?>">
					<?php if ( get_field( 'description' ) ): ?>
						<?= get_field( 'description' ) ?>
					<?php endif; ?>
					<?php if ( have_rows( 'attributes' ) ): ?>
						<?php while ( have_rows( 'attributes' ) ): the_row(); ?>
							<div class="attributes">
								<h2><?= get_sub_field( 'attributes_heading' ) ?></h2>
								<?php if ( have_rows( 'list_items' ) ): ?>
									<ul>
										<?php while ( have_rows( 'list_items' ) ): the_row(); ?>
											<li>
												<?= get_sub_field( 'item' ) ?>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<a class="btn left" href="<?= get_the_permalink() ?>" title="Apply Now">APPLY NOW</a>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif;
wp_reset_query(); ?>