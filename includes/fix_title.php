<?php
    function updateTitle($post_id) {
        if ($post_type == "page") {
            $post_type = get_post_type($post_id);

            if ($post_type == "members") {
                $field = "name";
            } else {
                $field = "title";
            }

            $post = array(
                "ID" => $post_id,
                "post_title" => get_field($field, $post_id),
                "post_name" => get_field($field, $post_id)
            );

            wp_update_post($post);
        }
    }

    add_action("acf/save_post", "updateTitle", 20);
?>
