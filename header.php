<?php include("config.php"); ?>

<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entrepreneurship Academy</title>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php
        if (is_front_page()) wp_enqueue_script("slider", $uri . "/js/slider.js");
        wp_enqueue_script("adminAdjustments", $uri . "/js/adminAdjustments.js");
        wp_head();
    ?>
  </head>
  <body>

  <div id="pageContainer">
    <header>
        <?php wp_nav_menu( array( 'theme_location' => 'header-nav' ) );?>
    </header>

    <main>
