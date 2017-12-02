<?php
    function add_classes($classes, $item) {
        global $post;

        if ($item->title == $post->post_name) {
            $classes[] = "current-menu-item";
        }

        $classes[] = "post-type-" . $post->post_type;

        return $classes;
    }

    add_filter("nav_menu_css_class", "add_classes", 20, 2);
?>
