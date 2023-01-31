<?php
/**
 * Created for OGK Creative.
 * Project: ogk-wordpress-base
 * Developer: Colin Michaels
 * Date: 2019-02-18
 * Time: 10:36
 */

if ( $posts->have_posts() ): ?>
	<?php while ( $posts->have_posts() ): $posts->the_post(); ?>
		<?php foreach ( ( get_the_category( $post->ID ) ) as $category ):
			$cat_name = $category->cat_name . ' '; endforeach; ?>
		<div class="post">
			<div class="post-tag <?= sanitize_title( $cat_name ) ?>">
				<?= $cat_name; ?>
			</div>
			<div class="post-content">
				<h6 class="black"><?= get_the_title(); ?></h6>
				<h5><?= get_field( 'post_headline' ) ?></h5>
				<?php
				$wrapped = wordwrap( get_the_content(), 200 );
				$lines   = explode( "\n", $wrapped );
				$new_str = $lines[0] . '...'; ?>
				<p><?= $new_str ?></p>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>