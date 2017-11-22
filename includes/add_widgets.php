<?php
 function add_widgets() {
  $args = array(
    'id'            => 'page-sidebar',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Page sidebar', 'portfolio_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Show my skills and contact info', 'portfolio_theme' ),

    // /** HTML to wrap widget title in  */
    // 'before_title'  => '<p class="widget-title">',
    // 'after_title'   => '</p>',
    // /** HTML to wrap each widget  */
    // 'before_widget' => '<section>',
    // 'after_widget'  => '</section>',
  );
  register_sidebar( $args );

  //second widget
  $args2 = array(
    'id'            => 'project-sidebar',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Project sidebar', 'portfolio_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Show the skills for specific project and social links', 'portfolio_theme' ),
  );
  register_sidebar( $args2 );

  $args3 = array(
    'id'            => 'site-description',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Site description', 'portfolio_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Show a short description of the site', 'portfolio_theme' ),
  );
  register_sidebar( $args3 );

 }
 add_action( 'widgets_init', 'add_widgets' );
?>
