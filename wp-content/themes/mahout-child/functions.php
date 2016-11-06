<?php 
	function jk_theme_styles(){
    
    wp_enqueue_style( 'style_css', get_stylesheet_directory_uri() . '/style.css');
    

}

add_action('wp_enqueue_scripts','jk_theme_styles');


add_action('wp_enqueue_scripts', 'my_method');
function my_method() {
    //sets it
	 
	wp_register_script('custom-js', get_stylesheet_directory_uri() . '/scripts/custom.js', true );
	// fires it
	wp_enqueue_script('custom-js'); //enqueue it
}

register_nav_menus([
    'primary' =>__('Primary Menu')
]);

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap() {
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

?>