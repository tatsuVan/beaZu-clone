<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pawsgang
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pawsgang' ); ?></a>

	<div class="announcement-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<ul class="announcement-bar__list">
						<li class='announcement-bar__list__text'>
							<i class="bi bi-pin rounded-circle"></i>
							<a href="STORE">STORE</a>
						</li>
						<li class='announcement-bar__list__text'>
							<i class="bi bi-envelope rounded-circle"></i>
							<a href="CONTACT">CONTACT</a>
						</li>
						<li class='announcement-bar__list__text'>
							<i class="bi bi-phone rounded-circle"></i>
							<a href="PHONE">(604)876-6637</a>
						</li>
						<li class='announcement-bar__list__text'>
							<i class="bi bi-envelope rounded-circle"></i>
							<a href="NEWSLETTER">Newsletter</a>
						</li>
						<ul class='sns'>
							<li class='announcement-bar__list__sns'>
								<i class="bi bi-facebook rounded-circle"></i>
							</li>
							<li class='announcement-bar__list__sns'>
								<i class="bi bi-instagram rounded-circle"></i>
							</li>
							<li class='announcement-bar__list__sns'>
								<i class="bi bi-pinterest rounded-circle"></i>
							</li>
						</ul>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="announcement-bar__list right">
						<li class='announcement-bar__list__text'>
							<a href="wholesale-application">Wholesale Application</a>
						</li>
						<li class='announcement-bar__list__text'>						
							<a href="help-center">Help Center</a>
						<li class='announcement-bar__list__text'>
							<a href="currency">$CAD $US</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>




	<header id="masthead" class="site-header">
		<div class="container pt-4 pb-2">
			<div class="row align-items-center">
				<div class="col-md-2 site-header__logo d-flex justify-content-center justify-content-md-start pb-2">
					<?php the_custom_logo(); ?>
				</div>
				<div class="col-md-6">
					<?php aws_get_search_form( true ); ?>
				</div>
				<div class="col cart d-flex justify-content-center justify-content-md-end align-items-center">
					<a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-bag-dash p-2"></i></a>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
			</div>
		</div>



dd
		<nav id="site-navigation" class="main-navigation bg-gray">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="bi bi-list"></i>
							<?php esc_html_e( 'Primary Menu', 'pawsgang' ); ?>
						</button>
					</div>
	
					<div class="col-12 text-center">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					</div>
				</div>
			</div>
		</nav>







	</header><!-- #masthead -->
