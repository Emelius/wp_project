
<?php
  get_header();
?>
    this is singular
    <?php if( have_posts() ) {
      while ( have_posts() ) {
        the_post();
      ?>
      <div class="img_cont">
        <div class="header_img">
          <?php the_post_thumbnail();?>
        </div>

      </div>
    <section>
      <article>
        <h1 class="single_h1"><?php the_title();?></h1>
        <p class="article_body">
          <?php the_content(); ?>
        </p>
        <hr class="bottom_line"/>
        <div class="author">
          <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
          Author: <?php the_author(); ?>
          </div>
      </article>

      <aside class="sidelist">
        <h2>More <?php echo $post_type; ?> </h2>

      </aside>
    </section>



      <?php
      }
    }



else {
  echo "empty";
}
get_footer(); ?>
