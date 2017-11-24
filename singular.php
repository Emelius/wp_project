<?php
  get_header();
?>
  <section>
    <?php if( have_posts() ) {
      while ( have_posts() ) {
        the_post();
      ?><figure class="header_img">
          <img src="" alt="">
        </figure>
      <article class="">
        <h1><?php the_title();?></h1>
        <p class="article_body">
          <?php the_content(); ?>
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail("grid_thumbnail"); ?></a>
        </p>
      </article>
    </section>
    <aside class="">
      <div class="author">
        <figure class="author_pic">
          <img src="" alt="">
        </figure>
      </div>
    </aside>
      <?php
      }
    }



else {
  echo "empty";
}
get_footer(); ?>
