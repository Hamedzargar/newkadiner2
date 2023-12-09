<?php
/**
 * newkadiner functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newkadiner
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
function newkadiner_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on newkadiner, use a find and replace
		* to change 'newkadiner' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'newkadiner', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'newkadiner' ),
			'menu-2' => esc_html__( 'secondary', 'newkadiner' ),
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
			'newkadiner_custom_background_args',
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
add_action( 'after_setup_theme', 'newkadiner_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newkadiner_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newkadiner_content_width', 640 );
}
add_action( 'after_setup_theme', 'newkadiner_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newkadiner_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'newkadiner' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'newkadiner' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'newkadiner_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function newkadiner_scripts() {
	wp_enqueue_style( 'newkadiner-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'newkadiner-style', 'rtl', 'replace' );
	wp_enqueue_style( 'layout-style', get_template_directory_uri().'/layout.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri(). '/swiper/swiper-bundle.min.css' , array(), _S_VERSION );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'newkadiner-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newkadiner-main', get_template_directory_uri() . '/js/kadinermain.js', array('jquery'), _S_VERSION, true );
    if(is_shop()){
        wp_enqueue_script( 'archive-product-script', get_template_directory_uri() . '/js/archive-product.js', array('jquery'), _S_VERSION, true );
    }
    if(is_singular('product')){
        wp_enqueue_script( 'single-product-script', get_template_directory_uri() . '/js/single-product.js', array('jquery'), _S_VERSION, true );
    }
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newkadiner_scripts' );

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
// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

function track_post_views() {
    if (is_single() && !is_bot()) {
        $post_id = get_the_ID();
        $views = get_post_meta($post_id, 'post_views', true);

        $user_has_visited = isset($_COOKIE['visited_post_' . $post_id]);

        if (!$user_has_visited) {
            $views = ($views) ? $views + 1 : 1;
            update_post_meta($post_id, 'post_views', $views);

            setcookie('visited_post_' . $post_id, 'yes', time() + 24 * 3600, '/');
        }
    }
}

add_action('wp', 'track_post_views');

function is_bot() {
    $bots = array(
        'Googlebot',
        'Bingbot',
        'Slurp',
        'DuckDuckBot',
    );

    foreach ($bots as $bot) {
        if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false) {
            return true;
        }
    }
    return false;
}

function display_post_views() {
    $post_id = get_the_ID();
    $views = get_post_meta($post_id, 'post_views', true);
    echo ($views ? $views : 0);
}

// function pagination_bar() {
// 	global $wp_query;

// 	$total_pages = $wp_query->max_num_pages;

// 	if ($total_pages > 1){
// 		global $wp_query;
// 		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
// 		echo paginate_links(array(
// 			'base' =>@add_query_arg('paged','%#%'),
// 			'format' => '/page/%#%',
// 			'current' => $current,
// 			'total' => $total_pages,
// 			'next_text' => '<span class="leftArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#3f3f3f" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m20.5 26.5-12-12 12-12"></path></svg></span>',
// 			'prev_text' => '<span class="rightArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#3f3f3f" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m8.5 2.5 12 12-12 12"></path></svg></span>'
// 		));
// 	}
// }

function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        global $wp_query;
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        $prev_link = get_previous_posts_link('قبلی');
        $next_link = get_next_posts_link('بعدی', $total_pages);

        if ($prev_link || $next_link) {
            echo '<div class="pagination">';
            if ($prev_link) {
                echo '<span class="prev"><svg height="10" width="10" fill="#767676" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.881 511.881" xml:space="preserve" transform="rotate(-90)"><path d="M248.36 263.428a10.623 10.623 0 0 0 15.04 0L508.733 18.095c4.053-4.267 3.947-10.987-.213-15.04a10.763 10.763 0 0 0-14.827 0l-237.76 237.76L18.173 3.054c-4.266-4.16-10.986-4.053-15.146.214a10.763 10.763 0 0 0 0 14.827L248.36 263.428z"/><path d="M508.627 248.388c-4.267-4.053-10.773-4.053-14.933 0l-237.76 237.76-237.76-237.76c-4.267-4.053-10.987-3.947-15.04.213a10.763 10.763 0 0 0 0 14.827l245.333 245.333a10.623 10.623 0 0 0 15.04 0L508.84 263.428c4.053-4.267 3.947-10.987-.213-15.04z"/></svg>' . $prev_link . '</span>';
            }
            if ($next_link) {
                echo '<span class="next"><svg height="10" width="10" fill="#767676" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.881 511.881" xml:space="preserve" transform="rotate(90)"><path d="M248.36 263.428a10.623 10.623 0 0 0 15.04 0L508.733 18.095c4.053-4.267 3.947-10.987-.213-15.04a10.763 10.763 0 0 0-14.827 0l-237.76 237.76L18.173 3.054c-4.266-4.16-10.986-4.053-15.146.214a10.763 10.763 0 0 0 0 14.827L248.36 263.428z"/><path d="M508.627 248.388c-4.267-4.053-10.773-4.053-14.933 0l-237.76 237.76-237.76-237.76c-4.267-4.053-10.987-3.947-15.04.213a10.763 10.763 0 0 0 0 14.827l245.333 245.333a10.623 10.623 0 0 0 15.04 0L508.84 263.428c4.053-4.267 3.947-10.987-.213-15.04z"/></svg>' . $next_link . '</span>';
            }
            echo '</div>';
        }
    }
}


function kadiner_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
	'thumbnail_image_width' => 150,
	'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 2,
				'max_rows'        => 8,
				'default_columns' => 4,
				'min_columns'     => 2,
				'max_columns'     => 5,
			),
	) );
	}
add_action( 'after_setup_theme', 'kadiner_add_woocommerce_support' );
// add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {

  if( $product->is_type('variable')){
      $percentages = array();

      // Get all variation prices
      $prices = $product->get_variation_prices();

      // Loop through variation prices
      foreach( $prices['price'] as $key => $price ){
          // Only on sale variations
          if( $prices['regular_price'][$key] !== $price ){
              // Calculate and set in the array the percentage for each variation on sale
              $percentages[] = round( 100 - ( floatval($prices['sale_price'][$key]) / floatval($prices['regular_price'][$key]) * 100 ) );
          }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';

  } elseif( $product->is_type('grouped') ){
      $percentages = array();

      // Get all variation prices
      $children_ids = $product->get_children();

      // Loop through variation prices
      foreach( $children_ids as $child_id ){
          $child_product = wc_get_product($child_id);

          $regular_price = (float) $child_product->get_regular_price();
          $sale_price    = (float) $child_product->get_sale_price();

          if ( $sale_price != 0 || ! empty($sale_price) ) {
              // Calculate and set in the array the percentage for each child on sale
              $percentages[] = round(100 - ($sale_price / $regular_price * 100));
          }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';

  } else {
      $regular_price = (float) $product->get_regular_price();
      $sale_price    = (float) $product->get_sale_price();

      if ( $sale_price != 0 || ! empty($sale_price) ) {
          $percentage    = round(100 - ($sale_price / $regular_price * 100));
      } else {
          return $html;
      }
  }
//   return '<span class="customSaleBadge">'. $percentage .' '. esc_html__( 'تخفیف', 'woocommerce' ) .'</span>';
	if(!$product->is_in_stock()){
		return '<span class="customSaleBadge">x ناموجود</span>';
	}
	else{
		return '<span class="customSaleBadge">'. $percentage .'%</span>';
	}
}
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10, 0);
add_action('woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 5, 0);

add_action( 'woocommerce_after_add_to_cart_quantity', 'ts_quantity_plus_sign' );
function ts_quantity_plus_sign() {
   echo '<button type="button" class="plus" >+</button></div>';
}
 
add_action( 'woocommerce_before_add_to_cart_quantity', 'ts_quantity_minus_sign' );
function ts_quantity_minus_sign() {
   echo '<div class="customQuantityWrapper"><button type="button" class="minus" >-</button>';
}

add_action( 'wp_footer', 'ts_quantity_plus_minus' );
function ts_quantity_plus_minus() {
   // To run this on the single product page
   if ( ! is_product() ) return;
   ?>
   <script type="text/javascript">
          
      jQuery(document).ready(function($){   
          
            $('form.cart').on( 'click', 'button.plus, button.minus', function() {
 
            // Get current quantity values
            var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
            var val   = parseFloat(qty.val());
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));
 
            // Change the value if plus or minus
            if ( $( this ).is( '.plus' ) ) {
               if ( max && ( max <= val ) ) {
                  qty.val( max );
               } 
            else {
               qty.val( val + step );
                 }
            } 
            else {
               if ( min && ( min >= val ) ) {
                  qty.val( min );
               } 
               else if ( val > 1 ) {
                  qty.val( val - step );
               }
            }
             
         });
          
      });
          
   </script>
   <?php
}
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40, 0);

function custom_price_html( $price, $product ) {
    if ( ! $product->is_in_stock() ) {
        $price = '<span class="availableSoon">بزودی موجود می‌شود!</span>';
    }
    return $price;
}
add_filter( 'woocommerce_get_price_html', 'custom_price_html', 10, 2 );

add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );
function woocommerce_custom_product_add_to_cart_text() {
    return __( '', 'woocommerce' );
}

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10, 0);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 10, 0);


add_filter( 'woocommerce_product_query_meta_query', 'custom_stock_status_query', 10, 2 );
function custom_stock_status_query( $meta_query, $query ) {
    if ( isset( $_GET['in_stock'] ) && $_GET['in_stock'] == '1' ) {
        $meta_query[] = array(
            'key' => '_stock_status',
            'value' => 'outofstock',
            'compare' => 'NOT IN'
        );
    }
    return $meta_query;
}
//Add shipping info above the proceed to checkout button
add_action('woocommerce_proceed_to_checkout', 'jagels_custom_checkout_field');

function jagels_custom_checkout_field() {
    echo '<a href="#" class="linkToShop">خرید محصول های دیگر</a>';
}
