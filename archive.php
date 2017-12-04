<?php
    get_header();

  /*if( have_posts() ) {
    while ( have_posts() ){
        the_post(); ?>
        <h2><?php the_field('title');?></h2>
        <a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'grid_thumbnail' ]; echo $thumb; ?>"></a><?php
        the_field('excerpt');
      }
    }*/

    include("includes/render_functions.php");
    $post_type = get_post_type();
    ?>

    <section id="<?php echo $post_type ?>">
        <h2><?php
            $post_label = $post_type;
            $post_label[0] = strtoupper($post_label[0]);
            echo $post_label;
        ?></h2>
        <div>
            <?php showcase($post_type, $post_type == "event" ? "wide_thumbnail" : "large_grid_thumbnail"); ?>
        </div>
    </section>

<?php
    get_footer();
?>
