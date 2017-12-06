<?php
    get_header();
    include("includes/render_functions.php");
    $post_type = get_post_type();

?>

<div class="breadcrumbs">
    <?php
        bcn_display();
    ?>
</div>

    <section id="<?php echo $post_type ?>">
        <h2><?php
            $post_label = $post_type;
            $post_label[0] = strtoupper($post_label[0]);
            echo $post_label;
        ?></h2>
        <div>
            <?php showcase($post_type, $post_type == "news" ? "wide_thumbnail" : "large_grid_thumbnail"); ?>
        </div>
    </section>

<?php
    get_footer();
?>
