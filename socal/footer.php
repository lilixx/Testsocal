<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Socal
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid bg-darkblue p-0">
			<div class="container">
				<div class="row text-white">
					<div class="col-md-3 col-12 py-4">
						<?php dynamic_sidebar( 'footer_area_content' ); ?>
					</div>
					<div class="col-md-3 col-6">
						<?php dynamic_sidebar( 'footer_area_quickmenu' ); ?>
					</div>
					<div class="col-md-3 col-6">
						<?php dynamic_sidebar( 'footer_area_service' ); ?>
					</div>
					<div class="col-md-3 col-12 bg-skyblue">
						<?php dynamic_sidebar( 'footer_area_shedule' ); ?>
					</div>		
				</div>
			</div>
		<div>
		<div class="container-fluid p-0 bg-dark">		
			<div class="container py-4">
				<div class="row d-flex align-items-center py-2">
					<div class="col-md-6 col-12 f_author">
						<a href="https://isning.com/" target="_blank"><?php dynamic_sidebar( 'footer_area_logo' ); ?></a>
					</div>
					<div class="col-md-6 col-12 d-flex justify-content-end">
						<span class="text-white">Copyright Socal Radiology <?php echo date("Y"); ?>. All Rights Reserved</span>
					</div>
				</div>
			</div>
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
