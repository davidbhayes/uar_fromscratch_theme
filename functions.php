<?php 

add_action( 'wp_enqueue_scripts', 'from_scratch_scripts' );
function from_scratch_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

