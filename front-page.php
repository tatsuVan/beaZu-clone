<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawsgang
 */

get_header();
?>

	<main id="primary" class="site-main">




	<section class="container pd-5 pt-5">
			<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000">
					<a href=""><img src="<?php echo get_template_directory_uri();?>/images/slider/pexels-corentin-henry-9992332.jpg" class="d-block w-100" alt="..."></a>
				</div>
				<div class="carousel-item" data-bs-interval="2000">
					<a href=""><img src="<?php echo get_template_directory_uri();?>/images/slider/pexels-cottonbro-studio-4676396.jpg" class="d-block w-100" alt="..."></a>
				</div>

			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	</main><!-- #main -->

<?php
// get_footer();
