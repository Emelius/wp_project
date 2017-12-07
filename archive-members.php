<?php
    get_header();
?>

<section>
    <?php
        $terms = get_terms(array(
            "taxonomy" => "team"
        ));

        foreach($terms as $term) {
            echo "<h2 class='team'>" . $term->name . "</h2>";

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
                    ?><div class="member"><?php
                        ?><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'big_square' ]; echo $thumb; ?>"><?php
                        ?><div class="memberText"><?php
                            ?><h3><?php the_field('name'); ?></h3></div><?php
                    ?></div><?php
                }
            }
        }
    ?>
</section>

<?php
    get_footer();
?>
