<?php
/**
 * idealo2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package idealo2
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
function idealo2_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on idealo2, use a find and replace
		* to change 'idealo2' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'idealo2', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'idealo2' ),
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
			'idealo2_custom_background_args',
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
add_action( 'after_setup_theme', 'idealo2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function idealo2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'idealo2_content_width', 640 );
}
add_action( 'after_setup_theme', 'idealo2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function idealo2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'idealo2' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'idealo2' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'idealo2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function idealo2_scripts() {
	wp_enqueue_style( 'idealo2-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'idealo2-style', 'rtl', 'replace' );

	wp_enqueue_script( 'idealo2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'idealo2_scripts' );

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

/**
 * Load custom theme css.
 */
function idealo_theme_enqueue_scripts() {
    wp_enqueue_style('idealo-theme', get_stylesheet_uri());

    wp_enqueue_style(
        'idealo-style',
        get_template_directory_uri() . '/idealo.css',
        array('idealo-theme'),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'idealo_theme_enqueue_scripts');

function idealo_theme_mobile_enqueue_scripts() {
    wp_enqueue_style('idealo-theme-mobile', get_stylesheet_uri());

    wp_enqueue_style(
        'idealo-style-mobile',
        get_template_directory_uri() . '/idealo-mobile.css',
        array('idealo-theme-mobile'),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'idealo_theme_mobile_enqueue_scripts');

/**
 * Load Bootstrap
 */

function idealo_theme_bootstrap() {
    // Cargar el CSS de Bootstrap
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        array(), // Dependencias
        '5.3.0', // Versión
        'all' // Media
    );

    // Cargar el JS de Bootstrap
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        array('jquery'), // Dependencias (puedes eliminar 'jquery' si no lo necesitas)
        '5.3.0', // Versión
        true // Cargar en el footer
    );
}
add_action('wp_enqueue_scripts', 'idealo_theme_bootstrap');

/**
 * Load Font Awesome
 */
function idealo_add_fontawesome() {
    wp_enqueue_style(
        'fontawesome', // Handle único
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', // URL del CDN
        array(), // Dependencias (vacío porque no depende de otro estilo)
        '6.4.0' // Versión
    );
}
add_action('wp_enqueue_scripts', 'idealo_add_fontawesome');