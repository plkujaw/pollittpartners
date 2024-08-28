<?php

/**
 * Custom posts for use with this theme
 *
 *
 */

// Register Project Post Type

function project_post_type()
{

  $labels = array(
    'name'                  => _x('Projects', 'Post Type General Name', 'project'),
    'singular_name'         => _x('Project', 'Post Type Singular Name', 'project'),
    'menu_name'             => __('Projects', 'project'),
    'name_admin_bar'        => __('Project', 'project'),
    'archives'              => __('Project Archives', 'project'),
    'attributes'            => __('Project Attributes', 'project'),
    'parent_item_colon'     => __('Parent Project:', 'project'),
    'all_items'             => __('All Projects', 'project'),
    'add_new_item'          => __('Add New Project', 'project'),
    'add_new'               => __('Add New', 'project'),
    'new_item'              => __('New Project', 'project'),
    'edit_item'             => __('Edit Project', 'project'),
    'update_item'           => __('Update Project', 'project'),
    'view_item'             => __('View Project', 'project'),
    'view_items'            => __('View Projects', 'project'),
    'search_items'          => __('Search Project', 'project'),
    'not_found'             => __('Not found', 'project'),
    'not_found_in_trash'    => __('Not found in Trash', 'project'),
    'featured_image'        => __('Featured Image', 'project'),
    'set_featured_image'    => __('Set featured image', 'project'),
    'remove_featured_image' => __('Remove featured image', 'project'),
    'use_featured_image'    => __('Use as featured image', 'project'),
    'insert_into_item'      => __('Insert into Project', 'project'),
    'uploaded_to_this_item' => __('Uploaded to this Project', 'project'),
    'items_list'            => __('Projects list', 'project'),
    'items_list_navigation' => __('Projects list navigation', 'project'),
    'filter_items_list'     => __('Filter Projects list', 'project'),
  );
  $args = array(
    'label'                 => __('Project', 'project'),
    'description'           => __('Project', 'project'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-portfolio',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
    'rewrite'               => array(
      'slug' => 'work'
    )
  );
  register_post_type('project', $args);
}


// Register Person Post Type

function person_post_type()
{

  $labels = array(
    'name'                  => _x('People', 'Post Type General Name', 'person'),
    'singular_name'         => _x('Person', 'Post Type Singular Name', 'person'),
    'menu_name'             => __('People', 'person'),
    'name_admin_bar'        => __('People', 'person'),
    'archives'              => __('Person Archives', 'person'),
    'attributes'            => __('Person Attributes', 'person'),
    'parent_item_colon'     => __('Parent Person:', 'person'),
    'all_items'             => __('All People', 'person'),
    'add_new_item'          => __('Add New Person', 'person'),
    'add_new'               => __('Add New', 'person'),
    'new_item'              => __('New Person', 'person'),
    'edit_item'             => __('Edit Person', 'person'),
    'update_item'           => __('Update Person', 'person'),
    'view_item'             => __('View Person', 'person'),
    'view_items'            => __('View People', 'person'),
    'search_items'          => __('Search Person', 'person'),
    'not_found'             => __('Not found', 'person'),
    'not_found_in_trash'    => __('Not found in Trash', 'person'),
    'featured_image'        => __('Featured Image', 'person'),
    'set_featured_image'    => __('Set featured image', 'person'),
    'remove_featured_image' => __('Remove featured image', 'person'),
    'use_featured_image'    => __('Use as featured image', 'person'),
    'insert_into_item'      => __('Insert into Person', 'person'),
    'uploaded_to_this_item' => __('Uploaded to this Person', 'person'),
    'items_list'            => __('People list', 'person'),
    'items_list_navigation' => __('People list navigation', 'person'),
    'filter_items_list'     => __('Filter People list', 'person'),
  );
  $args = array(
    'label'                 => __('Person', 'person'),
    'description'           => __('Person', 'person'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-groups',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
    'rewrite'               => array(
      'slug' => 'people'
    )
  );
  register_post_type('person', $args);
}

// Register Job Post Type

function job_post_type()
{

  $labels = array(
    'name'                  => _x('Jobs', 'Post Type General Name', 'job'),
    'singular_name'         => _x('Job', 'Post Type Singular Name', 'job'),
    'menu_name'             => __('Jobs', 'job'),
    'name_admin_bar'        => __('Jobs', 'job'),
    'archives'              => __('Job Archives', 'job'),
    'attributes'            => __('Job Attributes', 'job'),
    'parent_item_colon'     => __('Parent Job:', 'job'),
    'all_items'             => __('All Jobs', 'job'),
    'add_new_item'          => __('Add New Job', 'job'),
    'add_new'               => __('Add New', 'job'),
    'new_item'              => __('New Job', 'job'),
    'edit_item'             => __('Edit Job', 'job'),
    'update_item'           => __('Update Job', 'job'),
    'view_item'             => __('View Job', 'job'),
    'view_items'            => __('View Jobs', 'job'),
    'search_items'          => __('Search Job', 'job'),
    'not_found'             => __('Not found', 'job'),
    'not_found_in_trash'    => __('Not found in Trash', 'job'),
    'featured_image'        => __('Featured Image', 'job'),
    'set_featured_image'    => __('Set featured image', 'job'),
    'remove_featured_image' => __('Remove featured image', 'job'),
    'use_featured_image'    => __('Use as featured image', 'job'),
    'insert_into_item'      => __('Insert into Job', 'job'),
    'uploaded_to_this_item' => __('Uploaded to this Job', 'job'),
    'items_list'            => __('Job list', 'job'),
    'items_list_navigation' => __('Job list navigation', 'job'),
    'filter_items_list'     => __('Filter Job list', 'job'),
  );
  $args = array(
    'label'                 => __('Job', 'job'),
    'description'           => __('Job', 'job'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 7,
    'menu_icon'             => 'dashicons-clipboard',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
    'rewrite'               => array(
      'slug' => 'jobs'
    )
  );
  register_post_type('job', $args);
}

add_action('init', 'project_post_type', 0);
add_action('init', 'person_post_type', 0);
add_action('init', 'job_post_type', 0);
