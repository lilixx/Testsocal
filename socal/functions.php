<?php
/**
 * Socal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Socal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function socal_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Socal, use a find and replace
		* to change 'socal' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'socal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'socal' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'socal_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'socal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function socal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'socal_content_width', 640 );
}
add_action( 'after_setup_theme', 'socal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function socal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'socal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'socal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( 
		array(
			'name'          => 'Telephone',
			'id'            => 'header_telephone',
			'description'   => 'This widget area discription',
			'before_widget' => '<section class="header-telephone p-3">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar( 
		array(
			'name'          => 'Email',
			'id'            => 'header_email',
			'description'   => 'This widget area discription',
			'before_widget' => '<section class="header-email p-3">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar( 
		array(
			'name'          => 'Appointment Email',
			'id'            => 'header_appoinment',
			'description'   => 'This widget area discription',
			'before_widget' => '<section class="header-appointment p-3 bg-skyblue">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar( 
		array(
			'name'          => 'Footer area Content',
			'id'            => 'footer_area_content',
			'description'   => 'This widget area discription',
			'before_widget' => '<section class="footer-area footer-area-content logo">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		)
	);		
	
	register_sidebar( 
		array(
			'name'          => 'Footer area Quick menu',
			'id'            => 'footer_area_quickmenu',
			'description'   => 'This widget area discription',
			'before_widget' => '<section class="footer-area footer-area-quickmenu py-4">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		)
	);
	
	register_sidebar( 
		array(
			'name'          => 'Footer area Services',
			'id'            => 'footer_area_service',
			'description'   => 'This widget area discription',
			'before_widget' => '<section class="footer-area footer-area-service py-4">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar( 
		array(
			'name'          => 'Footer area Shedule',
			'id'            => 'footer_area_shedule',
			'description'   => 'This widget area discription',
			'before_widget' => '<section class="footer-area footer-area-shedule pt-4 mt-2 d-grid justify-content-center">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar( 
		array(
			'name'          => 'Footer area Logo',
			'id'            => 'footer_area_logo',
			'description'   => 'This widget area discription',
			'before_widget' => '<section class="footer-area footer-area-logoisning pt-4 mt-2">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);	
}
add_action( 'widgets_init', 'socal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function socal_scripts() {
	wp_enqueue_style( 'socal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'socal-style', 'rtl', 'replace' );

	wp_enqueue_script( 'socal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//font
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;900&display=swap', false );

	//add Bostrap
	wp_enqueue_style( 'bootstrap_5', get_stylesheet_directory_uri() .'/css/bootstrap.min.css');
	wp_enqueue_script( 'bootstrap_js_5', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20151215', true );

	//home
	if ( is_page(5) ) {
		wp_enqueue_style( 'home_css', get_stylesheet_directory_uri() .'/css/home.css');		
	}
}
add_action( 'wp_enqueue_scripts', 'socal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// add svg
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

