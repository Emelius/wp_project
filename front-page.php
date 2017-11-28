
<?php
get_header();
?>

<div class="bigLogo">
    <img class="logoBackground" src="<?php echo $uri ?>/images/groupPhotoBW.jpg">

    <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
                the_custom_logo();
                //echo '<img src="'. esc_url( $logo[0] ) .'">';
        } else {
                echo '<a href="#" class="custom-logo-link"><h1 class="custom-logo">'. get_bloginfo( 'name' ) .'</h1></a>';
        }
    ?>
</div>

<?php
<<<<<<< HEAD
    include("partials/renderFunctions.php");
=======
    function showcase($item, $imageSize) {
        $args = array(
            "post_type" => $item,
            "posts_per_page" => 4
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?><div class="item"><?php
                    ?><a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ $imageSize ]; echo $thumb; ?>"></a><?php
                    ?><div class="text"><?php
                        ?><h3><a href="<?php the_permalink() ?>"><?php the_field('title'); ?></a></h3><?php
                        the_field('excerpt');
                    ?></div><?php
                ?></div><?php
            }
        }
    }

    function slider($item, $imageSize) {
        $args = array(
            "post_type" => $item,
            "posts_per_page" => 4
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?><div class="item"><?php
                    ?><a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ $imageSize ]; echo $thumb; ?>"></a><?php
                    ?><div class="text"><?php
                        ?><h3><a href="<?php the_permalink() ?>"><?php the_field('title'); ?></a></h3><p><?php
                        the_field('excerpt');
                    ?></p></div>
                </div><?php
            }
        }
    }
>>>>>>> ab175dae2267d3bec957501b254fd3c327602bd2
?>

<section id="welcome">
      <?php dynamic_sidebar ('site-description'); ?>
</section>
<section>
    <h2>News</h2>
</section>

<section id="news">
    
    <?php
        slider("news", "wide_thumbnail");
    ?>
    <div id="previous" class="sliderArrow" title="Previous"><span>&lt;</span></div>
    <div id="next" class="sliderArrow" title="Next"><span>&gt;</span></div>
</section>
<script src="<?php echo get_template_directory_uri() ?>/js/slider.js"></script>

<section id="events">
    <h2>Events</h2>
    <div>
        <?php
            showcase("event", "large_grid_thumbnail");
        ?>
    </div>
</section>

<?php
get_footer();
?>
