<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="row">
            	<div class=" footer-text col-md-6 mt-2">Copyright &copy; <?php echo date('Y'); ?> Selim khan</div>
            	<div class="col-md-6 footer-icon text-right">
            		<a href=""><i class="fab fa-facebook-f"></i></a>
            		<a href=""><i class="fab fa-twitter"></i></a>
            		<a href=""><i class="fab fa-linkedin-in"></i></a>
            		<a href=""><i class="fab fa-instagram"></i></a>
            	</div>
            </div>

		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>