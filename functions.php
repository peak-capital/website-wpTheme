<?php
/**
 * peak2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package peak2021
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.43' );
}

if ( ! function_exists( 'peak2021_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function peak2021_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on peak2021, use a find and replace
		 * to change 'peak2021' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'peak2021', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'peak2021' ),
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
				'peak2021_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'peak2021_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function peak2021_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'peak2021_content_width', 640 );
}
add_action( 'after_setup_theme', 'peak2021_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function peak2021_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'peak2021' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'peak2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'peak2021_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function peak2021_scripts() {
	wp_enqueue_style( 'peak2021-style', get_template_directory_uri() . '/style.min.css', array(), _S_VERSION );
	wp_style_add_data( 'peak2021-style', 'rtl', 'replace' );

	wp_enqueue_script( 'peak2021-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'peak2021_scripts' );

/**
 * Load CSS for the editor
 */
add_action( 'after_setup_theme', 'add_gutenberg_css' );
 
function add_gutenberg_css(){
 
  add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
  add_editor_style( 'style-editor.min.css' ); // tries to include style-editor.css directly from your theme folder
 
}

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

/**
 * Create custom post type 'Teammembers'
 */
function create_posttype() {
  register_post_type( 'teammember',
  // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Team members' ),
        'singular_name' => __( 'Team member' ),
      ),
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => 'teammembers',
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'permalinks', 'featured_image' ),
    )
  );
  register_post_type( 'founders',
  // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Founders' ),
        'singular_name' => __( 'Founder' ),
      ),
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => 'founders-archive',
    //'rewrite' => array('slug' => 'founders/%exercisetypes%', 'with_front' => false),
      'taxonomies' => array('businessmodel', 'founders-tag'),
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'permalinks', 'featured_image' ),
    )
  );
  flush_rewrite_rules(); 
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype', 0 );

function create_exercisetypes_hierarchical_taxonomy() {
  // Add new taxonomy, make it hierarchical like categories
  //first do the translations part for GUI
    $labels = array(
      'name' => _x( 'Business models', 'taxonomy general name' ),
      'singular_name' => _x( 'Business model', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Business models' ),
      'all_items' => __( 'All Business models' ),
      'parent_item' => __( 'Parent Business model' ),
      'parent_item_colon' => __( 'Parent Business model:' ),
      'edit_item' => __( 'Edit Business model' ), 
      'update_item' => __( 'Update Business model' ),
      'add_new_item' => __( 'Add New Business model' ),
      'new_item_name' => __( 'New Business model Name' ),
      'menu_name' => __( 'Business models' )
    );    
    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'business-model', 'with_front' => false ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true // Needed for tax to appear in Gutenberg editor
    );
  // Now register the taxonomy
    register_taxonomy('businessmodel', 'founders', $args);
  }
  //hook into the init action and call create_exercisetypes_hierarchical_taxonomy when it fires
  add_action( 'init', 'create_exercisetypes_hierarchical_taxonomy', 0 );

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';
require get_template_directory() . '/inc/custom-fields.php';


//Shortcode for displaying Team members
function display_teammembers() {
  echo '<div class="teammembers cards">';
      $args = array(  
        'post_type' => 'teammember',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        //'orderby’ => 'title', 
        //'order’ => 'ASC', 
      );
      global $more;
      $loop = new WP_Query( $args ); 
            
      while ( $loop->have_posts() ) { 
        $loop->the_post();
        echo '<div class="card">
          <div class="card-preview">
            <div class="card-preview-image">';
              the_post_thumbnail( 'teammember-photo-small' );
            echo '</div>
            <div class="card-preview-text">
              <h3 class="card-preview-title">';
                print the_title(); 
              echo '</h3>
              <div class="card-preview-subtitle">';
                the_content('', true); 
              echo '</div> 
                <svg class="ui-plus" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <line x1="25" x2="25" y2="48" stroke="black" stroke-width="2"/>
                  <line y1="23" x2="48" y2="23" stroke="black" stroke-width="2"/>
                </svg>
              </div>
            </div>';
          $more = 1;
          echo '<div class="card-full">';
            echo get_template_part( 'inc/inline', 'peak_logo.svg' );
            echo '<div class="card-full-image">';
              the_post_thumbnail( 'teammember-photo-full' );
            echo '</div>
              <div class="card-full-content">
                <h1 class="card-full-content-title">';
                  the_title(); 
                echo '</h1>';
                  the_content();
              echo '<button class="cards-nav-close"></button>
              <button class="cards-nav-next"></button>
              <button class="cards-nav-prev"></button>  
            </div>
          </div>
        </div>';
      }
      wp_reset_postdata(); 
  echo '</div>';
}
function outputbuffer_teammembers(){
    ob_start();             // turn on output buffering
    display_teammembers(); // put the output to the buffer
    return ob_get_clean();  // capture and return the buffer
}
add_shortcode( 'teammembers', 'outputbuffer_teammembers' ); 

