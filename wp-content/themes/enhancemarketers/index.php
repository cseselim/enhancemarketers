<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section class="container-fluid">
		<div class="row">
			<?php echo do_shortcode('[rev_slider alias="slider1"]');  ?>
		</div>
	</section>

	<section class="container">
		<div class="row">
			<div class=" mt-5 mb-3 col-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<h2>FEATURED INSIGHTS</h2>
			</div>

			<div class="row">

				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
				  <img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/SEO.jpg" class="card-img-top" alt="...">
				  <div class="cards-body">
				    <h4 class="cards-title mt-3 mb-2">Card title</h4>
				    <p class="cards-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
				<div class=" col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
				  <img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/SEO.jpg" class="card-img-top" alt="...">
				  <div class="cards-body">
				    <h4 class="cards-title mt-3 mb-2">Card title</h4>
				    <p class="cards-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>

				<div class=" col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
				  <img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/SEO.jpg" class="card-img-top" alt="...">
				  <div class="cards-body">
				    <h4 class="cards-title mt-3 mb-2">Card title</h4>
				    <p class="cards-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
				<div class=" col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
				  <img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/SEO.jpg" class="card-img-top" alt="...">
				  <div class="cards-body">
				    <h4 class="cards-title mt-3 mb-2">Card title</h4>
				    <p class="cards-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
				  <img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/SEO.jpg" class="card-img-top" alt="...">
				  <div class="cards-body">
				    <h4 class="cards-title mt-3 mb-2">Card title</h4>
				    <p class="cards-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
				  <img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/SEO.jpg" class="card-img-top" alt="...">
				  <div class="cards-body">
				    <h4 class="cards-title mt-3 mb-2">Card title</h4>
				    <p class="cards-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
				  <img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/SEO.jpg" class="card-img-top" alt="...">
				  <div class="cards-body">
				    <h4 class="cards-title mt-3 mb-2">Card title</h4>
				    <p class="cards-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
				  <img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/SEO.jpg" class="card-img-top" alt="...">
				  <div class="cards-body">
				    <h4 class="cards-title mt-3 mb-2">Card title</h4>
				    <p class="cards-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
	</section>


	<section class="container mb-5">
		<div class="row">
			<div class=" mt-5 mb-3 col-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<h2>OUR CLIENTS</h2>
			</div>
		</div>

		<div class="row client">
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
			<div class="col-md-2 col-lg-2 mb-4 text-center">
				<img src="http://localhost/enhancemarketers/wp-content/uploads/2019/04/a1-c04f4e1e8c.png">
			</div>
		</div>

	</section>	


<?php

get_footer();
