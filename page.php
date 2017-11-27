page.php
<?php
get_header();
?>

<?php
  if( have_posts() ) {
    while ( have_posts() ){
        the_post(); ?>
        <h2><?php the_title();?></h2><?php
        the_content();

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
                    ?><a href="<?php the_permalink() ?>"><?php the_post_thumbnail("grid_thumbnail"); ?></a><?php
                    ?><div class="text"><?php
                        ?><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3><?php
                        the_excerpt();
                    ?></div><?php
                ?></div><?php
            }
        }
    }
    include 'partials/form.php';
?>

<?php
get_footer();
?>
