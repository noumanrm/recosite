<?php

global $post;
$parent_id    = ( $post->post_parent ) ? wp_get_post_parent_id( $post->ID ) : $post->ID;
$parent_title = get_the_title( $parent_id );
$parent_link  = esc_url( get_permalink( $parent_id ) );

$exclude = get_pages(array( 'child_of' => $parent_id ));

function flatten(array $array) {
	$return = array();
	array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
	return $return;
}

$exclude_ids =  flatten(array_map( function ( $page ) {
	return array_filter(array_map( function ( $child ) {
		return $child->ID;
	}, get_pages( array( 'child_of' => $page->ID ) ) ));
}, $exclude ));

$children  = get_pages( array( 'child_of' => $parent_id, 'sort_order' => 'desc' , 'exclude_tree' => $exclude_ids ) );

if ( is_page() && ( $post->post_parent || count( $children ) > 0 ) ) : ?>
	<menu class="sub-menu">
		<div class="container">
		<ul class="sub-menu-items">
			<li class="page-title"><a href="<?= $parent_link ?>" title="<?= $parent_title ?>"><?= $parent_title ?></a>
			</li>
			<?php foreach ( $children as $page ): ?>
				<li <?= ($page->ID == $post->ID)? 'class="current-menu-item"' : "";  ?>><a href="<?= esc_url( get_permalink( $page->ID ) ) ?>"
				       title="<?= $page->post_title ?>"><?= $page->post_title ?></a></li>
			<?php endforeach; ?>
		</ul>
		</div>
	</menu>
<?php endif; ?>