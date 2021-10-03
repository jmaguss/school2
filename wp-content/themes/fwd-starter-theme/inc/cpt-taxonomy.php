<?php
function fwd_register_custom_post_types() {


//students cpt

  $labels = array(
      'name'               => _x( 'Students', 'post type general name' ),
      'singular_name'      => _x( 'Students', 'post type singular name'),
      'menu_name'          => _x( 'Students', 'admin menu' ),
      'name_admin_bar'     => _x( 'Students', 'add new on admin bar' ),
      'add_new'            => _x( 'Add New', 'student' ),
      'add_new_item'       => __( 'Add New Students' ),
      'new_item'           => __( 'New Students' ),
      'edit_item'          => __( 'Edit Students' ),
      'view_item'          => __( 'View Students' ),
      'all_items'          => __( 'All Students' ),
      'search_items'       => __( 'Search Students' ),
      'parent_item_colon'  => __( 'Parent Students:' ),
      'not_found'          => __( 'No students found.' ),
      'not_found_in_trash' => __( 'No students found in Trash.' ),
      'archives'           => __( 'Students Archives'),
      'insert_into_item'   => __( 'Insert into student'),
      'uploaded_to_this_item' => __( 'Uploaded to this student'),
      'filter_item_list'   => __( 'Filter students list'),
      'items_list_navigation' => __( 'Students list navigation'),
      'items_list'         => __( 'Students list'),
      'featured_image'     => __( 'Students featured image'),
      'set_featured_image' => __( 'Set student featured image'),
      'remove_featured_image' => __( 'Remove student featured image'),
      'use_featured_image' => __( 'Use as featured image'),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'show_in_nav_menus'  => true,
      'show_in_admin_bar'  => true,
      'show_in_rest'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'students' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 5,
      'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
      'supports'           => array( 'title', 'thumbnail', 'editor' ),
  );
  register_post_type( 'fwd-student', $args );




//staff cpt

  $labels = array(
    'name'               => _x( 'Staff', 'post type general name' ),
    'singular_name'      => _x( 'Staff', 'post type singular name'),
    'menu_name'          => _x( 'Staff', 'admin menu' ),
    'name_admin_bar'     => _x( 'Staff', 'add new on admin bar' ),
    'add_new'            => _x( 'Add New', 'staff' ),
    'add_new_item'       => __( 'Add New Staff' ),
    'new_item'           => __( 'New Staff' ),
    'edit_item'          => __( 'Edit Staff' ),
    'view_item'          => __( 'View Staff' ),
    'all_items'          => __( 'All Staff' ),
    'search_items'       => __( 'Search Staff' ),
    'parent_item_colon'  => __( 'Parent Staff:' ),
    'not_found'          => __( 'No staff found.' ),
    'not_found_in_trash' => __( 'No staff found in Trash.' ),
    'archives'           => __( 'Staff Archives'),
    'insert_into_item'   => __( 'Insert into staff'),
    'uploaded_to_this_item' => __( 'Uploaded to this staff'),
    'filter_item_list'   => __( 'Filter staff list'),
    'items_list_navigation' => __( 'Staff list navigation'),
    'items_list'         => __( 'Staff list'),
    'featured_image'     => __( 'Staff featured image'),
    'set_featured_image' => __( 'Set staff featured image'),
    'remove_featured_image' => __( 'Remove staff featured image'),
    'use_featured_image' => __( 'Use as featured image'),
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_nav_menus'  => true,
    'show_in_admin_bar'  => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'staff' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
    'supports'           => array( 'title' ),
);
register_post_type( 'fwd-staff', $args );



//
    



}

add_action( 'init', 'fwd_register_custom_post_types' );



//taxonomies
function fwd_register_taxonomies() {

  // Add Work Student taxonomy
  $labels = array(
      'name'              => _x( 'Student Categories', 'taxonomy general name' ),
      'singular_name'     => _x( 'Student Category', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Student Categories' ),
      'all_items'         => __( 'All Student Category' ),
      'parent_item'       => __( 'Parent Student Category' ),
      'parent_item_colon' => __( 'Parent Student Category:' ),
      'edit_item'         => __( 'Edit Student Category' ),
      'view_item'         => __( 'View Student Category' ),
      'update_item'       => __( 'Update Student Category' ),
      'add_new_item'      => __( 'Add New Student Category' ),
      'new_item_name'     => __( 'New Student Category Name' ),
      'menu_name'         => __( 'Student Category' ),
  );
  $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_in_menu'      => true,
      'show_in_nav_menu'  => true,
      'show_in_rest'      => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array( 'slug' => 'student-categories' ),
  );
  register_taxonomy( 'fwd-student-category', array( 'fwd-student' ), $args );



  //staff taxonomy 
    // Add Staff Category taxonomy
  $labels = array(
      'name'              => _x( 'Staff Categories', 'taxonomy general name' ),
      'singular_name'     => _x( 'Staff Category', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Staff Categories' ),
      'all_items'         => __( 'All Staff Category' ),
      'parent_item'       => __( 'Parent Staff Category' ),
      'parent_item_colon' => __( 'Parent Staff Category:' ),
      'edit_item'         => __( 'Edit Staff Category' ),
      'view_item'         => __( 'View Staff Category' ),
      'update_item'       => __( 'Update Staff Category' ),
      'add_new_item'      => __( 'Add New Staff Category' ),
      'new_item_name'     => __( 'New Staff Category Name' ),
      'menu_name'         => __( 'Staff Category' ),
  );
  $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_in_menu'      => true,
      'show_in_nav_menu'  => true,
      'show_in_rest'      => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array( 'slug' => 'staff-categories' ),
  );
  register_taxonomy( 'fwd-staff-category', array( 'fwd-staff' ), $args );
}
add_action( 'init', 'fwd_register_taxonomies');

function fwd_rewrite_flush() {
  fwd_register_custom_post_types();
  fwd_register_taxonomies();
  flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fwd_rewrite_flush' );


