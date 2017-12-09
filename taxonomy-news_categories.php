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
            <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        ?><div class="item"><?php
                        ?><a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ "wide_thumbnail" ]; echo $thumb; ?>"></a><?php
                        ?><div class="text"><?php
                        ?><h3><a href="<?php the_permalink() ?>"><?php the_field('title'); ?></a></h3><?php
                        the_field('excerpt');
                        ?></div><?php
                        ?></div><?php
                    }
                }
            ?>
        </div>
    </section>

<?php
    get_footer();
?>
