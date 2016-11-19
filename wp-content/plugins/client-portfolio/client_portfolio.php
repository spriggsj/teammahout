<?php
/*
*Plugin Name: Client Portfolio
*Plugin URI: teammahout.com
*Description: A Plugin that will display a the works we did for clients.
*Version: 1.0
*Author: James Kinler
*/



//adding custom post type

add_action('init', 'jk_client_portfolio');

function jk_client_portfolio(){
  register_post_type('client_portfolio', [
    'labels' => [
      'name' => 'Client Portfolios',
      'singular_name' => 'Client Portfolio',
      'add_new_item' => 'Add A New Client Portfolio',
      'add_new'  => 'Add A New Client Portfolio',
      'edit_item' => 'Edit Client Portfolio',
      'new_item' => 'New Client Portfolio',
      'view_item' => 'View Client Portfolio',
      'search_item' => 'Search Client Portfolio',
      'not_found' => 'No Client Portfolio Found',
      'featured_image' => 'Featured Image',
      'not_found_in_trash' => 'No Client Portfolio Found In The Trash',
      'parent_item_colon' => 'Parent Listings'
    ],
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-images-alt2',
    'publicly_queryable' => true,
    'query_var' => true,
    'supports' => [
      'title', 'editor', 'thumbnail', 'category', 'tags'
    ],
    'taxonomies' => ['client_portfolio_category', 'post_tag'],
  ]);
}


// this adds a custom taxonomy/category to my custom post type

add_action('init', 'jk_client_portfolio_taxonomy', 0);

function jk_client_portfolio_taxonomy(){
  $labels = [
    'name' => 'Client Portfolio Categories',
    'singular_name' => 'Client Portfolio Category',
    'search_items' => 'Search Client Portfolio Categories',
    'all_items' => 'All Categories',
    'parent_item_colon' => 'Parent Client Portfolio Categories',
    'edit_item' => 'Edit Client Portfolio Category',
    'update_item' => 'Update Client Portfolio Category',
    'add_new_item' => 'Add New Client Portfolio Category',
    'new_item_name' => 'New Name Client Portfolio Category',
    'menu_name' => 'Categories',
  ];

  $args = [
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ];

  register_taxonomy('client_portfolio_category', 'client_portfolio', $args);
}

// this adds a gallery to my custom post type
require_once 'gallery-metabox/gallery.php';



$images = get_post_meta($client_portfolio->ID, 'vdw_gallery_id', true);




add_filter('template_include', 'include_template_function',1);

function include_template_function($template_path){
  if(get_post_type() == 'client_portfolio'){
    if (is_single()){
      if($theme_file = locate_template(['client_portfolio_page.php'])){
        $template_path = $theme_file;
      }else {
        $template_path = plugin_dir_path(__FILE__) . '/client_portfolio_page.php';
      }
    }
  }
  return $template_path; // Return Template Path
}


add_filter('template_include', 'include_archive_template_function',1);

function include_archive_template_function($template_path){
  if(get_post_type() == 'client_portfolio'){
    if (is_archive()){
      if($theme_file = locate_template(['archive-client_portfolio.php'])){
        $template_path = $theme_file;
      }else {
        $template_path = plugin_dir_path(__FILE__) . '/archive-client_portfolio.php';
      }
    }
  }
  return $template_path; // Return Template Path
}


?>
