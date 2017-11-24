this is the singular
<?php
  get_header();
?>
  <section>
    <?php if( have_posts() ) {
      while ( have_posts() ) {
        the_post();
      ?><div class="header_img" style="width:100%;background-image: url(<?php get_the_post_thumbnail()?>);"></div>
      <article class="">
        <h1><?php the_title();?></h1>
        <p class="article_body">
          <?php the_content(); ?>
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
