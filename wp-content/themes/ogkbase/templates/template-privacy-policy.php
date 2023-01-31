<?php

// Template name: Privacy Policy

get_header();   ?>

<?php
/**
 *
 * Fields
 */

$acf_fields = [
	'data_collected',
	'when_do_we_collect_information',
	'how_do_we_use_information',
	'how_do_we_protect_information',
	'cookies','cookies_to',
	'third_party_disclosure',
	'third_party_links',
	'google',
	'handle_do_not_track_signals',
	'behavioral_tracking',
	'coppa',
	'fair_information_practices',
	'can_spam_act'
];
?>
	<div class="container">
		<h2><?= get_field('company_name', 'options') ?>'s Privacy Policy</h2>
		<?php foreach($acf_fields as $field): ?>
			<?php $section =  get_field_object($field,'options');  ?>
			<section id="<?= $section['key'] ?>">
				<h3><?= $section['label'] ?></h3>
				<p><?= $section['value']; ?></p>
			</section>
		<?php endforeach; ?>
	</div>
	<div class="container">
		<section id="company_info">
			<h3>Contacting <?= get_field('company_name','options') ?></h3>
			<p>If there are any questions regarding this privacy policy, you may contact us using the information below.</p>
			<p><?= get_site_url() ?></p>
			<p>
				<?= get_field('company_name','options') ?><br>
				<?= get_field('company_address','options') ?><br>
				<?= get_field('company_city','options') ?>,<?=  get_field('company_state','options') ?><?=  get_field('company_zip','options') ?><br>
				<?= get_field('company_country','options')?><br>
				<?= get_field('company_email','options') ?><br>
				<?= get_field('company_phone','options') ?><br>
			</p>
		</section>
	</div>

<?php get_footer(); ?>