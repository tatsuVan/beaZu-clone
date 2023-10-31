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
	
	<div class="container">
		<div class="row">
			<div class="col-3">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-9">
				<section class="container pb-5 pt-5">
						<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active" data-bs-interval="10000">
								<a href=""><img src="<?php echo get_template_directory_uri();?>/images/slider/Hina-Mincho-scaled.webp" class="d-block w-100" alt="..."></a>
							</div>
							<div class="carousel-item" data-bs-interval="2000">
								<a href=""><img src="<?php echo get_template_directory_uri();?>/images/slider/bannerNymoThreads-scaled.webp" class="d-block w-100" alt="..."></a>
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



				<section class="newArrivals">
					<div class="container">
						<h1 class="text-center pt-5">NEW ARRIVALS & BACK IN STOCK</h1>
						<div class="pt-5 pb-5">
							<?php echo do_shortcode( '[products colums=4 limit=4]' ); ?>
						</div>
					</div>
				</section>

				<section class="bestSellers">
					<div class="container">
						<h1 class="text-center pt-5">BEST SELLERS</h1>
						<div class="pt-5 pb-5">
							<?php echo do_shortcode( '[best_selling_products colums=4 limit=4]' ); ?>
						</div>
					</div>
				</section>


				<section class="categories">
					<div class="container">
						<h1 class="text-center">FEATURED CATEGORIES</h1>

						<div class="row pt-5">
							<div class="categories__col col-md-3 col-sm-12 d-flex justify-content-center">
								<div>	
									<a href="#" class="col-md-12 d-inline-block position-relative overflow-hidden">
										<img class="rounded" src="<?php echo get_template_directory_uri();?>/images/categories/47F6646.jpg" alt="" load="lazy">
									</a>
									<h2 class="text-center">Accessories</h2>
								</div>
							</div>
							<div class="categories__col col-md-3 col-sm-12 d-flex justify-content-center">
								<div>	
									<a href="#" class="col-md-12 d-inline-block position-relative overflow-hidden">
										<img class="rounded" src="<?php echo get_template_directory_uri();?>/images/categories/10-40603.jpg" alt="" load="lazy">
									</a>
									<h2 class="text-center">Hoodies</h2>
								</div>
							</div>
							<div class="categories__col col-md-3 col-sm-12 d-flex justify-content-center">
								<div>	
									<a href="#" class="col-md-12 d-inline-block position-relative overflow-hidden">
										<img class="rounded" src="<?php echo get_template_directory_uri();?>/images/categories/firework_small.jpg" alt="" load="lazy">
									</a>
									<h2 class="text-center">Tshirts</h2>
								</div>
							</div>
							<div class="categories__col col-md-3 col-sm-12 d-flex justify-content-center">
								<div>	
									<a href="#" class="col-md-12 d-inline-block position-relative overflow-hidden">
										<img class="rounded" src="<?php echo get_template_directory_uri();?>/images/categories/last_chance_banner.jpg" alt="" load="lazy">
									</a>
									<h2 class="text-center">Music</h2>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>
		
	</div>
	
	<section>
		<div class="bg-gray pt-5 pb-5 mt-5">
		</div>
	</section>
	
	


	</main><!-- #main -->

<?php

get_footer();
