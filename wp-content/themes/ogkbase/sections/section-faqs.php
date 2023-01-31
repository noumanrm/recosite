<?php
$args = [
	"post_type"      => 'faq',
	"order_by"       => 'ID',
	"order"          => 'DESC'
];

$query = new WP_Query( $args );
$count = 0;

if ( $query->have_posts() ):
	?>
	<div class="dropdown-wrapper"">
		<?php while ( $query->have_posts() ): $query->the_post(); $count++;?>
			<div class="item">
				<div class="shown">
					    <?php if(get_field('question')): ?>
						   <?= get_field('question') ?>
						<?php endif;?>
					<div class='drop-down-toggle' data-target="#item-<?= $count ?>"><span></span><span></span></div>
				</div>
				<div class="hidden" id="item-<?= $count ?>" >
					<?php if(get_field('answer')): ?>
						<?= get_field('answer') ?>
					<?php endif;?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; wp_reset_query();  ?>