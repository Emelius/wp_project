<?php

/************************ Set up EVENTS post type **************************/
function event_post_type() {

    $args = array(
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-calendar-alt',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => 'events',
        'query_var'           => 'events',
        'capability_type'     => 'post',
        'map_meta_cap'        => true,

        'rewrite' => array(
      		'slug'                  => 'events',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => false,
      	),

        'supports' => array(
            'editor'
        ),

        'labels' => array(
            'name'               => __( 'Events',                   'eacademy' ),
            'singular_name'      => __( 'Event',                    'eacademy' ),
            'menu_name'          => __( 'Events',                   'eacademy' ),
            'name_admin_bar'     => __( 'Events',                   'eacademy' ),
            'add_new'            => __( 'Add New',                  'eacademy' ),
            'add_new_item'       => __( 'Add New Event',            'eacademy' ),
            'edit_item'          => __( 'Edit Event',               'eacademy' ),
            'new_item'           => __( 'New Event',                'eacademy' ),
            'view_item'          => __( 'View Event',               'eacademy' ),
            'search_items'       => __( 'Search Events',            'eacademy' ),
            'not_found'          => __( 'No events found',          'eacademy' ),
            'not_found_in_trash' => __( 'No events found in trash', 'eacademy' ),
            'all_items'          => __( 'All Events',               'eacademy' ),
        )
    );

    /* Register the post type. */
    register_post_type('events',$args );
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'event_post_type' );

/************************ Set up NEWS post type **************************/
function news_post_type() {

    $args = array(

        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => 'news',
        'query_var'           => 'news',
        'capability_type'     => 'post',
        'map_meta_cap'        => true,

        'rewrite' => array(
      		'slug'                  => 'news',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => false,
      	),

        'supports' => array(
            'editor',
        ),

        'labels' => array(
            'name'               => __( 'News',                   'eacademy' ),
            'singular_name'      => __( 'News',                    'eacademy' ),
            'menu_name'          => __( 'News',                   'eacademy' ),
            'name_admin_bar'     => __( 'News',                   'eacademy' ),
            'add_new'            => __( 'Add New',                  'eacademy' ),
            'add_new_item'       => __( 'Add New News',            'eacademy' ),
            'edit_item'          => __( 'Edit News',               'eacademy' ),
            'new_item'           => __( 'New News',                'eacademy' ),
            'view_item'          => __( 'View News',               'eacademy' ),
            'search_items'       => __( 'Search News',            'eacademy' ),
            'not_found'          => __( 'No news found',          'eacademy' ),
            'not_found_in_trash' => __( 'No news found in trash', 'eacademy' ),
            'all_items'          => __( 'All News',               'eacademy' ),
        )
    );

    /* Register the post type. */
    register_post_type('news', $args);
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'news_post_type' );

/************************ Set up members post type **************************/
function members_post_type() {

    $args = array(

        'public'              => true, // bool (default is FALSE)
        'publicly_queryable'  => true, // bool (defaults to 'public').
        'exclude_from_search' => false, // bool (defaults to 'public')
        'show_in_nav_menus'   => true, // bool (defaults to 'public')
        'show_ui'             => true, // bool (defaults to 'public')
        'show_in_menu'        => true, // bool (defaults to 'show_ui')
        'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')
        'menu_position'       => 5, // int (defaults to 25 - below comments)
        'menu_icon'           => 'dashicons-groups', // string (defaults to use the post icon)
        'can_export'          => true, // bool (defaults to TRUE)
        'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')
        'hierarchical'        => false, // bool (defaults to FALSE)
        'has_archive'         => 'members', // bool|string (defaults to FALSE)
        'query_var'           => 'members', // bool|string (defaults to TRUE - post type name)
        'capability_type'     => 'post', // string|array (defaults to 'post')
        'map_meta_cap'        => true, // bool (defaults to FALSE)

        'rewrite' => array(
      		'slug'                  => 'members',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => false,
      	),

        'supports' => array(
            'editor'
        ),

        'labels' => array(
            'name'               => __( 'Members',                   'eacademy' ),
            'singular_name'      => __( 'Member',                    'eacademy' ),
            'menu_name'          => __( 'Members',                   'eacademy' ),
            'name_admin_bar'     => __( 'Members',                   'eacademy' ),
            'add_new'            => __( 'Add New',                  'eacademy' ),
            'add_new_item'       => __( 'Add New Member',            'eacademy' ),
            'edit_item'          => __( 'Edit members',               'eacademy' ),
            'new_item'           => __( 'New members',                'eacademy' ),
            'view_item'          => __( 'View members',               'eacademy' ),
            'search_items'       => __( 'Search members',            'eacademy' ),
            'not_found'          => __( 'No members found',          'eacademy' ),
            'not_found_in_trash' => __( 'No members found in trash', 'eacademy' ),
            'all_items'          => __( 'All members',               'eacademy' ),
        )
    );

    /* Register the post type. */
    register_post_type('members', $args);
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'members_post_type' );

 ?>
