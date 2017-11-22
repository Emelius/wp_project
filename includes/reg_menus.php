<?php
//specify a location of a menu 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Header Menu' )
      //,
      //'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
