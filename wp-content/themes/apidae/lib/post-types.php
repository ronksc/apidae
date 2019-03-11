<?php

add_post_type_support('page', 'excerpt');

// Home slide
add_action('init', 'home_banner_register');
function home_banner_register() {
  $labels = array(
      'name' => _x('Mainpage slide', 'post type general name'),
      'singular_name' => _x('Mainpage slide', 'post type singular name'),
      'add_new' => _x('Add Mainpage slide', 'rep'),
      'add_new_item' => __('Add New Mainpage slide'),
      'edit_item' => __('Edit Mainpage slide'),
      'new_item' => __('New Mainpage slide'),
      'view_item' => __('View Mainpage slide'),
      'search_items' => __('Search Mainpage slide'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 8,
      'supports'      => array( 'title', 'editor', 'revisions')
  );
  register_post_type( 'mainpage slide' , $args );
}

// Testimonial
add_action('init', 'testimonial_register');
function testimonial_register() {
  $labels = array(
      'name' => _x('Testimonial', 'post type general name'),
      'singular_name' => _x('Testimonial', 'post type singular name'),
      'add_new' => _x('Add Testimonial', 'rep'),
      'add_new_item' => __('Add New Testimonial'),
      'edit_item' => __('Edit Testimonial'),
      'new_item' => __('New Testimonial'),
      'view_item' => __('View Testimonial'),
      'search_items' => __('Search Testimonial'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 8,
      'supports'      => array( 'title', 'editor', 'revisions')
  );
  register_post_type( 'testimonial' , $args );
}
?>