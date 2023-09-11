<?php
/**
 * tree-hugger-wood functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tree-hugger-wood
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
function tree_hugger_wood_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tree-hugger-wood, use a find and replace
		* to change 'tree-hugger-wood' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tree-hugger-wood', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Header Menu', 'tree-hugger-wood' ),
			'mobile-menu' => esc_html__( 'Mobile Header Menu', 'tree-hugger-wood' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'tree-hugger-wood' ),
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
			'tree_hugger_wood_custom_background_args',
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
add_action( 'after_setup_theme', 'tree_hugger_wood_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tree_hugger_wood_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tree_hugger_wood_content_width', 640 );
}
add_action( 'after_setup_theme', 'tree_hugger_wood_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tree_hugger_wood_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tree-hugger-wood' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tree-hugger-wood' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tree_hugger_wood_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tree_hugger_wood_scripts() {

	wp_enqueue_style('tree-hugger-wood-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-wood-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-wood-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-wood-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-wood-datetimepicker-css', get_template_directory_uri() . '/assets/css/jquery.datetimepicker.min.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-wood-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-wood-simplebar-css', get_template_directory_uri() . '/assets/css/simplebar.css', array(), '20151215');
	// wp_enqueue_style('tree-hugger-wood-sticky', get_template_directory_uri() . '/assets/css/sticky.css', array(), '20151215');

	wp_enqueue_style( 'tree-hugger-wood-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script('jquery');
	wp_style_add_data( 'tree-hugger-wood-style', 'rtl', 'replace' );

	wp_enqueue_script('tree-hugger-wood-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-wood-simplebar-js', get_template_directory_uri() . '/assets/js/simplebar.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-wood-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-wood-datetimepicker', get_template_directory_uri() . '/assets/js/jquery.datetimepicker.full.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-wood-fancybox-min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-wood-wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-wood-font-awesome-min', get_template_directory_uri() . '/assets/js/font-awesome.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-wood-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), rand(1000, 10000), true);
	wp_localize_script('tree-hugger-wood-custom', 'custom_call', ['ajaxurl' => admin_url('admin-ajax.php'), 'homeurl' => home_url()]);


	// wp_enqueue_style( 'tree-hugger-wood-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'tree-hugger-wood-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tree-hugger-wood-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tree_hugger_wood_scripts' );

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

// Filter the output of logo to fix Googles Error about itemprop logo
add_filter( 'get_custom_logo', 'change_html_custom_logo' );
function change_html_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
	$site_name = get_bloginfo( 'name' );
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" title="'.$site_name.'" itemprop="url">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
				"data-no-lazy" => "1",
				'alt'  => $site_name,
            ) )
        );
    return $html;   
}
function register_acf_options_pages() {

    // Check function exists.
	if( !function_exists('acf_add_options_page') )
		return;

    // register options page.
	$option_page = acf_add_options_page(array(
		'page_title'    => __('Options Settings'),
		'menu_title'    => __('Options'),
		'menu_slug'     => 'options-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}
// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');

add_action('wp_ajax_gallery_tabbing','gallery_image_tabbing');
add_action( 'wp_ajax_nopriv_gallery_tabbing', 'gallery_image_tabbing' );

function gallery_image_tabbing() {	
	$frontpage_id = get_option( 'page_on_front' );
	$index = $_POST['id'];
	if( have_rows('gallery_repeater',$frontpage_id) ){			
		while( have_rows('gallery_repeater',$frontpage_id) ) : the_row();
			if(get_row_index() == $index){ 	
				$service_details_images = get_sub_field('gallery_images');
                if(isset($service_details_images) && !empty($service_details_images)) {
                foreach( $service_details_images as $image ):
            ?>    
             <div class="col-lg-12">
				<div class="gallery-img back-img" style="background-image: url('<?php echo $image; ?>');"></div>
			</div>
            <?php
                endforeach; 
                }
			}
			
		endwhile;
	}
	wp_die();
}