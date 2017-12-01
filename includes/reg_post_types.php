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
        'query_var'           => 'event',
        'capability_type'     => 'post',
        'map_meta_cap'        => true,

        'rewrite' => array(
      		'slug'                  => 'event',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => false,
      	),

        'supports' => array(
            'editor'
        ),

        'labels' => array(
            'name'               => __( 'Events',                   'event-textdomain' ),
            'singular_name'      => __( 'Event',                    'event-textdomain' ),
            'menu_name'          => __( 'Events',                   'event-textdomain' ),
            'name_admin_bar'     => __( 'Events',                   'event-textdomain' ),
            'add_new'            => __( 'Add New',                  'event-textdomain' ),
            'add_new_item'       => __( 'Add New Event',            'event-textdomain' ),
            'edit_item'          => __( 'Edit Event',               'event-textdomain' ),
            'new_item'           => __( 'New Event',                'event-textdomain' ),
            'view_item'          => __( 'View Event',               'event-textdomain' ),
            'search_items'       => __( 'Search Events',            'event-textdomain' ),
            'not_found'          => __( 'No events found',          'event-textdomain' ),
            'not_found_in_trash' => __( 'No events found in trash', 'event-textdomain' ),
            'all_items'          => __( 'All Events',               'event-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type('event',$args );
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
            'name'               => __( 'News',                   'news-textdomain' ),
            'singular_name'      => __( 'News',                    'news-textdomain' ),
            'menu_name'          => __( 'News',                   'news-textdomain' ),
            'name_admin_bar'     => __( 'News',                   'news-textdomain' ),
            'add_new'            => __( 'Add New',                  'news-textdomain' ),
            'add_new_item'       => __( 'Add New News',            'news-textdomain' ),
            'edit_item'          => __( 'Edit News',               'news-textdomain' ),
            'new_item'           => __( 'New News',                'news-textdomain' ),
            'view_item'          => __( 'View News',               'news-textdomain' ),
            'search_items'       => __( 'Search News',            'news-textdomain' ),
            'not_found'          => __( 'No news found',          'news-textdomain' ),
            'not_found_in_trash' => __( 'No news found in trash', 'news-textdomain' ),
            'all_items'          => __( 'All News',               'news-textdomain' ),
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
            'editor',
            'title'
        ),

        'labels' => array(
            'name'               => __( 'Members',                   'members-textdomain' ),
            'singular_name'      => __( 'Member',                    'members-textdomain' ),
            'menu_name'          => __( 'Members',                   'members-textdomain' ),
            'name_admin_bar'     => __( 'Members',                   'members-textdomain' ),
            'add_new'            => __( 'Add New',                  'members-textdomain' ),
            'add_new_item'       => __( 'Add New Member',            'members-textdomain' ),
            'edit_item'          => __( 'Edit members',               'members-textdomain' ),
            'new_item'           => __( 'New members',                'members-textdomain' ),
            'view_item'          => __( 'View members',               'members-textdomain' ),
            'search_items'       => __( 'Search members',            'members-textdomain' ),
            'not_found'          => __( 'No members found',          'members-textdomain' ),
            'not_found_in_trash' => __( 'No members found in trash', 'members-textdomain' ),
            'all_items'          => __( 'All members',               'members-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type('members', $args);
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'members_post_type' );

 ?>
