<?php
function junior_dev_child_enqueue_styles(){
    //child theme is loaded first
    wp_enqueue_style('child-styles', get_template_directory_uri());
    //parent theme is loaded next
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'junior_dev_child_enqueue_styles');
//  CPT
//registering a custome post type for Projects
function junior_dev_register_projects_cpt(){
    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'menu_name' => 'Projects',
        'all_items' => 'All Projects',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'new_item' => 'New Project',
        'view_item' => 'View Project',
        'search_items' => 'Search Projects',
        'not_found' => 'No Projects Found',
        'not_found_in_trash' => 'No Projects Found in Trash',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => array('slug' => 'projects'),
    );
    register_post_type('project', $args);
}
add_action('init', 'junior_dev_register_projects_cpt');
// Adding custom taxonomy for Project Type
function junior_dev_register_project_taxonomy(){
    $labels = array(
        'name' => 'Project Categories',
        'singular_name' => 'Project Category',
        'search_items' => 'Search Project Categories',
        'all_items' => 'All Project Categories',
        'edit_item' => 'Edit Project Category',
        'update_item' => 'Update Project Category',
        'add_new_item' => 'Add New Project Category',
        'new_item_name' => 'New Project Category Name',
        'menu_name' => 'Project Categories',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project-category'),
    );
    register_taxonomy('project_category', array('projects'), $args);
}
add_action('init', 'junior_dev_register_project_taxonomy');
