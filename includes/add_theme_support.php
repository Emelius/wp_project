<?php
//adds support for thumbnails and formats
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description')
  ));
?>
