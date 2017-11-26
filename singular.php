
<?php
  get_header();
?>
  <section>

    <?php if( have_posts() ) {
      while ( have_posts() ) {
        the_post();
      ?>
      <div class="img_cont">
        <div class="header_img">
          <?php the_post_thumbnail();?>
        </div>

      </div>
      <article>
        <h1 class="single_h1"><?php the_title();?></h1>
        <p class="article_body">
          <?php the_content(); ?>
        </p>
        <hr class="bottom_line"/>
      </article>
      <aside class="sidelist">
        <h2>More news: </h2>
      </aside>
    </section>
    <div class="author">
      Author: <?php the_author(); ?>
      </div>


      <?php
      }
    }



else {
  echo "empty";
}
get_footer(); ?>
