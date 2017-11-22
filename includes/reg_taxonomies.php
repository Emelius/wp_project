<?php
function create_team() {
//create project type
  $labels = array(
    'name'                       => _x( 'Team', 'Taxonomy General Name', 'EAcademy' ),
    'singular_name'              => _x( 'Team', 'Taxonomy Singular Name', 'EAcademy' ),
    'menu_name'                  => __( 'Teams', 'EAcademy' ),
    'all_items'                  => __( 'All Teams', 'EAcademy' ),
    'new_item_name'              => __( 'New Team Name', 'EAcademy' ),
    'add_new_item'               => __( 'Add New Team', 'EAcademy' ),
    'edit_item'                  => __( 'Edit Team', 'EAcademy' ),
    'update_item'                => __( 'Update Team', 'EAcademy' ),
    'add_or_remove_items'        => __( 'Add or remove team', 'EAcademy' ),
    'popular_items'              => __( 'Popular Teams', 'EAcademy' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'team',
  );
  register_taxonomy( 'Team', array('members'), $args );

}


add_action( 'init', 'create_team' );

 ?>
