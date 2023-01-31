<?php
$image_size = (get_sub_field('image_size'))? get_sub_field('image_size') : 'full' ;
$image_type = get_sub_field('image_type');
$image = wp_get_attachment_image( get_sub_field( 'image' ), $image_size );
$image_url =  wp_get_attachment_image_url(get_sub_field('image'));
?>
<div class="lazyload-wrap <?= $image_type ?>">
<?php if($image_type == "jpeg" || $image_type  == "gif" || $image_type == "svg-normal") {

	echo $image;

}elseif($image_type == 'svg' || $image_type == 'img-bkg'){ ?>
	   <div class="svg-img" style="background-image:url(<?= $image_url ?>)"></div>
 <?php }elseif($image_type ='img-bkg'){ ?>
	<div class="bkg-img" style="background-image:url(<?= $image_url ?>)"></div>
<?php } ?>
</div>
	