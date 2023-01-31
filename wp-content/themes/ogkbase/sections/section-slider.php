
<?php $slider_type = get_sub_field('slider_type');  ?>
<?php if ( have_rows( 'slider_items' ) ): $count = 0; ?>
<?php if($slider_type == "split"): // Split (side by side slider) ?>
	<div class="slider-nav hidden-mobile">

			<?php while ( have_rows( 'slider_items' ) ): the_row(); ?>
				<div class="slide-nav-item">
					<a href="#" data-slide="<?= $count ?>">
						<img class="slider-nav-image"
						     src="<?= wp_get_attachment_image_url( get_sub_field( 'slide_nav' ) ) ?>"/>
						<?php if(get_sub_field('nav_title')): ?><p><?= get_sub_field('nav_title') ?></p><?php endif; ?>
					</a>
				</div>
				<?php $count ++; endwhile; ?>

	</div>
	<div class="owl-carousel" id="carousel-split">
		<?php while ( have_rows( 'slider_items' ) ): the_row(); ?>
		<?php $content = get_sub_field('text' , true); ?>
			<div class="item">
				<div class="wrapper">
				<?php if(get_sub_field('image')): ?>
				<div class="wrap">
					<img class="image"
					     src="<?php echo wp_get_attachment_image_url( get_sub_field( 'image' ), 'full' ); ?>"/>
				</div>
				<?php endif; ?>
				<div class="text">
					<?php if(get_sub_field('link')): ?>
					<a href="<?= get_sub_field( 'link' ) ?>"><?= $content ?></a>
					<?php else: ?>
						<?= $content ?>
					<?php endif; ?>
				</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
		<div class="owl-dots">
			<div class="owl-dot active"><span></span></div>
			<div class="owl-dot"><span></span></div>
			<div class="owl-dot"><span></span></div>
		</div>
	<?php else: ?>
		<div class="slider-nav hidden-mobile">
			<ul>
				<?php while ( have_rows( 'slider_items' ) ): the_row(); ?>
					<li class="slide-nav-item">
						<a href="#" data-slide="<?= $count ?>">
							<img class="slider-nav-image"
							     src="<?= wp_get_attachment_image_url( get_sub_field( 'slide_nav' ) ) ?>"/>
							<?php if(get_sub_field('nav_title')): ?><p><?= get_sub_field('nav_title') ?></p><?php endif; ?>
						</a>
					</li>
					<?php $count ++; endwhile; ?>
			</ul>
		</div>
		<div class="owl-carousel" id="carousel-<?= sanitize_title(get_the_title()) ?>">
			<?php while ( have_rows( 'slider_items' ) ): the_row(); ?>
				<div class="item">
					<div class="wrap">
						<img class="image"
						     src="<?php echo wp_get_attachment_image_url( get_sub_field( 'image' ), 'full' ); ?>"/>
					</div>
					<div class="text">
						<a href="<?= get_sub_field( 'link' ) ?>"><?= the_sub_field( 'text', true ) ?></a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
<?php endif; ?>
<?php endif; ?>





