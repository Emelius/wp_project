<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Header Menu', 'eacademy' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
