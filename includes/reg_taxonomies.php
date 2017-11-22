<?php
function create_project_type() {
//create project type
  $labels = array(
    'name'                       => _x( 'Project types', 'Taxonomy General Name', 'portfolio-theme' ),
    'singular_name'              => _x( 'Project type', 'Taxonomy Singular Name', 'portfolio-theme' ),
    'menu_name'                  => __( 'Project types', 'portfolio-theme' ),
    'all_items'                  => __( 'All types', 'portfolio-theme' ),
    'new_item_name'              => __( 'New Type Name', 'portfolio-theme' ),
    'add_new_item'               => __( 'Add New Project Type', 'portfolio-theme' ),
    'edit_item'                  => __( 'Edit Project Type', 'portfolio-theme' ),
    'update_item'                => __( 'Update Project Type', 'portfolio-theme' ),
    'add_or_remove_items'        => __( 'Add or remove Project Types', 'portfolio-theme' ),
    'popular_items'              => __( 'Popular Types', 'portfolio-theme' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-type',
  );
  register_taxonomy( 'project_type', array('project'), $args );

//create project skill
  $labels = array(
    'name'                       => _x( 'Project skills', 'Taxonomy General Name', 'portfolio-theme' ),
    'singular_name'              => _x( 'Project skill', 'Taxonomy Singular Name', 'portfolio-theme' ),
    'menu_name'                  => __( 'Project skills', 'portfolio-theme' ),
    'all_items'                  => __( 'All skills', 'portfolio-theme' ),
    'new_item_name'              => __( 'New Skill Name', 'portfolio-theme' ),
    'add_new_item'               => __( 'Add New Project skill', 'portfolio-theme' ),
    'edit_item'                  => __( 'Edit Project Skill', 'portfolio-theme' ),
    'update_item'                => __( 'Update Project Skill', 'portfolio-theme' ),
    'add_or_remove_items'        => __( 'Add or remove Project skills', 'portfolio-theme' ),
    'popular_items'              => __( 'Popular skills', 'portfolio-theme' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-skill',
  );
  register_taxonomy( 'project_skill', array('project'), $args );
}


add_action( 'init', 'create_project_type' );

 ?>
