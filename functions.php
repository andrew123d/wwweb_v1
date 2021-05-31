<?php
/**
 * Super remonty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Super_remonty
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'remonty_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function remonty_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Super remonty, use a find and replace
		 * to change 'remonty' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'remonty', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'remonty' ),
				'menu-2' => esc_html__( 'Footer-1', 'remonty' ),
				'menu-3' => esc_html__( 'Footer-2', 'remonty' ),
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
				'remonty_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'remonty_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function remonty_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'remonty_content_width', 640 );
}
add_action( 'after_setup_theme', 'remonty_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function remonty_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'remonty' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar 1 RU', 'remonty' ),
	// 		'id'            => 'sidebar-1-ru',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar 1 UA', 'remonty' ),
	// 		'id'            => 'sidebar-1-ua',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar 1 Eng', 'remonty' ),
	// 		'id'            => 'sidebar-1-eng',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar 1 De', 'remonty' ),
	// 		'id'            => 'sidebar-1-de',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar header - 1', 'remonty' ),
			'id'            => 'sidebar-header-1',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar header - 1 UA', 'remonty' ),
	// 		'id'            => 'sidebar-header-1-ua',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar header - 1 RU', 'remonty' ),
	// 		'id'            => 'sidebar-header-1-ru',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar header - 1 Eng', 'remonty' ),
	// 		'id'            => 'sidebar-header-1-eng',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar header - 1 de', 'remonty' ),
	// 		'id'            => 'sidebar-header-1-de',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar header - 2', 'remonty' ),
			'id'            => 'sidebar-header-2',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar header - 2 UA', 'remonty' ),
	// 		'id'            => 'sidebar-header-2-ua',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar header - 2 RU', 'remonty' ),
	// 		'id'            => 'sidebar-header-2-ru',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar header - 2 Eng', 'remonty' ),
	// 		'id'            => 'sidebar-header-2-eng',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar header - 2 de', 'remonty' ),
	// 		'id'            => 'sidebar-header-2-de',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar footer - 1', 'remonty' ),
			'id'            => 'sidebar-footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 1 UA', 'remonty' ),
	// 		'id'            => 'sidebar-footer-1-ua',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 1 RU', 'remonty' ),
	// 		'id'            => 'sidebar-footer-1-ru',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 1 Eng', 'remonty' ),
	// 		'id'            => 'sidebar-footer-1-eng',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 1 De', 'remonty' ),
	// 		'id'            => 'sidebar-footer-1-de',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar footer - 2', 'remonty' ),
			'id'            => 'sidebar-footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 2 UA', 'remonty' ),
	// 		'id'            => 'sidebar-footer-2-ua',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 2 Ru', 'remonty' ),
	// 		'id'            => 'sidebar-footer-2-ru',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 2 Eng', 'remonty' ),
	// 		'id'            => 'sidebar-footer-2-eng',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 2 de', 'remonty' ),
	// 		'id'            => 'sidebar-footer-2-de',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar footer - 3', 'remonty' ),
			'id'            => 'sidebar-footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 3 UA', 'remonty' ),
	// 		'id'            => 'sidebar-footer-3-ua',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 3 Ru', 'remonty' ),
	// 		'id'            => 'sidebar-footer-3-ru',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 3 Eng', 'remonty' ),
	// 		'id'            => 'sidebar-footer-3-eng',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 3 De', 'remonty' ),
	// 		'id'            => 'sidebar-footer-3-de',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );


	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar footer - 4', 'remonty' ),
			'id'            => 'sidebar-footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 4 UA', 'remonty' ),
	// 		'id'            => 'sidebar-footer-4-ua',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 4 Ru', 'remonty' ),
	// 		'id'            => 'sidebar-footer-4-ru',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 4 Eng', 'remonty' ),
	// 		'id'            => 'sidebar-footer-4-eng',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar footer - 4 De', 'remonty' ),
	// 		'id'            => 'sidebar-footer-4-de',
	// 		'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );

	register_sidebar(
		array(
			'name'          => esc_html__( 'page-footer-1', 'remonty' ),
			'id'            => 'Page-footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'page-footer-2', 'remonty' ),
			'id'            => 'Page-footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'remonty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


}
add_action( 'widgets_init', 'remonty_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function remonty_scripts() {
	wp_enqueue_style( 'remonty-boostrap-style', get_template_directory_uri().'/lib/bootstrap/css/bootstrap.min.css', array(), _S_VERSION );
	wp_style_add_data( 'remonty-boostrap-style', 'rtl', 'replace' );
	wp_enqueue_style( 'remonty-animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), _S_VERSION );
	wp_style_add_data( 'remonty-animate-style', 'rtl', 'replace' );	
	wp_enqueue_style( 'remonty-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'remonty-style', 'rtl', 'replace' );

	
	wp_enqueue_script( 'remonty-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'remonty-bootstrap-script', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'remonty-jquery', get_template_directory_uri() . '/lib/jquery/jquery-3.6.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'remonty-animation', get_template_directory_uri() . '/js/animation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'remonty_scripts',  'remonty-bootstrap-script', 'remonty-jquery', 'remonty-animation');

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

