<?php
if ( have_rows( 'boxes' ) ): ?>
	<div class="boxes">
		<?php while ( have_rows( 'boxes' ) ): the_row(); ?>
			<div class="box">
				<?php $link = get_sub_field( 'box_link' ); ?>
				<a href="<?= $link['url'] ?>" title="<?= $link['title'] ?>" target="<?= $link['target'] ?>">
					<?php if ( get_sub_field( 'icon' ) ): ?>

					<?php echo file_get_contents( get_sub_field( 'icon' ) ); ?>

					<?php endif; ?>
					<p><strong><?= get_sub_field( 'box_heading' ) ?></strong></p>
					<p><?= get_sub_field( 'text' ) ?></p>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>