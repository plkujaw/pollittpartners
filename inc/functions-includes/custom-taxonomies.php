<?php
/**
 * Custom taxonomies for use with this theme
 *
 *
 */

// Register Project Category Taxonomy
function project_category()
{

  $labels = array(
    'name'                       => _x('Project Categories', 'Taxonomy General Name', 'project_category'),
    'singular_name'              => _x('Project Category', 'Taxonomy Singular Name', 'project_category'),
    'menu_name'                  => __('Categories', 'project_category'),
    'all_items'                  => __('All Project Categories', 'project_category'),
    'parent_item'                => __('Parent Project Category', 'project_category'),
    'parent_item_colon'          => __('Parent Project Category:', 'project_category'),
    'new_item_name'              => __('New Project Category Name', 'project_category'),
    'add_new_item'               => __('Add New Project Category', 'project_category'),
    'edit_item'                  => __('Edit Project Category', 'project_category'),
    'update_item'                => __('Update Project Category', 'project_category'),
    'view_item'                  => __('View Project Categories', 'project_category'),
    'separate_items_with_commas' => __('Separate Project Categories with commas', 'project_category'),
    'add_or_remove_items'        => __('Add or remove Project Categories', 'project_category'),
    'choose_from_most_used'      => __('Choose from the most used', 'project_category'),
    'popular_items'              => __('Popular Project Categories', 'project_category'),
    'search_items'               => __('Search Project Categories', 'project_category'),
    'not_found'                  => __('Not Found', 'project_category'),
    'no_terms'                   => __('No Project Categories', 'project_category'),
    'items_list'                 => __('Project Categories list', 'project_category'),
    'items_list_navigation'      => __('Project Categories list navigation', 'project_category'),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest' => true,
  );
  register_taxonomy('project_category', array('project'), $args);
}
add_action('init', 'project_category', 0);