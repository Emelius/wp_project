
<?php
  get_header();
?>
    this is single
    <?php if( have_posts() ) {
      while ( have_posts() ) {
        the_post();
      ?>
      <div class="img_cont">
        <div class="header_img">
          <img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ 'single_large' ]; echo $thumb; ?>">
        </div>
      </div>
    <section class="article_section">
      <article>
        <h1 class="single_h1"><?php the_field('title');?></h1>
        <p class="article_body">
          <?php the_field('text'); ?>
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
                        ?><a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ $imageSize ]; echo $thumb; ?>"></a><?php
                        ?><div class="text"><?php
                            ?><h3><a href="<?php the_permalink() ?>"><?php the_field('title'); ?></a></h3><p><?php
                            the_field('excerpt');
                        ?></p></div><?php
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
