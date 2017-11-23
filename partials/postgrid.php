<?php
if( have_posts() ) {

    while ( have_posts() ){
        echo "<li>";
        the_post();
        ?>
        <a href="<?php
        the_permalink();
        ?>"><?php the_title(); ?></a>
        <?php
    }
}
?>
