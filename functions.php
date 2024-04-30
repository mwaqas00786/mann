<?php
/**
 * mann_und_natur functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mann_und_natur
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
function mann_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mann_und_natur, use a find and replace
		* to change 'mann' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mann', get_template_directory() . '/languages' );

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
			'main-menu' => __( 'Main Menu' ),
			'footer' => esc_html__( 'Footer', 'mann' ),

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
			'mann_custom_background_args',
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
add_action( 'after_setup_theme', 'mann_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mann_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mann_content_width', 640 );
}
add_action( 'after_setup_theme', 'mann_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mann_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mann' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mann' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name' => 'Footer Section 1',
		'id' => 'footer-section-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
		) );
		register_sidebar( array(
		'name' => 'Footer Section 2',
		'id' => 'footer-section-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
		) );
		register_sidebar( array(
		'name' => 'Footer section 3',
		'id' => 'footer-section-3',
		'description' => 'Appears in the footer area',
		'before_widget' => ' ',
		'after_widget' => '',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
		) );
		register_sidebar( array(
			'name' => 'Footer section 4',
			'id' => 'footer-section-4',
			'description' => 'Appears in the footer area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
			) );
}
add_action( 'widgets_init', 'mann_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mann_scripts() {
	wp_enqueue_style( 'mann-bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0' );
	// wp_enqueue_style( 'mann-font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0' );
	wp_enqueue_style( 'mann-fontawesome-all.min','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0' );

	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	// wp_style_add_data( 'mann-style', 'rtl', 'replace' );

    wp_enqueue_script( 'mann-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'mann-function', get_template_directory_uri() . '/js/mann-functions.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mann_scripts' );

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );

    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );

    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );

    // Remove classic-themes CSS for backwards compatibility for button blocks.
    wp_dequeue_style( 'classic-theme-styles' );
}, 20 );

/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Appointment', 'Post Type General Name', 'mann' ),
			'singular_name'       => _x( 'Appointment', 'Post Type Singular Name', 'mann' ),
			'menu_name'           => __( 'Appointments', 'mann' ),
			'parent_item_colon'   => __( 'Parent Appointment', 'mann' ),
			'all_items'           => __( 'All Appointments', 'mann' ),
			'view_item'           => __( 'View Appointment', 'mann' ),
			'add_new_item'        => __( 'Add New Appointment', 'mann' ),
			'add_new'             => __( 'Add New', 'mann' ),
			'edit_item'           => __( 'Edit Appointment', 'mann' ),
			'update_item'         => __( 'Update Appointment', 'mann' ),
			'search_items'        => __( 'Search Appointment', 'mann' ),
			'not_found'           => __( 'Not Found', 'mann' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'mann' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'Appointments', 'mann' ),
			'description'         => __( 'Appointment news and reviews', 'mann' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'tax_appointment' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'appointments', $args );
	  
	}
// Add custom columns
function custom_post_type_columns($columns) {
    // Change the Title column name to "First Name"
    $columns['title'] = 'First Name';

    // Add custom columns before the "Author" column
    $new_columns = array();
	
    foreach ($columns as $key => $value) {
        if ($key === 'author') {
            $new_columns['last_name'] = 'Last Name';
            $new_columns['session_type'] = 'Session Type';
            $new_columns['email'] = 'Email';
            $new_columns['about'] = 'About';
            $new_columns['aknowledge'] = 'Aknowledge';
        }
        $new_columns[$key] = $value;
    }
    return $new_columns;
}
add_filter('manage_appointments_posts_columns', 'custom_post_type_columns');

// Populate custom column data
function custom_post_type_column_data($column, $post_id) {
    switch ($column) {
        case 'last_name':
            echo get_post_meta($post_id, 'appointment_lastname_meta_key', true);
            break;
        case 'session_type':
            echo get_post_meta($post_id, 'appointment_type_meta_key', true);
            break;
        case 'email':
            echo get_post_meta($post_id, 'appointment_email_meta_key', true);
            break;
        case 'about':
        the_content();
            break;
        case 'aknowledge':
            echo get_post_meta($post_id, 'appointment_akn_meta_key', true);
            break;
    }
}
add_action('manage_appointments_posts_custom_column', 'custom_post_type_column_data', 10, 2);
function enqueue_custom_admin_scripts() {
    wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/js/mann-admin-script.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'enqueue_custom_admin_scripts');
// Add customizer settings for header image
function theme_customizer_settings($wp_customize) {
    $wp_customize->add_section('header_image_section', array(
        'title' => __('Header Image', 'theme'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('header_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
        'label' => __('Upload Header Image', 'theme'),
        'section' => 'header_image_section',
        'settings' => 'header_image',
    )));
}
add_action('customize_register', 'theme_customizer_settings');
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'custom_post_type', 0 );

	// Register the custom widget
function register_custom_widget() {
    register_widget( 'Logo_Content_Widget' );
	register_widget( 'Contact_Us_Widget' );
	register_widget( 'Operating_Hour_Widget' );

}
add_action( 'widgets_init', 'register_custom_widget' );
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
 * Footer widgets
 */
require get_template_directory() . '/footer-widgets/logo-content.php';
require get_template_directory() . '/footer-widgets/contact-us.php';
require get_template_directory() . '/footer-widgets/operating-hour.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

