<?php 
//? - ========================= REMOVE CSS GUTTENBERG & JSON HEAD ========================= -//
//? - ========================= REMOVE CSS GUTTENBERG & JSON HEAD ========================= -//
function remove_json_api () {
        
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


}
add_action( 'after_setup_theme', 'remove_json_api' );

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



function wpb_adding_scripts() { ?> 
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Bold.woff" as="font" type="font/woff" crossorigin> 
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Regular.woff" as="font" type="font/woff" crossorigin> 
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Medium.woff" as="font" type="font/woff" crossorigin> 
<link rel="preconnect" href="https://www.google-analytics.com/" crossorigin>
<?php 
	$parent_style = 'myjourney';
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/app.css' );
	wp_register_script('main', get_template_directory_uri() . '/app.bundle.js','','1.1', true);
	wp_enqueue_script('main');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );



//? - ========================= SUPORTE WEBP ========================= -//
//? - ========================= SUPORTE WEBP ========================= -//
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['webp'] = 'image/webp';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');




//? - ========================= ADD STYLE  ========================= -//
//? - ========================= ADD STYLE  ========================= -//
function styles_head() { ?>
	<style>
        @font-face{font-family: 'Aeonik-Bold'; font-display: fallback; src: url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Bold.eot'); src: url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Bold.eot?#iefix') format('embedded-opentype'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Bold.ttf') format('truetype'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Bold.woff') format('woff'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Bold.woff2') format('woff2'); font-weight: normal; font-style: normal;}

        @font-face{font-family: 'Aeonik-Regular'; font-display: fallback; src: url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Regular.eot'); src: url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Regular.eot?#iefix') format('embedded-opentype'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Regular.ttf') format('truetype'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Regular.woff') format('woff'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Regular.woff2') format('woff2'); font-weight: normal; font-style: normal;}

        @font-face{font-family: 'Aeonik-Medium'; font-display: fallback; src: url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Medium.eot'); src: url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Medium.eot?#iefix') format('embedded-opentype'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Medium.ttf') format('truetype'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Medium.woff') format('woff'), url('<?php echo get_template_directory_uri(); ?>/fonts/Aeonik-Medium.woff2') format('woff2'); font-weight: normal; font-style: normal;}

        @font-face{font-family: 'MaisonNeue-Book'; font-display: fallback; src: url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Book.eot'); src: url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Book.eot?#iefix') format('embedded-opentype'), url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Book.ttf') format('truetype'), url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Book.woff') format('woff'), url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Book.woff2') format('woff2'); font-weight: normal; font-style: normal;}

        @font-face{font-family: 'MaisonNeue-Medium'; font-display: fallback; src: url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Medium.eot'); src: url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Medium.eot?#iefix') format('embedded-opentype'), url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Medium.ttf') format('truetype'), url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Medium.woff') format('woff'), url('<?php echo get_template_directory_uri(); ?>/fonts/MaisonNeue-Medium.woff2') format('woff2'); font-weight: normal; font-style: normal;}
}


        </style>
	<?php }
add_action('wp_head', 'styles_head');





//? - ========================= OPTION PAGES ========================= -//
//? - ========================= OPTION PAGES ========================= -//
if( function_exists('acf_add_options_page') ) {
        //---- MENU FIXED
        //---- MENU FIXED
        acf_add_options_page(array(
                'page_title' 	=> 'Theme options',
                'menu_title'	=> 'Fixed Elements',
                'menu_slug' 	=> 'theme-options',
                'capability'	=> 'edit_posts',
                'parent_slug'	=> '',
                'position'      => false,
                'icon_url'      => false,
        ));
}