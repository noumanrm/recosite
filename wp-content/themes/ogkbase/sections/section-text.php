<?php
	$text_type = get_sub_field( 'text_type' );
	$has_image = get_sub_field( 'has_image' );
	$add_image = wp_get_attachment_image_url( get_sub_field( 'additional_image' ) ,'full');
	$add_image_mobile = wp_get_attachment_image_url( get_sub_field( 'additional_image_mobile' ) ,'full');
	$btns_type = get_sub_field('buttons_type');
	$btn_align = get_sub_field('buttons_align');

	$btn_align = (is_array($btn_align))? $btn_align[0] : $btn_align;

	if ( $has_image ): ?>
		<?php if(get_sub_field( 'additional_image_mobile' )) : ?>
			<div class="lazyload-wrap hidden-tablet">
				<img src="<?= $add_image ?>" alt="<?=  get_sub_field( 'section_name' ) ?>"/>
			</div>
			<div class="lazyload-wrap visible-tablet">
				<img src="<?= $add_image_mobile ?>" alt="<?=  get_sub_field( 'section_name' ) ?>"/>
			</div>
		<?php else: ?>
			<div class="lazyload-wrap">
				<img src="<?= $add_image ?>" alt="<?=  get_sub_field( 'section_name' ) ?>"/>
			</div>
		<?php endif; ?>
	<?php endif;

	if ( $text_type == 'paragraph' ): ?>
		<?= the_sub_field( 'text_content', false ) ?>

	<?php else: ?>
		<?php if ( have_rows( 'list_items' ) ): ?>
			<ul>
				<?php while ( have_rows( 'list_items' ) ): the_row();
					$link        = get_sub_field( 'link' );
					$hover_color = get_sub_field( 'text_hover_color' );
					?>
					<li><a href="<?= $link['url'] ?>"
					       title="<?= ( isset( $link['title'] ) ) ? $link['title'] : the_sub_field( 'text', false ) ?>"
					       target="<?= $link['target'] ?>"
					       onMouseOver="this.style.color='<?= $hover_color ?>'"
					       onmouseleave="this.style.color='initial'"><?= the_sub_field( 'text', false ) ?></a></li>
				<?php endwhile; ?>
			</ul>
		<?php endif; endif; ?>

	<?php if ( have_rows( 'buttons' ) ): ?>
	<?php if($btns_type == "stacked"): ?>
	<?php		$num_btns = 0;
			while(have_rows('buttons')): the_row();
				$num_btns++;
			endwhile;
			?>
		<div class="btns btns-wrap <?= $btn_align ?>">
			<?php while ( have_rows( 'buttons' ) ): the_row();
				$btn_link  = get_sub_field( 'link' );
				$btn_title = get_sub_field( 'text' );
				$btn_type  = get_sub_field( 'type' );
				?>
			<a class="btn-wrap <?= ($num_btns <= 2) ? "full" : "half" ?>" href="<?= $btn_link['url'] ?>" target="<?= $btn_link['target'] ?>"  title="<?= $btn_title ?>">

					<div <?= ( $btn_type == "video" ) ? 'data-lity' : "" ?> class="btn-<?= $btn_type ?>"><?= $btn_title ?></div>
					<div class="arrow"></div>
			</a>
			<?php
			endwhile; ?>
		</div>
	<?php else: //buttons default ?>
		<div class="btns <?= $btn_align ?> ">
			<?php while ( have_rows( 'buttons' ) ): the_row();
				$btn_link  = get_sub_field( 'link' );
				$btn_title = get_sub_field( 'text' );
				$btn_type  = get_sub_field( 'type' );
				?>
				<a href="<?= $btn_link['url'] ?>" <?= ( $btn_type == "video" ) ? 'data-lity' : "" ?>
				   <?= (strlen($btn_link['target']) > 1) ? 'target="'.$btn_link['target'].'"' : "" ?>title="<?= $btn_title ?>"
				   class="btn-<?= $btn_type ?>"><?= $btn_title ?></a>
			<?php
			endwhile; ?>
		</div>
		<?php endif; ?>
	<?php endif; ?>

