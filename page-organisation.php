<?php
    get_header();
?>

<section id="organisationContent">
    <?php
      if( have_posts() ) {
        while ( have_posts() ){
            the_post(); ?>

              <h2><?php the_title();?></h2>
              <img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'single_large' ]; echo $thumb; ?>">
              <p class="about_text"><?php the_field('text'); ?></p>
            <?php
          }
        }
    ?>

</section>

<?php
    get_footer();
?>
