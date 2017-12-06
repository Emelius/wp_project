<?php
    get_header();

    include("includes/render_functions.php");

    $terms = get_terms(array(
        'taxonomy' => $post_type . '_categories',
        'hide_empty' => true
    ));

    echo '<div class="categoriesdiv">';

    foreach ($terms as $value) {
        echo '<div class="categories">';
        echo '<a href="/'; echo $post_type; echo '_categories/'; echo $value->slug; echo '">';
        echo $value->name;
        echo '</a></div>';
    }

    echo '</div>';
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
