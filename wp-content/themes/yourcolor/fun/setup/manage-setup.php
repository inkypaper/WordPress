<?php 
if ( ! function_exists( 'yourcolor_setup' ) ) :
function yourcolor_setup() {
	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 490, 640, true );
	add_image_size( 'slider', 220, 305, false );
	add_image_size( 'col', 290, 440, false );
	add_image_size( 'facebook', 100, 100, true );
	add_image_size( 'sliderSmall', 222, 282, true );
	
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top-menu'   => __( 'القائمة العلوية', 'YourColor' ),
		'footer-menu'   => __( 'القائمة السفلية', 'YourColor' ),
		'main-menu'   => __( 'القائمة الاساسية', 'YourColor' ),
	) );
}
endif;
add_action( 'after_setup_theme', 'yourcolor_setup' );

