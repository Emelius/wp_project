<?php
  get_header();

    if( have_posts() ) {
      while ( have_posts() ) {
        the_post();
      ?>
      <div class="img_cont">
        <div class="header_img">
          <img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'single_large' ]; echo $thumb; ?>">
        </div>
      </div>
    <section class="article_section">
        <div class="breadcrumbs">
            <?php
                bcn_display();
            ?>
        </div>
      <article>
        <h1 class="single_h1"><?php the_field('title');?></h1>
        <div class="posted_date">
          Posted: <?php
          the_date("Y-m-d");?>
        </div>
        <p class="article_body">

          <?php the_field('text'); ?>
        </p>

        <div id="loc_time_cont">
        <?php if ($post_type == 'events') {?>
          <hr class="bottom_line"/>
          <div id="time">
            <?php
            echo '<h2>Time</h2>';
            echo '<br>';
            the_field('date_&_time');?>
          </div>
          <div id="location">
            <?php
            echo '<h2>Location</h2>';
            echo '<br>';
            the_field('location');?>
          </div>
          <?php
        }
        ?>
        </div>
        <hr class="bottom_line"/>
      </article>
      <aside class="sidelist">

        <h2>More <?php echo $post_type; ?> </h2>
        <div class="more">
        <?php
            include("includes/render_functions.php");
            showcase($post_type, "large_grid_thumbnail");
         ?>
        </div>
      </aside>
    </section>
      <?php
      }
    } else {
      echo "empty";
    }

get_footer();
?>
