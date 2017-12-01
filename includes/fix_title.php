<?php
    function updateTitle() {
        $post = array(
            "ID" => $post_id,
            "post_title" => get_field("name", $post_id)
        );

        wp_update_post($post);
    }

    add_action("acf/save_post", "updateTitle", 20);
?>
