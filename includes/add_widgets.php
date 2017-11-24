<?php
 function add_widgets() {
  $args = array(
    'id'            => 'site-description',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Site description', 'EAcademy' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'A site description or welcome message', 'EAcademy' ),

    // /** HTML to wrap widget title in  */
    // 'before_title'  => '<p class="widget-title">',
    // 'after_title'   => '</p>',
    // /** HTML to wrap each widget  */
    // 'before_widget' => '<section>',
    // 'after_widget'  => '</section>',
  );
  register_sidebar( $args );

 }
 add_action( 'widgets_init', 'add_widgets' );
?>
