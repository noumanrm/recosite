<?php

/**
 * ALL Non Specific Theme based functions include here
 * if not user /wp-content/plugins/a-custom-functions/a-custom-functions.php file
 **/


// Developer Theme options
// Woocommerce options can be commented out if not required
// To use these inside functions, add "global $theme_setup;"
$theme_setup = array(

    // set some variables to use instead of calling the same function heaps of times (more efficient)
    'template_directory' => get_template_directory(),
    'template_directory_uri' => get_template_directory_uri(),

    // to get an option use ogk_get_get_acf_option($name, $optional_default_value);
    // this is for client options (not development options)
    'add_acf_options_page' => true,

    //// Disable WP Core features, styles, scripts and header links
    'remove_admin_bar' => true, // for non-admins
    'disable_dash_icon_styles' => true, // if not logged in
    'disable_admin_bar_styles' => true, // if not logged in
    'disable_emoji' => true,
    'disable_block_library' => true, // Gutenberg's block styles
    'disable_rest_api' => true,
    'disable_rsd_link' => true,
    'disable_live_writer_link' => true,
    'disable_shortlinks' => true,
    'disable_wp_generator' => true,
    'disable_jquery_migrate' => true,

);




/** =========================================================================================== **/

require_once($theme_setup['template_directory'] . '/assets/php/ogk-base-functions.php');
require_once($theme_setup['template_directory'] . '/assets/php/ogk-enqueue.php');

/** =========================================================================================== **/
