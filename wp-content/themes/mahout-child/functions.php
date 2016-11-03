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

?>