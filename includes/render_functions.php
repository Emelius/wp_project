<?php
    function showcase($item, $imageSize) {
        $args = array(
            "post_type" => $item,
            "posts_per_page" => 4,
            "paged" => get_query_var("paged")
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?><div class="item"><?php
                    ?><a href="<?php the_permalink() ?>"><img src="<?php $image = get_field('image'); $thumb = $image['sizes'][ $imageSize ]; echo $thumb; ?>"></a><?php
                    ?><div class="text"><?php
                        ?><h3><a href="<?php the_permalink() ?>"><?php the_field('title'); ?></a></h3><?php
                        the_field('excerpt');
                    ?></div><?php
                ?></div><?php
            }
        }
    }
?>
