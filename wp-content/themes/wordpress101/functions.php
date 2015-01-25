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


/**** 
*
*	register custom post type
*  
****/
function create_posttype() {
	register_post_type( 
        'products',
		array(
			'labels' => array(
			'name' => __( '產品' ),
			'singular_name' => __( '產品' )
		    ),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => '',
		'supports' => array( 'title', 'editor', 'thumbnail'),
		'rewrite' => array('slug' => 'products'),
		)
	);				
}
add_action( 'init', 'create_posttype' );


/**** 
*
*	custom dashboard icon
*  
****/
function fontawesome_dashboard() {
  wp_enqueue_style('fontawesome', 
  'http:////netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css', 
  '', '4.0.3', 'all');
} 
add_action('admin_init', 'fontawesome_dashboard');

function fontawesome_icon_dashboard() {
    echo "<style type='text/css' media='screen'>
	           icon16.icon-media:before, 
                   #adminmenu .menu-icon-products div.wp-menu-image:before {
        	           font-family: Fontawesome !important;
        	           content: '\\f0f2';
                   }    		
	</style>";
}
add_action('admin_head', 'fontawesome_icon_dashboard');


/**** 
*
*	custom login screen
*  
****/
function my_login_screen() { ?>
    <style type="text/css">
        body.login{
		    background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/login-background.jpg) no-repeat center center fixed;
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    background-size: cover;        	
        }
        body.login div#login h1{

        }
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/the-information-logo.svg);
		    background-size: 170px 80px;
		    width: 170px;
		    height: 80px;
        }
        body.login div#login p a{
        	color: #ed403a;
        	font-weight: bold;
        }
        body.login div#login p a:hover{
        	color: #ed403a;
        	text-decoration: underline;
        }	
        body.login div#login #loginform{
        	background-color: rgba(255,255,255,0.7);
        }
        body.login div#login #loginform input:focus{
        	border-color: #ed403a;
        }
        body.login div#login #loginform .submit #wp-submit{
        	border-radius: 0px;
        	background-color: #ed403a;
        	border: none;
        }
        body.login div#login #loginform .submit #wp-submit:hover{
        	color: #000;
        }	                
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_screen' );

/**** 
*
*	custom taxonomy
*  
****/
function texonomy_init() {
    // create taxonomy
    register_taxonomy(
		'new-arrival',
		'products', /* post, page */
		array(
		    'label' => __( '新品新貌' ),
		    'rewrite' => array( 'slug' => 'new-arrival' ),
		    'update_count_callback' => '_update_post_term_count',		
		)
    );
}
add_action( 'init', 'texonomy_init' );

?>