/*-------------------------------
   Maintenance Mode
-------------------------------*/
// function wp_maintenance_mode() {
//   if ( !is_user_logged_in() ) {
//     wp_die('
//       <svg class="peak-logo-svg" width="97" height="97" viewBox="0 0 97 97" fill="none" xmlns="http://www.w3.org/2000/svg">
//       <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0585937 48.5198C0.0585937 21.7549 21.7549 0.0585938 48.5198 0.0585938C75.2837 0.0585938 96.981 21.7558 96.981 48.5198C96.981 75.2837 75.2847 96.981 48.5198 96.981C21.7549 96.981 0.0585937 75.2847 0.0585937 48.5198ZM14.6452 51.671H17.9561C23.3879 51.671 26.7573 49.0281 26.7573 44.6703C26.7573 40.3136 23.3879 37.6707 17.9561 37.6707H10.0264L10.0264 59.3971H14.6452V51.671ZM33.8066 41.7665H43.6819V37.6716H29.1879V59.3981H43.6819V55.3023H33.8066V50.3642H43.0723V46.2684H33.8066V41.7665ZM62.1715 57.654L62.8512 59.3962L67.8789 59.3962L59.1936 37.6707H54.2866L45.5731 59.3962H50.5687L51.149 57.9072C51.1968 57.7874 51.2464 57.6686 51.3048 57.5547C52.4169 55.3851 54.4716 53.9994 56.7211 53.9994C58.9093 53.9994 60.8948 55.2828 62.0332 57.3521C62.0858 57.4495 62.1325 57.5508 62.1715 57.654ZM74.2817 51.9232L77.4816 48.6649L83.4743 59.3991H89.3785L81.0593 45.0589L88.3891 37.6415H82.5716L74.2817 45.9314V37.6415H69.6571V59.3981H74.2817V51.9232ZM17.9574 41.7651H14.6465V47.5748H17.9574C20.5711 47.5748 22.024 46.529 22.024 44.67C22.024 42.811 20.572 41.7651 17.9574 41.7651ZM54.2316 50.0132C55.035 49.8019 55.8706 49.6909 56.7226 49.6909C57.5689 49.6909 58.3956 49.798 59.1893 50.0015L56.7246 43.6553L54.2316 50.0132Z" fill="black"/>
//       </svg>
//       <h1>Not ready yet!</h1><br />We are still working on our new web presence. Please check back later.
//     ');
//   }
// }
// add_action('get_header', 'wp_maintenance_mode');

/*-------------------------------
   Login Screen
-------------------------------*/
function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/peak-logo.svg);
      height:65px;
      width:320px;
      background-size: auto 100%;
      background-repeat: no-repeat;
      padding-bottom: 30px;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/*-------------------------------
   Global Variable function 
-------------------------------*/
function the_global_var( $variable ) {
  if ( $variable == 'email' ) {
    echo 'info@peak.capital';
  } else if ( $variable == 'twitter' ) {
    echo 'https://twitter.com/peakcapitalvc?lang=en';
  } else if ( $variable == 'medium' ) {
    echo 'https://medium.com/peak-capital';
  } else if ( $variable == 'linkedin' ) {
    echo 'https://www.linkedin.com/company/peak-capital';
  } else if ( $variable == 'youtube' ) {
    echo 'https://www.youtube.com/channel/UCuapubZr_LILWT8uxlWsreQ';
  } else if ( $variable == 'fundright' ) {
    echo 'fundright';
  } else if ( $variable == 'crunchbase' ) {
    echo 'https://www.crunchbase.com/organization/peak-capital';
  } else if ( $variable == 'instagram' ) {
    echo 'instagram';
  }
   else {
    echo 'not found';
  }
}

