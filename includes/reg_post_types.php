<?php

/************************ Set up EVENTS post type **************************/
function event_post_type() {

    /* Set up the arguments for the post type. */
    $args = array(

        /**
         * Whether the post type should be used publicly via the admin or by front-end users.  This
         * argument is sort of a catchall for many of the following arguments.  I would focus more
         * on adjusting them to your liking than this argument.
         */
        'public'              => true, // bool (default is FALSE)

        /**
         * Whether queries can be performed on the front end as part of parse_request().
         */
        'publicly_queryable'  => true, // bool (defaults to 'public').

        /**
         * Whether to exclude posts with this post type from front-end search results.
         */
        'exclude_from_search' => false, // bool (defaults to 'public')

        /**
         * Whether individual post type items are available for selection in navigation menus.
         */
        'show_in_nav_menus'   => true, // bool (defaults to 'public')

        /**
         * Whether to generate a default UI for managing this post type in the admin. You'll have
         * more control over what's shown in the admin with the other arguments.  To build your
         * own UI, set this to FALSE.
         */
        'show_ui'             => true, // bool (defaults to 'public')

        /**
         * Whether to show post type in the admin menu. 'show_ui' must be true for this to work.
         */
        'show_in_menu'        => true, // bool (defaults to 'show_ui')

        /**
         * Whether to make this post type available in the WordPress admin bar. The admin bar adds
         * a link to add a new post type item.
         */
        'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

        /**
         * The position in the menu order the post type should appear. 'show_in_menu' must be true
         * for this to work.
         */
        'menu_position'       => 5, // int (defaults to 25 - below comments)

        /**
         * The css-string for the icon to use for the admin menu item.
         * https://developer.wordpress.org/resource/dashicons
         */
        'menu_icon'           => 'dashicons-portfolio', // string (defaults to use the post icon)

        /**
         * Whether the posts of this post type can be exported via the WordPress import/export plugin
         * or a similar plugin.
         */
        'can_export'          => true, // bool (defaults to TRUE)

        /**
         * Whether to delete posts of this type when deleting a user who has written posts.
         */
        'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

        /**
         * Whether this post type should allow hierarchical (parent/child/grandchild/etc.) posts.
         */
        'hierarchical'        => false, // bool (defaults to FALSE)

        /**
         * Whether the post type has an index/archive/root page like the "page for posts" for regular
         * posts. If set to TRUE, the post type name will be used for the archive slug.  You can also
         * set this to a string to control the exact name of the archive slug. (site.com/events)
         */
        'has_archive'         => 'events', // bool|string (defaults to FALSE)

        /**
         * Sets the query_var key for this post type. If set to TRUE, the post type name will be used.
         * You can also set this to a custom string to control the exact key.
         */
        'query_var'           => 'event', // bool|string (defaults to TRUE - post type name)

        /**
         * A string used to build the edit, delete, and read capabilities for posts of this type. You
         * can use a string or an array (for singular and plural forms).  The array is useful if the
         * plural form can't be made by simply adding an 's' to the end of the word.  For example,
         * array( 'box', 'boxes' ).
         */
        'capability_type'     => 'post', // string|array (defaults to 'post')

        /**
         * Whether WordPress should map the meta capabilities (edit_post, read_post, delete_post) for
         * you.  If set to FALSE, you'll need to roll your own handling of this by filtering the
         * 'map_meta_cap' hook.
         */
        'map_meta_cap'        => true, // bool (defaults to FALSE)

        /**
         * How the URL structure should be handled with this post type.  You can set this to an
         * array of specific arguments or true|false.  If set to FALSE, it will prevent rewrite
         * rules from being created.
         */
        'rewrite' => array(
      		'slug'                  => 'event',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => false,
      	),

        /**
         * What WordPress features the post type supports.  Many arguments are strictly useful on
         * the edit post screen in the admin.  However, this will help other themes and plugins
         * decide what to do in certain situations.  You can pass an array of specific features or
         * set it to FALSE to prevent any features from being added.  You can use
         * add_post_type_support() to add features or remove_post_type_support() to remove features
         * later.  The default features are 'title' and 'editor'.
         */
        'supports' => array(

            /* Post titles ($post->post_title). */
            'title',

            /* Post content ($post->post_content). */
            'editor',

            /* Post excerpt ($post->post_excerpt). */
            //'excerpt',

            /* Post author ($post->post_author). */
            'author',

            /* Featured images (the user's theme must support 'post-thumbnails'). */
            'thumbnail',

            /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
            'comments',

            /* Displays meta box to send trackbacks from the edit post screen. */
            'trackbacks',

            /* Displays the Custom Fields meta box. Post meta is supported regardless. */
            'custom-fields',

            /* Displays the Revisions meta box. If set, stores post revisions in the database. */
            'revisions',

            /* Displays the Attributes meta box with a parent selector and menu_order input box. */
            'page-attributes',

            /* Displays the Format meta box and allows post formats to be used with the posts. */
            'post-formats',
        ),

        /**
         * Labels used when displaying the posts in the admin and sometimes on the front end.  These
         * labels do not cover post updated, error, and related messages.  You'll need to filter the
         * 'post_updated_messages' hook to customize those.
         */
        //'taxonomies'            => array( 'event_skill', 'event_type'),
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
    register_post_type(
        'event', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $args      // Arguments for post type.
    );
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'event_post_type' );

/************************ Set up NEWS post type **************************/
function news_post_type() {

    /* Set up the arguments for the post type. */
    $args = array(

        /**
         * Whether the post type should be used publicly via the admin or by front-end users.  This
         * argument is sort of a catchall for many of the following arguments.  I would focus more
         * on adjusting them to your liking than this argument.
         */
        'public'              => true, // bool (default is FALSE)

        /**
         * Whether queries can be performed on the front end as part of parse_request().
         */
        'publicly_queryable'  => true, // bool (defaults to 'public').

        /**
         * Whether to exclude posts with this post type from front-end search results.
         */
        'exclude_from_search' => false, // bool (defaults to 'public')

        /**
         * Whether individual post type items are available for selection in navigation menus.
         */
        'show_in_nav_menus'   => true, // bool (defaults to 'public')

        /**
         * Whether to generate a default UI for managing this post type in the admin. You'll have
         * more control over what's shown in the admin with the other arguments.  To build your
         * own UI, set this to FALSE.
         */
        'show_ui'             => true, // bool (defaults to 'public')

        /**
         * Whether to show post type in the admin menu. 'show_ui' must be true for this to work.
         */
        'show_in_menu'        => true, // bool (defaults to 'show_ui')

        /**
         * Whether to make this post type available in the WordPress admin bar. The admin bar adds
         * a link to add a new post type item.
         */
        'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

        /**
         * The position in the menu order the post type should appear. 'show_in_menu' must be true
         * for this to work.
         */
        'menu_position'       => 5, // int (defaults to 25 - below comments)

        /**
         * The css-string for the icon to use for the admin menu item.
         * https://developer.wordpress.org/resource/dashicons
         */
        'menu_icon'           => 'dashicons-portfolio', // string (defaults to use the post icon)

        /**
         * Whether the posts of this post type can be exported via the WordPress import/export plugin
         * or a similar plugin.
         */
        'can_export'          => true, // bool (defaults to TRUE)

        /**
         * Whether to delete posts of this type when deleting a user who has written posts.
         */
        'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

        /**
         * Whether this post type should allow hierarchical (parent/child/grandchild/etc.) posts.
         */
        'hierarchical'        => false, // bool (defaults to FALSE)

        /**
         * Whether the post type has an index/archive/root page like the "page for posts" for regular
         * posts. If set to TRUE, the post type name will be used for the archive slug.  You can also
         * set this to a string to control the exact name of the archive slug. (site.com/events)
         */
        'has_archive'         => 'news', // bool|string (defaults to FALSE)

        /**
         * Sets the query_var key for this post type. If set to TRUE, the post type name will be used.
         * You can also set this to a custom string to control the exact key.
         */
        'query_var'           => 'news', // bool|string (defaults to TRUE - post type name)

        /**
         * A string used to build the edit, delete, and read capabilities for posts of this type. You
         * can use a string or an array (for singular and plural forms).  The array is useful if the
         * plural form can't be made by simply adding an 's' to the end of the word.  For example,
         * array( 'box', 'boxes' ).
         */
        'capability_type'     => 'post', // string|array (defaults to 'post')

        /**
         * Whether WordPress should map the meta capabilities (edit_post, read_post, delete_post) for
         * you.  If set to FALSE, you'll need to roll your own handling of this by filtering the
         * 'map_meta_cap' hook.
         */
        'map_meta_cap'        => true, // bool (defaults to FALSE)

        /**
         * How the URL structure should be handled with this post type.  You can set this to an
         * array of specific arguments or true|false.  If set to FALSE, it will prevent rewrite
         * rules from being created.
         */
        'rewrite' => array(
      		'slug'                  => 'news',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => false,
      	),

        /**
         * What WordPress features the post type supports.  Many arguments are strictly useful on
         * the edit post screen in the admin.  However, this will help other themes and plugins
         * decide what to do in certain situations.  You can pass an array of specific features or
         * set it to FALSE to prevent any features from being added.  You can use
         * add_post_type_support() to add features or remove_post_type_support() to remove features
         * later.  The default features are 'title' and 'editor'.
         */
        'supports' => array(

            /* Post titles ($post->post_title). */
            'title',

            /* Post content ($post->post_content). */
            'editor',

            /* Post excerpt ($post->post_excerpt). */
            //'excerpt',

            /* Post author ($post->post_author). */
            'author',

            /* Featured images (the user's theme must support 'post-thumbnails'). */
            'thumbnail',

            /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
            'comments',

            /* Displays meta box to send trackbacks from the edit post screen. */
            'trackbacks',

            /* Displays the Custom Fields meta box. Post meta is supported regardless. */
            'custom-fields',

            /* Displays the Revisions meta box. If set, stores post revisions in the database. */
            'revisions',

            /* Displays the Attributes meta box with a parent selector and menu_order input box. */
            'page-attributes',

            /* Displays the Format meta box and allows post formats to be used with the posts. */
            'post-formats',
        ),

        /**
         * Labels used when displaying the posts in the admin and sometimes on the front end.  These
         * labels do not cover post updated, error, and related messages.  You'll need to filter the
         * 'post_updated_messages' hook to customize those.
         */
        //'taxonomies'            => array( 'event_skill', 'event_type'),
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
    register_post_type(
        'news', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $args      // Arguments for post type.
    );
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'news_post_type' );

 ?>
