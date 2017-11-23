<?php
get_header();
?>

<div class="bigLogo">
    <?php $uri =  get_template_directory_uri() ?>

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
get_footer();
?>
