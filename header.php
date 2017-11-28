<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entrepreneurship Academy</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>

    <?php $uri = get_template_directory_uri() ?>

  <div id="pageContainer">
    <header>
        <?php wp_nav_menu( array( 'theme_location' => 'header-nav' ) );?>
    </header>

    <main>
