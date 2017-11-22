<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E Academy</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
    <?php wp_head(); ?>
  </head>
  <body>

  <div id="pageContainer">

    <div id="header_wrap">
        <header>

          <div class='logo'>
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                    echo '<img src="'. esc_url( $logo[0] ) .'">';
            } else {
                    echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
            ?>
          </div>


          <nav>
            <ul>
            <?php wp_nav_menu( array( 'theme_location' => 'header-nav' ) );?>
            </ul>
          </nav>
        </header>

    </div>

    <main>
