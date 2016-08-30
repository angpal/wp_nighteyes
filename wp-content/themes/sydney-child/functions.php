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
	wp_enqueue_script( 'custom-cart-fix', get_stylesheet_directory_uri() . '/js/ap_custom_javascript.js', array('jquery'),'', true );
	
}





}

add_action( 'wp_enqueue_scripts', 'child_sydney_add_custom_js', 50, 0 );


//declare woocommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}

//jquery to update cart totals when qty changes

add_action( 'woocommerce_after_cart', 'custom_after_cart' );
function custom_after_cart() {
    echo "<script>jQuery(document).ready(function($){
    $(.qty').on('change', function(){
        form = $(this).closest('form');

        // emulates button Update cart click
        $(\"<input type='hidden' name='update_cart' id='update_cart' value='1'>\").appendTo(form);

        // plugin flag
        $(\"<input type='hidden' name='is_wac_ajax' id='is_wac_ajax' value='1'>\").appendTo(form);

        el_qty = $(this);
        matches = $(this).attr('name').match(/cart\[(\w+)\]/);
        cart_item_key = matches[1];
        form.append( $(\"<input type='hidden' name='cart_item_key' id='cart_item_key'>\").val(cart_item_key) );

        // get the form data before disable button...
        formData = form.serialize();

        $(\"input[name='update_cart']\").val('Обновление…');
        //$(\"input[name='update_cart']\").val('Updating…').prop('disabled', true);
        //$(\"a.checkout-button.wc-forward\").addClass('disabled').html('Updating…');

        $.post( form.attr('action'), formData, function(resp) {
            // ajax response
            //$('.cart-collaterals').html(resp.html);
            $('.totalik').html(resp.total);

            el_qty.closest('.cart_item').find('.product-subtotal').html(resp.price);
            el_qty.closest('.totalik').find('.amount').html(resp.total);

            $('#update_cart').remove();
            $('#is_wac_ajax').remove();
            $('#cart_item_key').remove();

            $(\"input[name='update_cart']\").val('Пересчитать корзину');

            //$(\"a.checkout-button.wc-forward\").removeClass('disabled').html(resp.checkout_label);

            // when changes to 0, remove the product from cart
            if ( el_qty.val() == 0 ) {
                el_qty.closest('tr').remove();
            }
        },
        'json'
        );
    });
});
    </script>";
}

add_action('woocommerce_after_checkout_form', 'ap_change_btn_css');

function ap_change_btn_css(){ ?>

<script>
setTimeout(function(){ jQuery('input[type="submit"].button, a.button').removeClass('button').addClass('custom-btn'); }, 2000);
  </script>

	<?php
}


?>