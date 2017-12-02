<?php
    get_header();
?>

<section id="contactContent">
    <?php
      if( have_posts() ) {
        while ( have_posts() ){
            the_post(); ?>
            <div class="left_box">
              <h2><?php the_title();?></h2>
              <img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'grid_thumbnail' ]; echo $thumb; ?>">
              <p class="text_box"><?php
              the_field('text'); ?></p>
            </div>
            <?php
          }
        }
    ?>

    <div class="right_box">
      <?php get_template_part('partials/form');?>

    </div>
</section>

<?php
    get_footer();
?>
