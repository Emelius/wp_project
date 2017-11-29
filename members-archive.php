<?php
get_header();
?>
archive-members.php
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
    $terms = get_terms(array(
        "taxonomy" => "team"
    ));

    foreach($terms as $term) {
        echo "<h2>" . $term->name . "</h2>";

        $args = array(
            "post_type" => "members",
            "tax_query" => array(
                array(
                    "taxonomy" => "team",
                    "field" => "name",
                    "terms" => $term->name
                )
            ),
            "posts_per_page" => 4
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?><div class="item"><?php
                    ?><a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'grid_thumbnail' ]; echo $thumb; ?>"></a><?php
                    ?><div class="text"><?php
                        ?><h3><a href="<?php the_permalink() ?>"><?php the_field('name'); ?></a></h3></div><?php
                ?></div><?php
            }
        }
    }
?>

<?php
get_footer();
?>
