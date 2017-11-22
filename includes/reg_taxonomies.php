<?php
function create_project_type() {
//create project type
  $labels = array(
    'name'                       => _x( 'Project types', 'Taxonomy General Name', 'EAcademy' ),
    'singular_name'              => _x( 'Project type', 'Taxonomy Singular Name', 'EAcademy' ),
    'menu_name'                  => __( 'Project types', 'EAcademy' ),
    'all_items'                  => __( 'All types', 'EAcademy' ),
    'new_item_name'              => __( 'New Type Name', 'portfolio-theme' ),
    'add_new_item'               => __( 'Add New Project Type', 'EAcademy' ),
    'edit_item'                  => __( 'Edit Project Type', 'EAcademy' ),
    'update_item'                => __( 'Update Project Type', 'EAcademy' ),
    'add_or_remove_items'        => __( 'Add or remove Project Types', 'EAcademy' ),
    'popular_items'              => __( 'Popular Types', 'EAcademy' ),
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

}


add_action( 'init', 'create_project_type' );

 ?>
