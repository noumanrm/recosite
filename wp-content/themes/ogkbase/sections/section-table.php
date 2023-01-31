<?php if ( get_sub_field( 'text_content' ) ): ?>
	<?= the_sub_field( 'text_content', false ) ?>
<?php endif; ?>
<?php $table = get_sub_field( 'table_items' );
if ( $table ): ?>
	<div class="table_wrap">
	<table border="0">
	<?php
	while ( have_rows( 'table_items' ) ): the_row();
		$columns = get_sub_field( 'columns' );
		if ( $columns ) : ?>
			<thead>
			<tr>
				<?php while ( have_rows( 'columns' ) ): the_row(); ?>
					<th><?= get_sub_field( 'column' ) ?></th>
				<?php endwhile; ?>
			</tr>
			</thead>
			<tbody>
			<?php
			$the_rows = [];
			$column   = 0;
			while ( have_rows( 'columns' ) ): the_row();
				$column ++;
				$row = 0; ?>
				<?php while ( have_rows( 'rows' ) ): the_row();
					$row ++;
					$the_rows[ $row ][ $column ] = get_sub_field( 'row' );
				endwhile; ?>
			<?php endwhile;
			?>
			<?php foreach ( $the_rows as $rows ): ?>
				<tr>
					<?php foreach ( $rows as $row ): ?>
						<td><?= $row ?></td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
		<?php endif; ?>
		</table>
		</div>
	<?php
	endwhile;
endif;