/*-------------------------------
* Put the Peak Colors in the editor
-------------------------------*/
add_theme_support( 'editor-color-palette', array(
  array(
    'name'  => __( 'Peak Background' ),
    'slug'  => 'brand-bg',
    'color'	=> '#FFFFFF',
  ),
  array(
    'name'  => __( 'Peak Black' ),
    'slug'  => 'brand-black',
    'color'	=> '#000000',
  ),
  array(
    'name'  => __( 'Peak Blue' ),
    'slug'  => 'brand-blue',
    'color'	=> '#000EDC',
  ),
  array(
    'name'  => __( 'Peak Pink' ),
    'slug'  => 'brand-pink',
    'color' => '#FF00FF',
  ),
  array(
    'name'  => __( 'Peak Green' ),
    'slug'  => 'brand-green',
    'color' => '#31FF3F',
  ),
  array(
    'name'  => __( 'Peak Cyan' ),
    'slug'  => 'brand-cyan',
    'color' => '#00FFFF',
  ),
  array(
    'name'  => __( 'Peak Yellow' ),
    'slug'  => 'brand-yellow',
    'color' => '#FFC600',
  ),
  array(
    'name'  => __( 'Peak Red' ),
    'slug'  => 'brand-yellow',
    'color' => '#F91C0E',
  ),
) );

// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

//------------------------
// Responsive image sizes
//------------------------
function peak_add_image_sizes() {
  add_image_size( 'hero', 1920, 1280 );
  add_image_size( 'founder-photo', 960, 960, true );
  add_image_size( 'teammember-photo-small', 320, 480, true );
  add_image_size( 'teammember-photo-full', 1280, 1920, true );
}
add_action('after_setup_theme', 'peak_add_image_sizes');

function peak_custom_sizes( $sizes ) {
  return array_merge( $sizes, array(
    'hero' => __( 'Hero image' ),
    'founder-photo' => __( 'Founder Photo' ),
    'teammember-photo-small' => __( 'Team member Small' ),
    'teammember-photo-full' => __( 'Team member Full' ),
    ) );
}
add_filter( 'image_size_names_choose', 'peak_custom_sizes' );

function my_content_image_sizes_attr( $sizes, $size, $alignment ) {
  $width = $size[0];
  $height = $size[1];

      if ( is_single() ) { // if blog post images
        $sizes = '(min-width: 1281px) 720px, (min-width: 900px) 49.68vw, (min-width: 700px) 648px, 100vw';
      }
      else if ( is_home() ) { // if blog page ( wordpress home is NOT website home!!! )
        $sizes = '(min-width: 600px) 50vw, 100vw';
      }
      else if ( is_page_template( 'page-team.php' ) && $width === 320 ) {
        $sizes = '(min-width: 769px) 25vw, calc(100vw - 2rem)';
      }
      else if ( is_page_template( 'page-founders.php' ) ) {
        $sizes = '(min-width: 769px) 66vw, 100vw';
      }
      else {
        if ( $width >= 1920 ) { //hero image
          $sizes = '100vw';
        } 
        if ( $width === 960 && $height === 960 ) { //founder photo
          $sizes = '(min-width: 769px) 33vw, 60vw';
        }
        if ( $width === 320 && $height === 480 ) { //team member small photo
          $sizes = '(min-width: 769px) 25vw, calc(100vw - 2rem)';
        }
        if ( $width === 1280 && $height === 1920 ) { //team member large photo
          $sizes = ' (min-width: 769px) 50vw, calc(100vw - 2rem)';
        }
      }
  return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'my_content_image_sizes_attr', 10, 3 );