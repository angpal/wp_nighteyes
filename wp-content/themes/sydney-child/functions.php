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

//use to add and js to page

function child_sydney_add_custom_js(){

//only adds js file if page is 'cart' page
if (is_page('cart')) {
	
	wp_enqueue_script( 'custom-cart-fix', get_stylesheet_directory_uri() . '/js/custom_update_cart_fix.js', array('jquery'),'', true );
	
}





}

add_action( 'wp_enqueue_scripts', 'child_sydney_add_custom_js' );

?>