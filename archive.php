<?php
get_header();
?>
archive.php
<?php
  if( have_posts() ) {
    while ( have_posts() ){
        the_post(); ?>
        <h2><?php the_field('title');?></h2>
        <a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'grid_thumbnail' ]; echo $thumb; ?>"></a><?php
        the_field('excerpt');
      }
    }
?>

<?php
get_footer();
?>
