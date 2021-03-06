<?php
/**
 * Seofication functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Seofication
 */

if ( ! function_exists( 'seofication_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function seofication_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org.
	 * If you're building a theme based on Seofication, use a find and replace
	 * to change 'seofication' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'seofication' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// for custom logo
				add_theme_support( 'custom-logo', array(
					'height'      => 248,
					'width'       => 248,
					'flex-height' => true,
				) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Thumbnail sizes
				add_image_size( 'seofication-featured', 600, 600, true );
				
				add_image_size( 'seofication-featured-single', 980, 600, true );
				
				add_editor_style('editor-style.css');
				
				set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'seofication' ),
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

	// custom logo 
				if ( ! function_exists( 'seofication_custom_logo' ) ) :
				/**
			 	* Displays the optional custom logo.
			 	*
			 	*	 Does nothing if the custom logo is not available.
			 	*
			 	* @since Twenty Fifteen 1.5
			 	*/
				function seofication_custom_logo() {
				if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}
			}
				endif;

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'seofication_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'seofication_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function seofication_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'seofication_content_width', 640 );
}
add_action( 'after_setup_theme', 'seofication_content_width', 0 );


/*Add theme menu page*/
 
add_action('admin_menu', 'seofication_menu');

function seofication_menu() {
	
	$seofication_page_title = __("Seofication Pro",'seofication');
	
	$seofication_menu_title = __("Seofication Pro",'seofication');
	
	add_theme_page($seofication_page_title, $seofication_menu_title, 'edit_theme_options', 'seofication_pro', 'seofication_pro_page');
	
}

/*
**
** Premium Theme Feature Page
**
*/

function seofication_pro_page(){
	
	if ( is_admin() ) {
		include_once( get_template_directory(). '/inc/admin/premium-screen/index.php');
	} 
	
} 


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function seofication_widgets_init() {
	register_sidebar( array(
					'name'          => esc_html__( 'Sidebar', 'seofication' ),
					'id'            => 'sidebar-1',
					'description'   => esc_html__( 'Add widgets here.', 'seofication' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				) );

	register_sidebar(array(
					'id' => 'seo-footer1',
					'name' => esc_html__( 'Footer 1', 'seofication' ),
					'description'   => esc_html__( 'Add widgets here.', 'seofication' ),
					'before_widget' => '<section id="%1$s" class="widget col-sm-2 %2$s">',
					'after_widget' => '</section>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
				
				register_sidebar(array(
					'id' => 'seo-footer2',
					'name' => esc_html__( 'Footer 2', 'seofication' ),
					'description'   => esc_html__( 'Add widgets here.', 'seofication' ),
					'before_widget' => '<section id="%1$s" class="widget col-sm-2 %2$s">',
					'after_widget' => '</section>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
				register_sidebar(array(
					'id' => 'seo-footer3',
					'name' => esc_html__( 'Footer 3', 'seofication' ),
					'description'   => esc_html__( 'Add widgets here.', 'seofication' ),
					'before_widget' => '<section id="%1$s" class="widget col-sm-2 %2$s">',
					'after_widget' => '</section>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
				register_sidebar(array(
					'id' => 'seo-footer4',
					'name' => esc_html__( 'Footer 4', 'seofication' ),
					'description'   => esc_html__( 'Add widgets here.', 'seofication' ),
					'before_widget' => '<section id="%1$s" class="widget col-sm-2 %2$s">',
					'after_widget' => '</section>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
				register_sidebar(array(
					'id' => 'seo-footer5',
					'name' => esc_html__( 'Footer 5', 'seofication' ),
					'description'   => esc_html__( 'Add widgets here.', 'seofication' ),
					'before_widget' => '<section id="%1$s" class="widget col-sm-4 %2$s">',
					'after_widget' => '</section>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
			

}
add_action( 'widgets_init', 'seofication_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function seofication_scripts() {

		wp_enqueue_script( 'seofication-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

		wp_enqueue_script( 'seofication-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_style ( 'seofication-raleway-font','https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', array(), '1.0', 'all' );

	 	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/css/bootstrap.min.css',array(),'3.3.4' );

		wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.min.css',array(),'4.7.0' );

		wp_enqueue_style( 'seofication-style', get_stylesheet_uri() );

		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', true );
		
		wp_enqueue_script( 'seofication-custom-js', get_template_directory_uri() . '/js/seo-custom-js.js', array('jquery'), '3.3.4', true );

		}  

add_action( 'wp_enqueue_scripts', 'seofication_scripts' );


function seofication_admin_script($seofication_hook){
	
	if($seofication_hook != 'appearance_page_seofication_pro') {
		return;
	} 
    
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.min.css',array(),'4.7.0' );
	wp_enqueue_style( 'seofication-custom-css', get_template_directory_uri() .'/css/seofication-custom.css',array(),'1.0' );

}

add_action( 'admin_enqueue_scripts', 'seofication_admin_script' );

			
// Display an optional post thumbnail.
			if ( ! function_exists( 'seofication_post_thumbnail')) :
			
			function seofication_post_thumbnail() {
			
				if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			
					return;
			
				}
			
			
				if ( is_singular() ) :
			
				?>
			
			
				<div class="entry-summary">
			
					<?php the_post_thumbnail(); ?>
			
				</div><!-- .post-thumbnail -->
			
			
				<?php else : ?>
			
			
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>">
			
						<?php
			
							the_post_thumbnail('post-thumbnail', array( 'alt' => get_the_title() ));
			
						?>
			
					</a>
				</div>
			
			
			
				<?php endif; // End is_singular()
			
			}
			
			endif;
		
			
/**
 * Clean up the_excerpt()
 */
function seofication_excerpt_length($length) {
	
	if ( is_admin() ) {
        return $length;
    }else{
		return 50;
	}
	
}		

add_filter('excerpt_length', 'seofication_excerpt_length');

function seofication_excerpt_more($more) {
 
	if ( is_admin() ) {
		return $more;
	}

	$more = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'seofication' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $more;
 
}

add_filter('excerpt_more', 'seofication_excerpt_more');	

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';