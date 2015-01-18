<?php

/**** 
*
*	register wordpress menu
*  
****/
function register_my_menus() {
    register_nav_menus(
		array(
		      'main-menu' => __( '主選單' ),
			  'footer-menu' => __( 'Footer Menu' ),		      
		)
    );
}
add_action( 'init', 'register_my_menus' );

/**** 
*
*	enqueue js files
*  
****/ 
function add_js_method() {
	wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'add_js_method' );

/**** 
*
*	theme support post thumbnail
*  
****/
add_theme_support( 'post-thumbnails' );

?>