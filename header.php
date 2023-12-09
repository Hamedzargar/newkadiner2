<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newkadiner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderContainer">
		<div class="mainHeader mainView">
			<div class="HeadewrRight">
				<a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="50px" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 773.74 217.85"><defs><linearGradient id="linear-gradient" x1="554.63" y1="-5.65" x2="720.73" y2="244.45" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5b5b5b"/><stop offset=".99" stop-color="#1a1e1c"/></linearGradient><linearGradient id="linear-gradient-2" x1="567.07" y1="-13.91" x2="733.18" y2="236.18" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="622.2" y1="-50.53" x2="788.31" y2="199.57" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-4" x1="534" y1="-23.71" x2="699.3" y2="143.89" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff" stop-opacity=".7"/><stop offset=".95" stop-color="#fff" stop-opacity="0"/></linearGradient><style>.cls-7{fill:#2f322e}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M773.74 53.55v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.19 55.19 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V53.55A53.54 53.54 0 0 1 609.43 0H720.2a53.54 53.54 0 0 1 53.54 53.55Z" style="fill:#fdcf00"/><path d="M675.47 123.51a55 55 0 0 0-14.31 37.07v12.09a49.29 49.29 0 0 1-45.4-41.88 6.38 6.38 0 0 1 6.32-7.28Z" style="fill:url(#linear-gradient)"/><path d="M773.58 79.78v1.49l-.06 5.93a44.49 44.49 0 0 1-13.06 31.05L676 202.67a51.39 51.39 0 0 1-35.79 15h-4.65c15.78-.54 25.53-7.72 25.61-25.34v-31.75a55.19 55.19 0 0 1 55.18-55.18H749c16.88-.4 24.05-10.15 24.58-25.62Z" style="fill:#feea8e"/><path d="M644.3 81.91a5.57 5.57 0 0 1-5.57-5.57 13.64 13.64 0 1 0-27.27 0 5.57 5.57 0 0 1-11.14 0 24.77 24.77 0 0 1 49.54 0 5.57 5.57 0 0 1-5.56 5.57Z" style="fill:url(#linear-gradient-2)"/><path d="M723.75 81.91a5.57 5.57 0 0 1-5.57-5.57 13.64 13.64 0 1 0-27.28 0 5.57 5.57 0 1 1-11.13 0 24.77 24.77 0 1 1 49.54 0 5.57 5.57 0 0 1-5.56 5.57Z" style="fill:url(#linear-gradient-3)"/><path d="M773.74 53.55v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.19 55.19 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V53.55A53.54 53.54 0 0 1 609.43 0H720.2a53.54 53.54 0 0 1 53.54 53.55Z" style="fill:url(#linear-gradient-4)"/><path class="cls-7" d="M497.05 125.83c.37 21.38-17.59 38.88-39 38.88h-88.16a43.16 43.16 0 0 1-43.13-43.11V50.76h29.54v70.84a13.58 13.58 0 0 0 13.58 13.57h88.95a8.69 8.69 0 1 0 0-17.38l-47-.23a18.5 18.5 0 0 1-13-5.41l-11.6-11.6A18.47 18.47 0 0 1 384.5 78l20.82-34.7 25.33 15.2-17.86 29.75h46a38.27 38.27 0 0 1 38.26 37.58Zm-234.26 39.09H240.4v-29.54h22.39a17.88 17.88 0 1 0 0-35.75H240.4l7.09-29.54h15.3a47.42 47.42 0 1 1 0 94.83Zm-68.21-94.09V104a26.76 26.76 0 1 1-53.51 0V70.83h-29.54v5.27l-.28 28.49a26.76 26.76 0 1 1-53.51 0V71.38H28.2v28.79A68.55 68.55 0 0 1 8 149l-8 9.4 22 19.67 7.15-8.54a98.64 98.64 0 0 0 17.27-23.48 56.18 56.18 0 0 0 79.95-3.92A56.27 56.27 0 0 0 224.12 104V70.83Z"/><circle class="cls-7" cx="178.91" cy="182.01" r="13.93"/><circle class="cls-7" cx="126.65" cy="48.31" r="14.17"/><circle class="cls-7" cx="209.46" cy="181.24" r="13.93"/></g></g></svg></a>
				<div class="menuProductParent">
					<span class="menuProductParentSvgPart"><svg width="25" height="25" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="#000" fill-rule="evenodd" d="M19 4a1 1 0 0 1-1 1H2a1 1 0 0 1 0-2h16a1 1 0 0 1 1 1zm0 6a1 1 0 0 1-1 1H2a1 1 0 1 1 0-2h16a1 1 0 0 1 1 1zm-1 7a1 1 0 1 0 0-2H2a1 1 0 1 0 0 2h16z"/></svg></span>
					<span class="menuProductParentTitlePart">محصولات</span>
					<!-- <div class="menuProductItems"></div> -->
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'container_class'=>'productMenu',
							)
						);
					?>
				</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'desktopMenu',
						)
					);
				?>
			</div>
			<div class="HeadewrLeft">
				<div class="kadinerHeaderMenuBtn">
					<a href="#" class="generalButton">چاپ اختصاصی</a>
					<div>
						<li><a href="#">چاپ استیکر اختصاصی</a></li>
						<li><a href="#">چاپ ماگ اختصاصی</a></li>
						<li><a href="#">چاپ کتاب اختصاصی</a></li>
					</div>
				</div>
				<div class="headerWoocomerceItemsPart">
				<?php echo do_shortcode('[fibosearch]'); 
				if ( is_user_logged_in() ) {
				?>
				<div class="headerMyAcountIcon">
					<a href="#" class="kadinerUsers"><svg width="20" height="20" viewBox="8 8 50 50" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2"><path style="fill:none" d="M0 0h1280v800H0z" transform="translate(-1216 -192)"/><path d="M50 46.5c-7.2 0-13-5.8-13-13s5.8-13 13-13 13 5.8 13 13-5.8 13-13 13Zm0-22c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9Z" style="fill-rule:nonzero" transform="translate(-1216 -192) matrix(.9393 0 0 .9393 1200.662 180.725)"/><path d="M34.036 58.5V67H30.4v-8.5c0-7.182 8.818-12.727 20-12.727s20 5.545 20 12.727V67h-3.636v-8.5c0-4.909-7.455-9.091-16.364-9.091S34.036 53.591 34.036 58.5Z" style="fill-rule:nonzero" transform="translate(-1216 -192) translate(1195.93 178.799) scale(1.03318)"/></svg></a>
					<div>
						<li><a href="#">پنل کاربری</a></li>
						<li><a href="#">سفارشات من</a></li>
						<li><a href="#">تنظیمات</a></li>
						<li><a href="#"><svg height="20" width="20" fill="#000" stroke="#000" stroke-width="10px" xmlns="http://www.w3.org/2000/svg" viewBox="10 -20 380 520" xml:space="preserve"><path d="M227.619 444.2h-122.9c-33.4 0-60.5-27.2-60.5-60.5V87.5c0-33.4 27.2-60.5 60.5-60.5h124.9c7.5 0 13.5-6 13.5-13.5s-6-13.5-13.5-13.5h-124.9c-48.3 0-87.5 39.3-87.5 87.5v296.2c0 48.3 39.3 87.5 87.5 87.5h122.9c7.5 0 13.5-6 13.5-13.5s-6.1-13.5-13.5-13.5z"/><path d="m450.019 226.1-85.8-85.8c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l62.8 62.8h-273.9c-7.5 0-13.5 6-13.5 13.5s6 13.5 13.5 13.5h273.9l-62.8 62.8c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l85.8-85.8c5.4-5.4 5.4-14 .1-19.2z"/></svg></a></li>
					</div>
				</div>
				<div class="kadinerMiniCartContainer">
					<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 446.853 446.853" xml:space="preserve"><path d="M444.274 93.36a14.332 14.332 0 0 0-11.145-6.123L155.942 75.289c-7.953-.348-14.599 5.792-14.939 13.708-.338 7.913 5.792 14.599 13.707 14.939l258.421 11.14L362.32 273.61H136.205L95.354 51.179a14.336 14.336 0 0 0-8.861-10.753L19.586 14.141c-7.374-2.887-15.695.735-18.591 8.1-2.891 7.369.73 15.695 8.1 18.591l59.491 23.371 41.572 226.335a14.341 14.341 0 0 0 14.104 11.746h6.896l-15.747 43.74a11.927 11.927 0 0 0 1.468 10.916 11.947 11.947 0 0 0 9.772 5.078h11.045c-6.844 7.617-11.045 17.646-11.045 28.675 0 23.718 19.299 43.012 43.012 43.012s43.012-19.294 43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847 7.617-11.047 17.646-11.047 28.675 0 23.718 19.294 43.012 43.012 43.012 23.719 0 43.012-19.294 43.012-43.012 0-11.028-4.2-21.058-11.042-28.675h13.432c6.6 0 11.948-5.349 11.948-11.947 0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221a14.332 14.332 0 0 0 13.651-9.96l59.739-186.387a14.306 14.306 0 0 0-1.89-12.573zm-274.61 316.454c-10.543 0-19.117-8.573-19.117-19.116s8.574-19.117 19.117-19.117 19.116 8.574 19.116 19.117-8.573 19.116-19.116 19.116zm157.709 0c-10.543 0-19.116-8.573-19.116-19.116s8.573-19.117 19.116-19.117 19.116 8.574 19.116 19.117-8.573 19.116-19.116 19.116z"/></svg></span>
					<span>سبد خرید</span>
					<span class="numberOfMiniCartItems">2</span>
					<div class="headerMiniCartContainer"><?php woocommerce_mini_cart(); ?></div>
				</div>
				<?php
				 } else { ?>
					<a href="#" class="kadinerUsersLogout"><span>ورود / عضویت</span><svg width="20" height="20" viewBox="8 8 50 50" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2"><path style="fill:none" d="M0 0h1280v800H0z" transform="translate(-1216 -192)"/><path d="M50 46.5c-7.2 0-13-5.8-13-13s5.8-13 13-13 13 5.8 13 13-5.8 13-13 13Zm0-22c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9Z" style="fill-rule:nonzero" transform="translate(-1216 -192) matrix(.9393 0 0 .9393 1200.662 180.725)"/><path d="M34.036 58.5V67H30.4v-8.5c0-7.182 8.818-12.727 20-12.727s20 5.545 20 12.727V67h-3.636v-8.5c0-4.909-7.455-9.091-16.364-9.091S34.036 53.591 34.036 58.5Z" style="fill-rule:nonzero" transform="translate(-1216 -192) translate(1195.93 178.799) scale(1.03318)"/></svg></a>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>




	<div class="mobileHeaderContainer">
		<div class="mobileHeader mainView">
			<a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30px" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 773.74 217.85"><defs><linearGradient id="linear-gradient" x1="554.63" y1="-5.65" x2="720.73" y2="244.45" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#5b5b5b"/><stop offset=".99" stop-color="#1a1e1c"/></linearGradient><linearGradient id="linear-gradient-2" x1="567.07" y1="-13.91" x2="733.18" y2="236.18" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="622.2" y1="-50.53" x2="788.31" y2="199.57" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-4" x1="534" y1="-23.71" x2="699.3" y2="143.89" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff" stop-opacity=".7"/><stop offset=".95" stop-color="#fff" stop-opacity="0"/></linearGradient><style>.cls-7{fill:#2f322e}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M773.74 53.55v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.19 55.19 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V53.55A53.54 53.54 0 0 1 609.43 0H720.2a53.54 53.54 0 0 1 53.54 53.55Z" style="fill:#fdcf00"/><path d="M675.47 123.51a55 55 0 0 0-14.31 37.07v12.09a49.29 49.29 0 0 1-45.4-41.88 6.38 6.38 0 0 1 6.32-7.28Z" style="fill:url(#linear-gradient)"/><path d="M773.58 79.78v1.49l-.06 5.93a44.49 44.49 0 0 1-13.06 31.05L676 202.67a51.39 51.39 0 0 1-35.79 15h-4.65c15.78-.54 25.53-7.72 25.61-25.34v-31.75a55.19 55.19 0 0 1 55.18-55.18H749c16.88-.4 24.05-10.15 24.58-25.62Z" style="fill:#feea8e"/><path d="M644.3 81.91a5.57 5.57 0 0 1-5.57-5.57 13.64 13.64 0 1 0-27.27 0 5.57 5.57 0 0 1-11.14 0 24.77 24.77 0 0 1 49.54 0 5.57 5.57 0 0 1-5.56 5.57Z" style="fill:url(#linear-gradient-2)"/><path d="M723.75 81.91a5.57 5.57 0 0 1-5.57-5.57 13.64 13.64 0 1 0-27.28 0 5.57 5.57 0 1 1-11.13 0 24.77 24.77 0 1 1 49.54 0 5.57 5.57 0 0 1-5.56 5.57Z" style="fill:url(#linear-gradient-3)"/><path d="M773.74 53.55v23.76c0 1.35 0 2.67-.13 4v-1.49c-.53 15.47-7.7 25.17-24.58 25.62h-32.69a55.19 55.19 0 0 0-55.18 55.18v31.84c-.08 17.62-9.83 24.8-25.61 25.34h.79c-1.11.06-2.24.1-3.4.1h-23.51a53.54 53.54 0 0 1-53.54-53.54V53.55A53.54 53.54 0 0 1 609.43 0H720.2a53.54 53.54 0 0 1 53.54 53.55Z" style="fill:url(#linear-gradient-4)"/><path class="cls-7" d="M497.05 125.83c.37 21.38-17.59 38.88-39 38.88h-88.16a43.16 43.16 0 0 1-43.13-43.11V50.76h29.54v70.84a13.58 13.58 0 0 0 13.58 13.57h88.95a8.69 8.69 0 1 0 0-17.38l-47-.23a18.5 18.5 0 0 1-13-5.41l-11.6-11.6A18.47 18.47 0 0 1 384.5 78l20.82-34.7 25.33 15.2-17.86 29.75h46a38.27 38.27 0 0 1 38.26 37.58Zm-234.26 39.09H240.4v-29.54h22.39a17.88 17.88 0 1 0 0-35.75H240.4l7.09-29.54h15.3a47.42 47.42 0 1 1 0 94.83Zm-68.21-94.09V104a26.76 26.76 0 1 1-53.51 0V70.83h-29.54v5.27l-.28 28.49a26.76 26.76 0 1 1-53.51 0V71.38H28.2v28.79A68.55 68.55 0 0 1 8 149l-8 9.4 22 19.67 7.15-8.54a98.64 98.64 0 0 0 17.27-23.48 56.18 56.18 0 0 0 79.95-3.92A56.27 56.27 0 0 0 224.12 104V70.83Z"/><circle class="cls-7" cx="178.91" cy="182.01" r="13.93"/><circle class="cls-7" cx="126.65" cy="48.31" r="14.17"/><circle class="cls-7" cx="209.46" cy="181.24" r="13.93"/></g></g></svg></a>
			<a href="#" class="generalButton">چاپ اختصاصی</a>
			<div class="menuProductParent">
				<span class="menuProductParentSvgPart"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="#000" fill-rule="evenodd" d="M19 4a1 1 0 0 1-1 1H2a1 1 0 0 1 0-2h16a1 1 0 0 1 1 1zm0 6a1 1 0 0 1-1 1H2a1 1 0 1 1 0-2h16a1 1 0 0 1 1 1zm-1 7a1 1 0 1 0 0-2H2a1 1 0 1 0 0 2h16z"></path></svg></span>
				<span class="menuProductParentTitlePart">محصولات</span>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'container_class'=>'productMenu',
						)
					);
				?>
				<!-- <div class="menuProductItems"></div> -->
			</div>
		</div>
	</div>







