<div class="social-sharing no-print">
	<?php
	$social_sites = ['twitter', 'facebook', 'pinterest'];
	$permalink = get_the_permalink($post->ID);
	$title = get_the_title($post->ID);
	$image_url = get_the_post_thumbnail_url($post->ID);
	?>
	<div class="social">
		<?php foreach($social_sites as $site):
			$add_this_url = "http://api.addthis.com/oexchange/0.8/forward/" . $site . "/offer?url=" . $permalink . "&title=" . urlencode( $title ) . "&screenshot=" . urlencode( $image_url );
			?>
			<a href="<?= $add_this_url ?>" target="_blank" class="social-link tippy"
			   title="Share me on <?= ucfirst( $site ) ?>"
			   onclick="window.open('<?= $add_this_url ?>', 'popup','width=800,height=800'); return false;">
				<i class="fa fa-<?= $site ?> fa-fw text-primary" aria-hidden="true"></i>
			</a>
		<?php endforeach; ?>
		<?php $email_link = "http://api.addthis.com/oexchange/0.8/forward/email/offer?url=" . $permalink . "&title=" . urlencode( $title ) . "&screenshot=" . urlencode( $image_url ); ?>
		<a href="<?= $email_link ?>" class="social-link tippy" target="_blank"
		   title="Share with a friend!"
		   onclick="window.open('<?= $email_link ?>', 'popup','width=800,height=800'); return false;">
            <i class="fa fa-envelope fa-fw text-primary"></i>
        </a>
	</div>
</div>