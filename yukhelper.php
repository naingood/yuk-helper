<?php
/**
 * Plugin Name:     Yuk Helper
 * Plugin URI:      www.yukdiorder.com
 * Description:     Helper untuk development plugin wp
 * Author:          yukdiorder	
 * Author URI:      www.yukdiorder.com
 * Text Domain:     yukhelper
 * Domain Path:     /languages
 * Version:         0.9.0
 *
 * @package         Yukhelper
 */

// Your code starts here.
// Register Custom Status
require "vendor/autoload.php";

add_action('after_setup_theme' , function(){
	require "vendor/autoload.php";
	\Carbon_Fields\Carbon_Fields::boot();
	
});

use Carbon_Fields\Container ;
use Carbon_Fields\Field ;
use Yukdiorder\Helper\Table\Yuk_List_Post as Tabel ;
use Yukdiorder\Helper\Table\Yuk_List_Post_Kolom as Kolom  ;

add_action('carbon_fields_register_fields' , function(){
	
	Container::make('post_meta', 'Spesifikasi Gudang')
	->where('post_type','=','post')
	->set_context('advanced')
	->add_fields([
		Field::make('text' , 'gudang_kapasitas', 'Kapasitas'),
		Field::make( 'html', 'crb_information_text' )
    	->set_html('<h1>Tes</h1>')
		])		
		
		;
	});


add_action('admin_menu' , function(){
	add_menu_page('Coba', 'Coba', 'manage_options', 'coba', function(){
		
	}, '', 2 );
});

/**
 * Register meta box(es).
 */
function wpdocs_register_meta_boxes() {
    add_meta_box( 'meta-box-id', __( 'My Meta Box', 'textdomain' ), 'wpdocs_my_display_callback', 'post' );
}
add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes' );
 
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function wpdocs_my_display_callback( $post ) {
	$tabel = new Tabel('tabelku', array(
		'post_type' => 'page',
		'numberposts'	=> 3,
	));
	
	$tabel->display();
}
 
/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box( $post_id ) {
    // Save logic goes here. Don't forget to include nonce checks!
}
add_action( 'save_post', 'wpdocs_save_meta_box' );

add_filter('yuk_list_post_header_tabelku' , function($columns){
	$columns['post_title'] = 'Stok Masuk';
	$columns['post_content'] = 'Stok Keluar';
	$columns['post_date'] = 'Stok Akhir';
	return $columns ;
});