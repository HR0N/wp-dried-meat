<?php
/**
 * underscores functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscores
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
function underscores_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on underscores, use a find and replace
		* to change 'underscores' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'underscores', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'underscores' ),
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
			'underscores_custom_background_args',
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
add_action( 'after_setup_theme', 'underscores_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underscores_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'underscores_content_width', 640 );
}
add_action( 'after_setup_theme', 'underscores_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underscores_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'underscores' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'underscores' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'underscores_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underscores_scripts() {
	wp_enqueue_style( 'underscores-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_script( 'underscores-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_style( 'menu', get_template_directory_uri().'/css/menu.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/h-boobstrap.css');
    wp_enqueue_style( 'settings', get_template_directory_uri().'/css/settings.css');
    wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style( 'home', get_template_directory_uri().'/css/home.css');
    wp_enqueue_style( 'call-request', get_template_directory_uri().'/css/call-request.css');
//    wp_enqueue_style( 'gallery-grid', get_template_directory_uri().'/css/gallery-grid.css');
//    wp_enqueue_style( 'prices', get_template_directory_uri().'/css/prices.css');
    wp_enqueue_style( 'prices-v2', get_template_directory_uri().'/css/prices_v2.css');
    wp_enqueue_style( 'extra-info', get_template_directory_uri().'/css/extra-info.css');
    wp_enqueue_style( 'why_are_we', get_template_directory_uri().'/css/why_are_we.css');
    wp_enqueue_style( 'thank_you_page', get_template_directory_uri().'/css/thank_you_page.css');
    wp_enqueue_style( 'settings', get_template_directory_uri().'/css/settings.css');
    wp_enqueue_style( 'gallery-owl', get_template_directory_uri().'/css/gallery-owl.css');
    wp_enqueue_style( 'gallery-show', get_template_directory_uri().'/css/gallery-show.css');
    wp_enqueue_style( 'faq', get_template_directory_uri().'/css/faq.css');
    wp_enqueue_style( 'reviews', get_template_directory_uri().'/css/reviews.css');
    wp_enqueue_style( 'footer', get_template_directory_uri().'/css/footer.css');
    wp_enqueue_style( 'call_request_forms', get_template_directory_uri().'/css/call_request_forms.css');
    /*  Owl Carousel    */
    wp_enqueue_style( 'owl', get_template_directory_uri().'/libs/OwlCarousel2-2.3.4/assets/owl.carousel.css');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/libs/OwlCarousel2-2.3.4/assets/owl.theme.default.css');
    wp_enqueue_script( 'owl-script', get_template_directory_uri().'/libs/OwlCarousel2-2.3.4/owl.carousel.js');

	wp_style_add_data( 'underscores-style', 'rtl', 'replace' );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underscores_scripts' );

function init_classes(){
    wp_enqueue_script( 'darth_vader', get_template_directory_uri() . '/js/Darth_Vader.js');
    wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax.js');
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js');
    wp_enqueue_script( 'gallery-show', get_template_directory_uri() . '/js/gallery_show.js');
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.js');
    wp_enqueue_script( 'prices_v2_owl_gallery', get_template_directory_uri() . '/js/prices_v2_owl_gallery.js');
    wp_enqueue_script( 'faq', get_template_directory_uri() . '/js/faq.js');
    wp_enqueue_script( 'reviews', get_template_directory_uri() . '/js/reviews.js');
    wp_enqueue_script( 'tg-bot', get_template_directory_uri() . '/js/call_request_forms.js');
    wp_enqueue_script( 'localStorage', get_template_directory_uri() . '/js/localStorage.js');
    wp_enqueue_script( 'formsFill', get_template_directory_uri() . '/js/formsFill.js');
}
add_action("wp_footer", 'init_classes');
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



// todo:                                                                  . . : : A J A X : : . .
include_once('tgbot/telegram.php');


// todo:                                     . . : : C U S T O M _ R E C O R D _ T Y P E S : : . .
include_once('inc/custom_record_types.php');

// todo:                                                          . . : : S H O R T C O D E : : . .

add_shortcode('test_short_code', function ($attrs){
    return 'Love ur updates, '.$attrs['name'].'...';
});

// todo:                                                           . . : : F I L T E R S : : . .

add_filter('nav_menu_css_class', function ($classes, $item, $args, $depth){
    $newClasses = ['nav-item'];
    return $newClasses;
}, 10, 4);

add_filter('nav_menu_item_id', function ($id, $item, $args, $depth){
    return '';
}, 10, 4);

add_filter('nav_menu_link_attributes', function ($attrs, $item, $args, $depth){
    $attrs['class'] = 'nav-link';

    if($attrs['aria-current'] === 'page'){
        $attrs['class'] .= '';
    }
    return $attrs;
}, 10, 4);

/*add_filter('get_image_tag_class',function($class){
    $class .= ' img-fluid';
    return $class;
});*/

