<?php
	function jk_theme_styles(){

    wp_enqueue_style( 'style_css', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');



}

add_action('wp_enqueue_scripts','jk_theme_styles');


add_action('wp_enqueue_scripts', 'my_method');
function my_method() {
    //sets it

// wp_register_script('gallery-metabox', get_stylesheet_directory_uri() . '/js/gallery-metabox.js',array('jquery'),true);

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


add_theme_support( 'post-thumbnails' );

// require_once 'gallery-metabox/gallery.php';
//
// $images = get_post_meta($post->ID, 'vdw_gallery_id', true);


function jk_excerpt_more( $more ) {
	return ' .....';
}
add_filter( 'excerpt_more', 'jk_excerpt_more' );

/* pagantatnion for blog archive page */

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   *
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }


  /**
   * We construct the pagination arguments to enter into our paginate_links
   * function.
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('Back'),
    'next_text'       => __('Next'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo $paginate_links;
    echo "</nav>";
  }

}




function custom_ppp( $query ) {
    if ( !is_admin() && $query->is_category() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
}
add_action( 'pre_get_posts', 'custom_ppp' );



?>
