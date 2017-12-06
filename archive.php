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

    if ($post_type == 'news') {
    $terms = get_terms(array(
    'taxonomy' => 'news_categories',
    'hide_empty' => true ));

    echo '<div class="categoriesdiv">';
    foreach ($terms as $value) {
    echo '<div class="categories">';
    echo '<a href="/'; echo $post_type; echo '_categories/'; echo $value->slug; echo '">';
    echo $value->name;
    echo '</a></div>';
    }
    echo '</div>';
    }

    if ($post_type == 'events') {
    $terms = get_terms(array(
    'taxonomy' => 'events_categories',
    'hide_empty' => true ));

    echo '<div class="categoriesdiv">';
    foreach ($terms as $value) {
    echo '<div class="categories">';
    echo '<a href="/'; echo $post_type; echo '_categories/'; echo $value->slug; echo '">';
    echo $value->name;
    echo '</a></div>';
    }
    echo '</div>';
    }

?>

    <section id="<?php echo $post_type ?>">
        <h2><?php
            $post_label = $post_type;
            $post_label[0] = strtoupper($post_label[0]);
            echo $post_label;
        ?></h2>
        <div class="archivediv">
            <?php showcase($post_type, $post_type == "news" ? "wide_thumbnail" : "big_grid_thumbnail"); ?>
        </div>
    </section>

<?php
    get_footer();
?>
