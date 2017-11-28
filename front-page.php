
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
    include("partials/renderFunctions.php");
?>

<section id="welcome">
      <?php dynamic_sidebar ('site-description'); ?>
</section>
<section id="news">
    <h2>News</h2>
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
