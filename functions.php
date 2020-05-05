<?php


// Clear admin menu options
	add_action('admin_menu', function(){
		remove_menu_page('edit.php');
		remove_menu_page('edit-comments.php');
		//remove_menu_page('themes.php');
		remove_menu_page('tools.php');
		remove_post_type_support('page', 'editor');
	});		
		
// Remove oEmbed discovery links.
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action('wp_head', 'wp_oembed_add_host_js' );
	remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
	update_option( 'show_avatars', 0 );

// Hide admin bar
	add_filter('show_admin_bar', '__return_false');
// Funções para Limpar o Header
// https://www.youtube.com/watch?v=dwxIdLSK22o Color Picker
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');
add_theme_support( 'post-thumbnails' ); 

// Habilitar Custom Logo
function theme_prefix_setup() {	
	add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
	) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );



function wpb_adding_scripts() {
	wp_register_script('main', get_template_directory_uri() . '/app.bundle.js','','1.1', true);
	wp_enqueue_script('main');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
