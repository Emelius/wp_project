<?php
 function add_widgets() {
  $args = array(
    'id'            => 'site-description',
    'name'          => __( 'Site description', 'eacademy' ),
    'description'   => __( 'A site description or welcome message', 'eacademy' ),
  );
  register_sidebar( $args );

  $args2 = array(
      'id'            => 'contact',
      'name'          => __( 'Contact form', 'eacademy' ),
      'description'   => __( 'text widget for the contact form', 'eacademy' ),
    );
    register_sidebar( $args2 );
 }
 add_action( 'widgets_init', 'add_widgets' );
?>
