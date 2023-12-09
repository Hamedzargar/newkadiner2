<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
echo '<div class="mainView">';
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>
	<div class="customProductSortWrapper">
		<div class="customProductSort">
			<div class="customProductSortTitle">مرتب سازی بر اساس:</div>
			<div class="customProductSortTitle customProductSortTitleMobile"><svg width="24" height="24" viewBox="0 0 24 24" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><path style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2" d="m10 15-4 4-4-4"/><path data-name="primary" d="M6 19V4m14 12h-5m5-5h-7m7-5H10" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2"/></svg></div>
			<div class="customProductSortOptions">
				<a class="<?php echo (isset($_GET['orderby'])) ? (''):('activeProductSort') ?>" href="<?php echo get_site_url(); ?>/shop/">جدیدترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='popularity') ? ('activeProductSort'):('') ?>" href="<?php echo get_site_url(); ?>/shop/?orderby=popularity">محبوب‌ترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='rating') ? ('activeProductSort'):('') ?>" href="<?php echo get_site_url(); ?>/shop/?orderby=rating">رتبه‌بندی</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='price') ? ('activeProductSort'):('') ?>" href="<?php echo get_site_url(); ?>/shop/?orderby=price">ارزان‌ترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='price-desc') ? ('activeProductSort'):('') ?>" href="<?php echo get_site_url(); ?>/shop/?orderby=price-desc">گران‌ترین</a>
			</div>
			<div class="customProductSortOptions customProductSortOptionsMobile">
				<span>مرتب سازی بر اساس:</span>
				<a class="<?php echo (isset($_GET['orderby'])) ? (''):('activeProductSort') ?>" href="<?php echo get_site_url(); ?>/shop/">جدیدترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='popularity') ? ('activeProductSort'):('') ?>" href="<?php echo get_site_url(); ?>/shop/?orderby=popularity">محبوب‌ترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='rating') ? ('activeProductSort'):('') ?>" href="<?php echo get_site_url(); ?>/shop/?orderby=rating">رتبه‌بندی</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='price') ? ('activeProductSort'):('') ?>" href="<?php echo get_site_url(); ?>/shop/?orderby=price">ارزان‌ترین</a>
				<a class="<?php echo (isset($_GET['orderby']) && $_GET['orderby']=='price-desc') ? ('activeProductSort'):('') ?>" href="<?php echo get_site_url(); ?>/shop/?orderby=price-desc">گران‌ترین</a>
			</div>
		</div>
		<div class="customProductStockSort">
			<div class="customProductStockSortLabel">فقط موجودها:</div>
			<label class="toggle">
				<input type="checkbox">
				<span class="slider"></span>
			</label>
		</div>
	</div>
	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	// do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );
echo '</div>';
get_footer( 'shop' );
