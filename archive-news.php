<?php
get_header();
?>
archive-news.php
<?php
  if( have_posts() ) {
    while ( have_posts() ){
        the_post(); ?>
        <h2><?php the_field('title');?></h2>
        <a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'grid_thumbnail' ]; echo $thumb; ?>"></a><?php
        the_field('excerpt');
      }
    }

    /*
    if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?><div class="item"><?php
                    ?><a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ $imageSize ]; echo $thumb; ?>"></a><?php
                    ?><div class="text"><?php
                        ?><h3><a href="<?php the_permalink() ?>"><?php the_field('title'); ?></a></h3><?php
                        the_field('excerpt');
                    ?></div><?php
                ?></div><?php
            }
        }
    }
    */
?>

<?php
get_footer();
?>
