<?php 
/**
 * My Awesone Wordpress teme functions and definitions
 *
 * @link  https://developers.wordpress.org/themes/basic/theme-functions/
 *
 * @package  Wordpress
 * @subpackage shack
 * @since 1.0.0
 * @version 1.0.0
 */

////////////////////////////////////
// AGREGAR EL ACTIVE AL MENÚ DE NAVEGACIÓN
////////////////////////////////////
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2); function special_nav_class ($classes, $item) { if (in_array('current-menu-item', $classes) ){ $classes[] = 'active '; } return $classes; } 

////////////////////////////////////
// ACTIVAR EL MÉNU DE NAVEGACIÓN Y MENÚ DEL FOOTER
////////////////////////////////////
	register_nav_menus( array(
	'nav_menu' => 'Menu nav',
	'footer_menu' => 'Menu footer',
	) );

////////////////////////////////////
// ACTIVAR LA OPCIÓN IMAGEN DEL POST
////////////////////////////////////
add_theme_support( 'post-thumbnails' );

////////////////////////////////////
//Quitar el editor nuevo de wordpres
////////////////////////////////////
add_filter('use_block_editor_for_post', '__return_false');


////////////////////////////////////
// AGREGA GESTIÓN DE LOGO EN PERSONALIZAR
////////////////////////////////////
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true
));

////////////////////////////////////
//Font awesome 4.7
///////////////////////////////////
wp_register_style( 'Font_Awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
wp_enqueue_style('Font_Awesome');



////////////////////////////////////
// AGREGAR EL FRAMEWORK BOOTSTRAP 4.3.1
///////////////////////////////////
function themebs_enqueue_styles() {
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );

}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');


function themebs_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');


////////////////////////////////////
// SE AGREGA LA HOJA STYLE.CSS
////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles');

function custom_enqueue_styles() {
	wp_enqueue_style( 'custom-style', 
					  get_stylesheet_directory_uri() . '/style.css', 
					  array(), 
					  wp_get_theme()->get('Version')
					);
}
