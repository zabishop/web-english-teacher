<?php
/**
 * thebox functions and definitions
 *
 * @package thebox
 * @since thebox 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since thebox 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 598; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'thebox_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since thebox 1.0
 */
 
function thebox_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );
	
	/**
	* Load the Theme Options Page for social media icons
	*/
	require get_template_directory() . '/inc/theme-options.php';
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on thebox, use a find and replace
	 * to change 'thebox' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'thebox', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 600, 9999 ); //600 pixels wide (and unlimited height)
	
	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'thebox' ),
		'secondary' => __( 'Secondary Menu', 'thebox' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // thebox_setup
add_action( 'after_setup_theme', 'thebox_setup' );


/**
 * Return the Google font stylesheet URL, if available.
 *
 * @since The Box 1.0
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function thebox_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'thebox' );

	/* Translators: If there are characters in your language that are not
	 * supported by Bitter, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$oxygen = _x( 'on', 'Oxygen font: on or off', 'thebox' );

	if ( 'off' !== $source_sans_pro || 'off' !== $oxygen ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro )
			$font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';

		if ( 'off' !== $oxygen )
			$font_families[] = 'Oxygen:300,400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}


/**
 * Enqueue scripts and styles for the front end.
 *
 * @since The Box 1.0
 *
 * @return void
 */
 
function thebox_scripts() {

	// Add Source Sans Pro and Oxygen fonts, used in the main stylesheet.
	wp_enqueue_style( 'thebox-fonts', thebox_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'icon-fonts', get_template_directory_uri() . '/icon-fonts.css', array(), '1.0' );

	// Loads our main stylesheet.
	wp_enqueue_style( 'thebox-style', get_stylesheet_uri(), array(), '2014-05-13' );
	
	
	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'thebox_scripts' );


/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
 
function thebox_register_custom_background() {
	$args = array(
		'default-color' => 'f0f3f5',
		'default-image' => '',
	);

	$args = apply_filters( 'thebox_custom_background_args', $args );
	
	add_theme_support( 'custom-background', $args );
	
}
add_action( 'after_setup_theme', 'thebox_register_custom_background' );


/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since thebox 1.0
 */
 
function thebox_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar Primary', 'thebox' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',	
	) );
	register_sidebar( array(
		'name' => __( 'Footer', 'thebox' ),
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'thebox_widgets_init' );


/**
 * Implement the Custom Header feature
 */
 
require( get_template_directory() . '/inc/custom-header.php' );


function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 * Implement Custom Color feature
 */

function thebox_custom_color_register( $wp_customize ) {
	$colors = array();
	
	$colors[] = array(
	'slug'=>'color_primary', 
	'default' => '#0fa5d9',
	'label' => __('Primary Color ', 'thebox')
	);
	
	foreach( $colors as $color ) {
	// SETTINGS
	$wp_customize->add_setting(
		$color['slug'], array(
			'default' => $color['default'],
			'type' => 'option', 
			'capability' => 
			'edit_theme_options'
		)
	);
	// CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$color['slug'], 
			array('label' => $color['label'], 
			'section' => 'colors',
			'settings' => $color['slug'])
		)
	);
	}
	
}

add_action( 'customize_register', 'thebox_custom_color_register' );


/**
 * Add Custom CSS to Header
 */

function add_css_styles() { ?>


<?php	
	$color_primary = get_option('color_primary');
?>

<style type="text/css">
	
	.main-navigation > div > ul,
	#content input#submit:hover,
	#content .entry-time,
	#content button,
	#content input[type="button"],
	#content input[type="reset"],
	#content input[type="submit"] {
	background-color: <?php echo $color_primary; ?>;	
	}
	
	.site-header .main-navigation ul ul a:hover,
    .site-header .main-navigation ul ul a:focus,
    .site-header h1.site-title a:hover,
    #nav-below a,
    .entry-summary a,
    .entry-content a,
    #content .entry-title a:hover,
    #content .entry-title a:focus,
    #content .entry-title a:active,
    #content .cat-links .icon-font,
    #content .tags-links .icon-font,
    #content .more-link,
    #content .entry-content a,
    #content .entry-meta a,
    #content .comments-area a,
    #content .page-title span,
	#content #tertiary td a,
	#secondary a,
	#secondary .widget_recent_comments a.url { 
    color: <?php echo $color_primary; ?>;
    }
   
    #content .edit-link a {
	border-color: <?php echo $color_primary; ?>;
    }
    
</style>

    <?php
}

add_action('wp_head', 'add_css_styles');


/*
 * Change excerpt text
 *
 */
function thebox_excerpt($num) {
	global $post;
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)."... <br><a class=\"more-link\" href='" .get_permalink($post->ID) ." '>".__('Read more', 'thebox')." &raquo;</a>";
	echo $excerpt;
    }
    
    