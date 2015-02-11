<?php

define ("THEME_DIR",get_template_directory_uri());
//Remove Generator Tag
remove_action('wp_head','wp_generator');

//ENQUEUE STYLES
	function enqueue_styles() {

		wp_register_style( 'style' , THEME_DIR . '/css/scss/style.css', array(), '1','all');
		wp_enqueue_style( 'style' );
		
		wp_register_style( 'normalize', THEME_DIR . '/css/normalize.css' );
		wp_enqueue_style( 'normalize' );

		wp_register_style( 'bootstrap', THEME_DIR . '/css/bootstrap.css' );
		wp_enqueue_style( 'bootstrap' );

		wp_register_style( 'hint', THEME_DIR . '/css/hint.css' );
		wp_enqueue_style( 'hint' );
		
	}
	add_action( 'wp_enqueue_scripts' , 'enqueue_styles' );
//ENQUEUE SCRIPTS
	function enqueue_scripts() {
	
		wp_register_script( 'jquery' , THEME_DIR . '/js/jquery.js' );
		wp_enqueue_script ( 'jquery' );

		wp_register_script( 'classie' , THEME_DIR . '/js/classie.js' );
		wp_enqueue_script ( 'classie' );
	
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

//TWEAK ADMIN BAR ON FRONT-END
	if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}
	
//REGISTER NAVIGATION MENUS
register_nav_menus( array(
		'header' => 'Top Header Menu'
	));

//EXTEND AUTHOR CONTACT
function wpsites_add_remove_user_contact_fields( $contactmethods ) {
 
$contactmethods['twitter'] = 'Twitter';
$contactmethods['facebook'] = 'Facebook';
$contactmethods['Youtube'] = 'YouTube';
$contactmethods['linkedin'] = 'LinkedIn';
$contactmethods['skype'] = 'Skype';
$contactmethods['googleplus'] = 'Google Plus';
 
unset($contactmethods['aim']);
unset($contactmethods['yim']);
unset($contactmethods['jabber']);
 
return $contactmethods;
}
 
add_filter('user_contactmethods','wpsites_add_remove_user_contact_fields',10,1);

//REGISTER SIDEBARS
$args = array(
	'name' => __('Main Sidebar %d'),
	'id'   =>   'main-sidebar',
	'description' => 'All Main Sidebars Goes Here.',
	'class' => '',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>' );

register_sidebars(4,$args);

//CUSTOM EXCERPT LENGTH
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//REPLACE STRING [...] FOR EXCERPT
function new_excerpt_more($excerpt) {
	return '<a class="btn btn-more" href="' . get_permalink( get_the_ID() ) . '"> Read More </a>';
}
add_filter( 'excerpt_more','new_excerpt_more');

//ADD IMAGE SIZE
add_image_size('single-post',512,336);

//THEME SETTINGS PAGE
function setup_theme_admin_menus() {
    add_menu_page('Theme settings', 'Example theme', 'manage_options', 
        'tut_theme_settings', 'theme_settings_page');
         
    add_submenu_page('tut_theme_settings', 
        'Front Page Elements', 'Front Page', 'manage_options', 
        'tut_theme_settings', 'theme_front_page_settings'); 
}
 
function theme_settings_page() {
 
}
 
 add_action("admin_menu", "setup_theme_admin_menus");
//THEME SUPPORTS

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails', array( 'post' ) ); 

?>		