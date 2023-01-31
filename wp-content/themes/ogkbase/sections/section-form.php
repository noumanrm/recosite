<?php
	gravity_form(
		get_sub_field('form_id'),
		get_sub_field('display_form_title'),
		get_sub_field('display_form_description'),
		false,
		null,
		get_sub_field('form_ajax'),
		get_sub_field('tab_index'));

