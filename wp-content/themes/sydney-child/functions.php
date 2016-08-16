<?php

/**
 * Slider
 */
require get_stylesheet_directory() . '/inc/slider.php';

/**
 * Custom comment layout
 */
require get_stylesheet_directory() . '/inc/child_sydney_custom_comment.php';


// this code changes the order of the comment text area to bottom in the comment box on home page

function angelo_wpb_move_comment_field_to_bottom( $fields ) {

	$comment_field = $fields['comment'];

	unset( $fields['comment'] );

	$fields['comment'] = $comment_field;

	return $fields;

}

	 

	add_filter( 'comment_form_fields', 'angelo_wpb_move_comment_field_to_bottom' );

?>