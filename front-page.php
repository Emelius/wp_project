<?php
    get_header();
    include("config.php");
?>

<div class="backgroundImage"><div class="custom_logo"><?php the_custom_logo();?></div></div>

<?php
    include("includes/render_functions.php");
?>

<section id="welcome">
  <?php dynamic_sidebar ('site-description'); ?>
</section>
<section>
  <h2>News</h2>
</section>

<section class="slider">
    <section id="news">
        <?php
            showcase("news", "wide_thumbnail");
        ?>
        <div id="previous" class="sliderArrow" title="Previous"><span>&lt;</span></div>
        <div id="next" class="sliderArrow" title="Next"><span>&gt;</span></div>
    </section>
</section>

<section id="events">
    <h2>Events</h2>
    <div>
        <?php
            showcase("events", "large_grid_thumbnail");
        ?>
    </div>
</section>

<?php
    get_footer();
?>
