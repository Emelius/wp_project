<?php
function create_team() {

  $labels = array(
    'name'                       => _x( 'Team', 'Taxonomy General Name', 'eacademy' ),
    'singular_name'              => _x( 'Team', 'Taxonomy Singular Name', 'eacademy' ),
    'menu_name'                  => __( 'Teams', 'eacademy' ),
    'all_items'                  => __( 'All Teams', 'eacademy' ),
    'new_item_name'              => __( 'New Team Name', 'eacademy' ),
    'add_new_item'               => __( 'Add New Team', 'eacademy' ),
    'edit_item'                  => __( 'Edit Team', 'eacademy' ),
    'update_item'                => __( 'Update Team', 'eacademy' ),
    'add_or_remove_items'        => __( 'Add or remove team', 'eacademy' ),
    'popular_items'              => __( 'Popular Teams', 'eacademy' ),
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
  register_taxonomy( 'team', array('members'), $args );

}


add_action( 'init', 'create_team' );

/********************* Create categories option for events  **********************/

add_action( 'init', 'add_event_tax' );

function add_event_tax() {
	register_taxonomy(
		'events_categories',
		'events',
		array(
			'label' => __( 'Event Categories', 'eacademy' ),
			'rewrite' => array( 'slug' => 'events_categories' ),
			'hierarchical' => true,
			'has_archive' => true,
			'public' => true,
			'rewrite' => true
		)
	);
}


/********************* Create categories option for news  **********************/


add_action( 'init', 'add_news_tax' );

function add_news_tax() {
	register_taxonomy(
		'news_categories',
		'news',
		array(
			'label' => __( 'News Categories', 'eacademy' ),
			'rewrite' => array( 'slug' => 'news_categories' ),
			'hierarchical' => true,
			'has_archive' => true,
			'public' => true,
			'rewrite' => true
		)
	);
}

 ?>
