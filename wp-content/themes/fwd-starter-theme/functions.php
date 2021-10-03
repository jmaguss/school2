<?php
/**
 * FWD Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FWD_Starter_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.2.3' );
}

if ( ! function_exists( 'fwd_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fwd_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on FWD Starter Theme, use a find and replace
		 * to change 'fwd' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fwd', get_template_directory() . '/languages' );

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
				'header' => esc_html__( 'Header Menu Location', 'fwd' ),
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
				'navigation-widgets',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fwd_custom_background_args',
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
				'height'      			=> 250,
				'width'       			=> 250,
				'flex-width'  			=> true,
				'flex-height' 			=> true,
				// 'unlink-homepage-logo' 	=> true,
			)
		);

		/**
		 * Add support for Block Editor features.
		 *
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
		 */
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		// add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'fwd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function fwd_content_width() {
// 	// This variable is intended to be overruled from themes.
// 	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
// 	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
// 	$GLOBALS['content_width'] = apply_filters( 'fwd_content_width', 960 );
// }
// add_action( 'after_setup_theme', 'fwd_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fwd_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fwd' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fwd' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fwd_widgets_init' );



// Portrait Blog Size - 200px width, 250px height, hard crop
add_image_size( 'portrait-blog', 200, 250, true );
add_image_size( 'blog-posts', 300, 257, true );

/**
 * Enqueue scripts and styles.
 */
function fwd_scripts() {
	wp_enqueue_style( 'fwd-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fwd-style', 'rtl', 'replace' );
	wp_enqueue_style( 
    'fwd-googlefonts', 
    "https://fonts.googleapis.com/css2?family=Yaldevi&display=swap",
    array()
);


	wp_enqueue_script( 'fwd-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fwd_scripts' );

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

//requite CPT and taxonomies
require get_template_directory() .'/inc/cpt-taxonomy.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//switch to classic editor
function fwd_post_filter( $use_block_editor, $post ) {
	//id of students page 
		$page_ids = array( 30, 89, 88, 87, 86, 85, 84);
		if ( in_array( $post->ID, $page_ids ) ) {
				return false;
		} else {
				return $use_block_editor;
		}
	}
	add_filter( 'use_block_editor_for_post', 'fwd_post_filter', 10, 2 );

//set a block template for the students page
function fwd_block_editor_templates() {
	// Replace '14' with the Page ID
	if ( isset( $_GET['post'] ) && '41' == $_GET['post'] ) {
			$post_type_object = get_post_type_object( 'page' );
			$post_type_object->template = array(
					// define blocks here...
			);
	}
}
add_action( 'init', 'fwd_block_editor_templates' );

// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt() {
	global $post;
	$text = get_field('biography'); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 25; // 20 words
		$excerpt_more = '</br><a class="read-more" href="'. get_permalink() .'">Read more about the student…</a>';
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}


/**
 * Get taxonomies terms links.
 *
 * @see get_object_taxonomies()
 */
function wpdocs_custom_taxonomies_terms_links() {
	// Get post by post ID.
	if ( ! $post = get_post() ) {
			return '';
	}

	// Get post type by post.
	$post_type = $post->post_type;

	// Get post type taxonomies.
	$taxonomies = get_object_taxonomies( $post_type, 'objects' );

	$out = array();

	foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

			// Get the terms related to post.
			$terms = get_the_terms( $post->ID, $taxonomy_slug );

			if ( ! empty( $terms ) ) {
					
					foreach ( $terms as $term ) {
							$out[] = sprintf( '<p>Specialty:<a href="%1$s"> %2$s</a></li>',
									esc_url( get_term_link( $term->slug, $taxonomy_slug ) ),
									esc_html( $term->name )
							);
					}
					$out[] = "\n</ul>\n";
			}
	}
	return implode( '', $out );
}






