<?php

add_action('admin_menu','remove_default_post_type');


function remove_default_post_type() {
	remove_menu_page('edit.php');
}

function remove_comments() {
	remove_menu_page( 'edit-comments.php' );
}

add_action('admin_menu','remove_comments');

?>
