<?php
if ( get_field( 'sections' ) && have_rows( 'sections' ) ): ?>
	<?php while ( have_rows( 'sections' ) ): the_row();
		$section_name = get_sub_field('section_name');
		$section_slug = sanitize_title($section_name); ?>
		<section id="<?= $section_slug ?>"
		         class="section <?= the_sub_field( 'section_layout_size' ) ?> bkg-<?= the_sub_field( 'section_background_color' ) ?> <?= the_sub_field('section_layout') ?> " <?php if(get_sub_field('section_background_image')): ?> style="background:url(<?= get_sub_field('section_background_image') ?>)no-repeat center;  background-size:cover;" <?php endif; ?>>
			<div class="container fadeUp">
				<?php if ( get_sub_field( 'items' ) ): ?>
					<?php while ( have_rows( 'items' ) ): the_row(); ?>
						<div class="items <?= the_sub_field( 'item_type' ) ?> <?= the_sub_field( 'item_size' ) ?> <?= the_sub_field( 'item_alignment' ) ?> <?= the_sub_field('item_layout') ?>">
							<?php
							$item_type = get_sub_field( 'item_type' );
							get_template_part( 'sections/section', $item_type );
							?>
						</div>
					<?php endwhile; ?>
				<?php endif; // End Items Loop ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; // End Main Sections Loop ?>

