<?php 
	/*Template Name: contact*/
	get_header();
 ?>

<section class="container-fluid mt-1 mb-5">
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.092859670994!2d90.38506991386816!3d23.75667924402195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a426199b0d%3A0x6a2c655d06c88ec9!2sFarmgate%2C+Dhaka+1205%2C+Bangladesh!5e0!3m2!1sen!2sus!4v1554272268336!5m2!1sen!2sus" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>

<section class="container mt-3 mb-5">
	<div class="row">
		<div class="col-12 col-sm-8 col-md-8 col-lg-8">
			<h2>Contact Us</h2>
			<?php echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]'); ?>
		</div>
		<div class="col-12 col-sm-4 col-md-4 col-lg-4">
			<h2>Office</h2>
			<div class="address">
				<strong>Address:</strong>
				<p>Level Crossing Corporate Head Office House#, Road#5, Block#D, NIketon, Gulshan 1 Dhaka-1215, Bangladesh</p>
				<p><strong>Phone: </strong><a href="tel:+88">01750-784903</a></p>
				<p><strong>Phone: </strong><a href="tel:+88">01871-739914</a></p>
				<p><strong>Mail: </strong><a href="mailto:cseselimreza@gmail.com">cseselimreza@gmail.com</a></p>
			</div>
		</div>
	</div>
</section>


 <?php get_footer(); ?>