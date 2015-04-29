<?php 

add_action( 'wp_enqueue_scripts', 'from_scratch_scripts' );
function from_scratch_scripts() {
	/* If using a child theme, auto-load the parent theme style. */
    if ( is_child_theme() ) {
        wp_enqueue_style( 'parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }

    /* Always load active theme's style.css. */
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'widgets_init', 'from_scratch_widgets_init' );
function from_scratch_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'from-scratch' ),
        'id' => 'sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'from-scratch' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
}

add_action( 'after_setup_theme', 'from_scratch_register_my_menu' );
function from_scratch_register_my_menu() {
  register_nav_menu( 'primary', 'Primary Navigation' );
}


function from_scratch_primary_menu() {
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'menu_class'      => 'primary-menu',
			'container_class' => 'primary-menu-container',
		)
	);
}

function from_scratch_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) )
}
add_action( 'after_setup_theme', 'from_scratch_theme_setup' );