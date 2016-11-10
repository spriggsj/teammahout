<?php
	function jk_theme_styles(){

    wp_enqueue_style( 'style_css', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');



}

add_action('wp_enqueue_scripts','jk_theme_styles');


add_action('wp_enqueue_scripts', 'my_method');
function my_method() {
    //sets it
	wp_register_script('stellar-js', get_stylesheet_directory_uri() . '/js/stellar.min.js', array('jquery'), true);
	wp_enqueue_script('stellar-js');




	wp_register_script('custom-js', get_stylesheet_directory_uri() . '/scripts/custom.js',array('jquery'), true );
	// fires it
	wp_enqueue_script('custom-js'); //enqueue it

	wp_register_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('jasny-bootstrap-js', get_template_directory_uri() . '/js/jasny-bootstrap.min.js', array('jquery'), true );
	wp_enqueue_script('jasny-bootstrap-js');
}

register_nav_menus([
    'primary' =>__('Primary Menu')
]);

//enqueues our external font awesome stylesheet


/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap() {
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );

wp_enqueue_style('jasny-bootstrap-css', get_template_directory_uri() . '/css/jasny-bootstrap.min.css');

}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

?>
