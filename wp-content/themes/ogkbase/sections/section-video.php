<?php
$placeholder = get_sub_field( 'video_placeholder' );
?>
 		<!-- background video-->
				<div class="background-video lazyload-wrap">

					<video loop muted <?php if(get_sub_field('video_autoplay')): ?>autoplay<?php endif; ?>
					       poster="<?php echo wp_get_attachment_image_url( $placeholder , 'full' ); ?>">
						<source src="<?= the_sub_field( 'video_url' ); ?>">
					</video>

					<!--image fallback for mobile-->
					<div class="lazyload-wrap visible-mobile">
						<?php echo wp_get_attachment_image($placeholder, 'full' ); ?>
					</div>
				</div><!--/background-video-->