<?php
/**
*
*
*
* @package WordPress
* @subpackage WP_TH
* @since 1.0
*/


/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/
function th_setup() {
	/*
	* Make theme available for translation.
	* Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/th
	* If you're building a theme based on Twenty Seventeen, use a find and replace
	* to change 'th' to the name of your theme in all the template files.
	*/
	// load_theme_textdomain( 'th' );

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
	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/

	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

}

add_action( 'after_setup_theme', 'th_setup' );

/**
* Replaces "[...]" (appended to automatically generated excerpts) with ... and
* a 'Continue reading' link.
*
* @since Twenty Seventeen 1.0
*
* @return string 'Continue reading' link prepended with an ellipsis.
*/
function th_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
	esc_url( get_permalink( get_the_ID() ) ),
	/* translators: %s: Name of current post */
	sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'th' ), get_the_title( get_the_ID() ) )
);
return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'th_excerpt_more' );

/**
* Handles JavaScript detection.
*
* Adds a `js` class to the root `<html>` element when JavaScript is detected.
*
* @since Twenty Seventeen 1.0
*/
function th_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'th_javascript_detection', 0 );

/**
* Add a pingback url auto-discovery header for singularly identifiable articles.
*/
function th_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'th_pingback_header' );
/**
* Enqueue scripts and styles.
*/
function th_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'th-style', get_stylesheet_uri() );
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr.js', array(), '1.0.0');
		wp_enqueue_script('jquery');
		wp_register_script('vendor', get_template_directory_uri() . '/assets/js/vendor/vendor.js', array('modernizr', 'jquery'), '1.0.0');
		wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('vendor'), '1.0.0');
		wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('plugins'), '1.0.0');

		wp_enqueue_script('main');
	}


}
add_action( 'wp_enqueue_scripts', 'th_scripts' );
