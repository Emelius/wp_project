<?php
get_header();
?>

<?php
  if( have_posts() ) {
    while ( have_posts() ){
        the_post(); ?>
        <h2><?php the_title();?></h2><?php
        the_content();?>
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail("grid_thumbnail"); ?></a><?php

      }
    }
?>

<?php
get_footer();
?>
