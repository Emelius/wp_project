<?php
get_header();
?>

<div class="bigLogo">
    <?php $uri = get_template_directory_uri() ?>

    <img class="logoBackground" src="<?php echo $uri ?>/images/groupPhoto.jpg">

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
    function showcase($item) {
        $args = array(
            "post_type" => $item,
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
?>

<section id="about">
    <h2>About Entrepreneurship Academy</h2>
    <p>wwwwwwwwwwwwww</p>
</section>
<section id="news">
    <h2>News</h2>
    <?php
        showcase("news");
    ?>
</section>
<section id="events">
    <h2>Events</h2>
    <?php
        showcase("event");
    ?>
</section>

<?php
get_footer();
?>
