<?php
/**
 * Pacific Art Stone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pacific_Art_Stone
 */

if ( ! function_exists( 'pacific_art_stone_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pacific_art_stone_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Pacific Art Stone, use a find and replace
		 * to change 'pacific-art-stone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pacific-art-stone', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pacific-art-stone' ),
            //'collection-menu' => __('Collection Menu')
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
		add_theme_support( 'custom-background', apply_filters( 'pacific_art_stone_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'pacific_art_stone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pacific_art_stone_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pacific_art_stone_content_width', 640 );
}
add_action( 'after_setup_theme', 'pacific_art_stone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pacific_art_stone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pacific-art-stone' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pacific-art-stone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pacific_art_stone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pacific_art_stone_scripts() {
	wp_enqueue_style( 'pacific-art-stone-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pacific-art-stone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'pacific-art-stone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pacific_art_stone_scripts' );

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

//add theme options

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        //'capability'	=> 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Social Media Links',
        'menu_title' => 'Social Media',
        'parent_slug' => 'theme-general-settings',
    ));


// Google Maps
    function my_acf_init()
    {

        acf_update_setting('google_api_key', 'AIzaSyDNHTS0hn1qceMzMU-FSm9u4_d0ftOLlsI');
    }

    add_action('acf/init', 'my_acf_init');

    add_filter('acf/settings/google_api_key', function () {
        return 'AIzaSyDNHTS0hn1qceMzMU-FSm9u4_d0ftOLlsI';
    });


    function my_theme_add_scripts()
    {
        wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB1-c8-tn_YTg6vzyjqF-_NlHhRetOur_4', array(), '3', true);
        wp_enqueue_script('google-map-init', get_template_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true);
    }

    add_action('wp_enqueue_scripts', 'my_theme_add_scripts');

    function my_acf_google_map_api($api)
    {

        $api['key'] = 'AIzaSyB1-c8-tn_YTg6vzyjqF-_NlHhRetOur_4';

        return $api;

    }

    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// remove automatic image link (because of the stone collectin page)

    function rkv_imagelink_setup() {
        $image_set = get_option( 'image_default_link_type' );

        if ($image_set !== 'none') {
            update_option('image_default_link_type', 'none');
        }
    }
    add_action('admin_init', 'rkv_imagelink_setup', 10);

    /* dump() - makes for easy debugging. <?php dump($post); ?> */
    function dump($obj) {
        echo "<pre>";
        print_r($obj);
        echo "</pre>";
    }

    //enqueue google fonts
    function wpb_add_google_fonts() {

        wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet', false );
    }

    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

    //register custom headers
    add_theme_support( 'custom-header' );

    /*
     * CUSTOMIZING THE DASHBOARD
     * */

    //link at bottom of page
    function change_admin_footer(){
        echo '<span id="footer-note">From your friends at <a href="http://www.kennedyanderson.ca" target="_blank">Kennedy Anderson Group</a>.</span>';
    }
    add_filter('admin_footer_text', 'change_admin_footer');

    //[regular brochure quick link]
    function pas_brochure_quick_link_func( $atts ){

            return '<h1>brochure bee</h1>';
}
    add_shortcode( 'brochure', 'pas_brochure_quick_link_func' );
    
}

