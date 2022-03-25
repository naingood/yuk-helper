<?php
/**
 * Plugin Name:     Yuk Helper
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     yukhelper
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Yukhelper
 */

// Your code starts here.
// Register Custom Status
function yuk_register_status() {

	$args = array(
		'label'                     => _x( 'dibayar', 'Status General Name', 'yukdiorder' ),
		'label_count'               => _n_noop( 'dibayar (%s)',  'dibayar (%s)', 'yukdiorder' ), 
		'public'                    => true,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'exclude_from_search'       => false,
	);
	register_post_status( 'dibayar', $args );

}
add_action( 'init', 'yuk_register_status', 0 );