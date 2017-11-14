<?php
/**
 * mimic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mimic
 */

if ( ! function_exists( 'mimic_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mimic_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mimic, use a find and replace
		 * to change 'mimic' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mimic', get_template_directory() . '/languages' );

		add_theme_support( 'html5', array( 'comment-list' ) );
		add_theme_support( 'post-formats', array( 'aside', 'gallery' ,'video') );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mimic' ),
						'topnav' => esc_html__( 'topnav', 'mimic' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mimic_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;
add_action( 'after_setup_theme', 'mimic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mimic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mimic_content_width', 640 );
}
add_action( 'after_setup_theme', 'mimic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mimic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mimic' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mimic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'footer logo', 'mimic' ),
		'id'            => 'footer1',
		'description'   => esc_html__( 'Add widgets here.', 'mimic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer menu', 'mimic' ),
		'id'            => 'footer2',
		'description'   => esc_html__( 'Add widgets here.', 'mimic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer menu 2', 'mimic' ),
		'id'            => 'footer3',
		'description'   => esc_html__( 'Add widgets here.', 'mimic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer contact us', 'mimic' ),
		'id'            => 'footer4',
		'description'   => esc_html__( 'Add widgets here.', 'mimic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer copyright', 'mimic' ),
		'id'            => 'footer5',
		'description'   => esc_html__( 'Add widgets here.', 'mimic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Modal', 'mimic' ),
		'id'            => 'footer6',
		'description'   => esc_html__( 'Add widgets here.', 'mimic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );




}
add_action( 'widgets_init', 'mimic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mimic_scripts() {
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'mimic-style', get_stylesheet_uri() );


	wp_enqueue_script("jquery");

	wp_enqueue_script( 'mimic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', '20151215', true );

	wp_enqueue_script( 'mimic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mimic_scripts' );

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
 * class-wp-bootstrap-comment-walker
 */
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/class-wp-bootstrap-comment-walker.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * change the length of Excerpt
 * call:  mimic_excerpt(19)
 */
function mimic_excerpt($limit)
{
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
	return $excerpt;
}

/**
 * Function close
 */
/**
 * change the length of content
 * call:  mimic_content(19)
 */
function mimic_content($limit)
{
	$content = explode(' ', get_the_content(), $limit);
	if (count($content) >= $limit) {
		array_pop($content);
		$content = implode(" ", $content) . '...';
	} else {
		$content = implode(" ", $content);
	}
	$content = preg_replace('/\[.+\]/', '', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

/**
 * Function close
 */


/**
 * Numaric post function
 * call: mimic_numeric_posts_nav();
 */
function mimic_numeric_posts_nav()
{
	if (is_singular())
		return;
	global $wp_query;
	/** Stop execution if there's only 1 page */
	if ($wp_query->max_num_pages <= 1)
		return;
	$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
	$max = intval($wp_query->max_num_pages);
	/**    Add current page to the array */
	if ($paged >= 1)
		$links[] = $paged;
	/**    Add the pages around the current page to the array */
	if ($paged >= 3) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if (($paged + 2) <= $max) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	echo '<div class="navigation"><ul>' . "\n";
	/**    Previous Post Link */
	if (get_previous_posts_link())
		printf('<li>%s</li>' . "\n", get_previous_posts_link());
	/**    Link to first page, plus ellipses if necessary */
	if (!in_array(1, $links)) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
		if (!in_array(2, $links))
			echo '<li>…</li>';
	}
	/**    Link to current page, plus 2 pages in either direction if necessary */
	sort($links);
	foreach ((array)$links as $link) {
		$class = $paged == $link ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
	}
	/**    Link to last page, plus ellipses if necessary */
	if (!in_array($max, $links)) {
		if (!in_array($max - 1, $links))
			echo '<li>…</li>' . "\n";
		$class = $paged == $max ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
	}
	/**    Next Post Link */
	if (get_next_posts_link())
		printf('<li>%s</li>' . "\n", get_next_posts_link());
	echo '</ul></div>' . "\n";
}

function overwritecss(){
	wp_enqueue_style('mimic-overwrite', get_template_directory_uri() . '/css/overwrite.css');
	wp_enqueue_style('mimic-mobile', get_template_directory_uri() . '/css/mobile.css');
	wp_enqueue_style('mimic-font', get_template_directory_uri() . '/css/fonts.css');

}