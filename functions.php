<?php
/**
 * hakiki-wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hakiki-wp
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
function hakiki_wp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on hakiki-wp, use a find and replace
		* to change 'hakiki-wp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'hakiki-wp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'hakiki-wp' ),
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
			'hakiki_wp_custom_background_args',
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
add_action( 'after_setup_theme', 'hakiki_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hakiki_wp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hakiki_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'hakiki_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hakiki_wp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hakiki-wp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hakiki-wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hakiki_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hakiki_wp_scripts() {
	wp_enqueue_style( 'hakiki-wp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hakiki-wp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hakiki-wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hakiki_wp_scripts' );

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

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

function add_filters_script() {
	if( is_page( array( 94, 453 ) ) ){
        wp_enqueue_script( 'filters-actua', get_template_directory_uri() . '/js/filters-actua.js', array(), null, true );
    }
}
add_action( 'wp_enqueue_scripts', 'add_filters_script' );

add_filter('wpcf7_form_elements', function ($content) {
	$content = preg_replace('/<div class="(.*?\bfloating\b.*?)">\s+<span.*?>(.*?)<\/span>\s+<label.*?for="(.*?)">(.*?)<\/label>\s*<\/div>/s', '<div class="$1"><span class="wpcf7-form-control-wrap" data-name="$3">$2<label for="$3">$4</label></span></div>', $content);
	return $content;
  });

  add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * WPML - Add language class to body element
 */
function append_language_class($classes) {
    $classes[] = 'lang-' . ICL_LANGUAGE_CODE;
    return $classes;
}
add_filter('body_class', 'append_language_class');

  /**
 * Show & Filters Blog 
 */
add_action('rest_api_init', function () {
	register_rest_route( '/hakiki-wp/v1', 'show-blog/', array(
			'methods'  => 'GET',
			'callback' => 'getBlog'
		));
});

function getBlog($request) {

	$data = $request->get_params();
	
	global $sitepress;
	$current_lang = $sitepress->get_current_language();
	$sitepress->switch_lang($data["langFilterBlog"]);
	
	$arrgsBlog = [
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'orderby' => 'publish_date',
		'order' => 'DESC',
		// 'meta_query' => array(
		// 	'relation' => 'OR',
		// 	array(
		// 	  'key'   => 'a_la_une',
		// 	  'value' =>  0,
		// 	  'compare' => '='
		// 	),
		// 	array(
		// 	  'key'   => 'a_la_une',
		// 	  'compare' => 'NOT EXISTS'
		// 	)
		// ),
	];

	$arrgsBlog["meta_query"][] = ['relation' => 'AND'];

	if(isset($data['categoryBlog']) && $data['categoryBlog'] !== "") {
		$arrgsBlog["cat"][] = intval($data['categoryBlog']);
	}

	$blogRender = new WP_Query($arrgsBlog);
	
	$totalCountBlog = $blogRender->found_posts;

  	$responseBlog = '';

	if($blogRender->have_posts() && $totalCountBlog > 0) {
		while($blogRender->have_posts()) : $blogRender->the_post();
			ob_start();
			$post_id = get_the_ID();
    		$language_code = apply_filters('wpml_post_language_details', null, $post_id)["language_code"];
			if(strtolower($data["langFilterBlog"]) === $language_code):
				get_template_part('template-parts/actua-card');
			endif;
			$responseBlog .= ob_get_clean();
		endwhile;
	}

	$response = new WP_REST_Response([
		'data' => [$responseBlog],
	]);

	$response->set_status(200);
	
	$sitepress->switch_lang($current_lang);
	
	return $response;

}

add_filter( 'register_post_type_args', 'wpse247328_register_post_type_args', 10, 2 );
function wpse247328_register_post_type_args( $args, $post_type ) {

    if ( 'avocat' === $post_type ) {
        $args['rewrite']['slug'] = 'team';
    }

    return $args;
}