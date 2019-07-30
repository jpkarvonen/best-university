<?php

function university_post_types() {
  //Event Post Type
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'has_archive' => true,
    'rewrite' => array('slug' => 'events'),
    'public' => true,
    'labels' => array (
      'name' => 'Events',
      'add_new_item' => "Add New Event",
      'edit_item' => "Edit Event",
      'all_items' => "All Events",
      'singular_name' => "Event"
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  //Program Post Type
  register_post_type('program', array(
    'supports' => array('title', 'editor'),
    'has_archive' => true,
    'rewrite' => array('slug' => 'programs'),
    'public' => true,
    'labels' => array (
      'name' => 'Programs',
      'add_new_item' => "Add New Program",
      'edit_item' => "Edit Program",
      'all_items' => "All Programs",
      'singular_name' => "Program"
    ),
    'menu_icon' => 'dashicons-awards'
  ));
}


add_action('init', 'university_post_types');

?>
