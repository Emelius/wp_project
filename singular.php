
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
    <section class="article_section">
      <article>
        <h1 class="single_h1"><?php the_title();?></h1>
        <p class="article_body">
          <?php the_content(); ?>
        </p>
        <hr class="bottom_line"/>
      </article>

      <aside class="sidelist">
        <h2>More <?php echo $post_type; ?> </h2>
        <div class="more">
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
        showcase($post_type);
         ?>
        </div>
      </aside>
    </section>



      <?php
      }
    }



else {
  echo "empty";
}
get_footer(); ?>
