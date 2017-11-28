page.php
<?php
get_header();
?>

<?php
  if( have_posts() ) {
    while ( have_posts() ){
        the_post(); ?>
        <h2><?php the_title();?></h2>
        <p></p><?php
        the_field('text'); ?>
        </p><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'large_grid_thumbnail' ]; echo $thumb; ?>">
        <?php
      }
    }
?>

<?php
get_footer();
?>
