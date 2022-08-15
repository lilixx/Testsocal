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
 * @package Socal
 */

get_header();
?>

	<main id="primary" class="site-main">
	   
		<!--Banner -->
		<div class="container-fluid p-0">
			<?php $image = get_field('background_banner');?>
			<div class="banner_sol" style="background: url(<?php echo $image; ?>) !important;
				min-height: 650px!important;background-size: cover!important; display: flex; justify-content: center;">
				<div class="container">
					<div class="row d-flex align-items-center h-100">
						<div class="col-md-6 col-12">
							<h1><?php the_field('title_banner'); ?> </h1>
							<p class="p_main pb-4"><?php the_field('content_banner'); ?></p>
							<?php $link1 = get_field('url_button_1'); $link2 = get_field('url_button_2'); ?> 
							<a class="btn btn-skyblue text-uppercase text-white px-4 py-2" href="<?php echo $link1;?>"><?php the_field('button1'); ?></a>
							<a class="btn btn-outline-secondary px-4 py-2 text-dark" href="<?php echo $link2;?>"><span class="dashicons dashicons-phone"></span><?php the_field('button2'); ?></a>								
						</div>						
					</div>
				</div>
			</div>	
		</div>
		
		<!-- Best -->
		<div class="container-fluid bg-skyblue">
			<div class="container py-3">
				<div class="row py-4">			    
					<?php
						if( have_rows('best') ):
						// Loop through rows.
							while( have_rows('best') ) : the_row(); ?>
								<div class="col-lg col-md-6 col-12 d-flex align-items-center justify-content-center cont-best">
									<div class="h-100 text-center">
										<?php $image = get_sub_field('icon'); ?> 
										<img src="<?php echo $image; ?>">
										<h5 class="mt-3 text-white"><?php echo get_sub_field('titel'); ?></h5>												
									</div>
								</div>
							<?php  
							endwhile;
						endif;
					?>									
				</div>
			</div>
		</div>	

		<!-- Services -->
		<div class="container py-4">
			<div class="row py-4">
				<div class="col-12 d-flex justify-content-center pb-4">
					<div class="col-md-8 col-12 text-center">
						<h2 class="text-skyblue"><?php echo get_field('title_service'); ?></h2>
						<p><?php echo get_field('content'); ?></p>
					</div>		
				</div>	
				<?php					
					if( have_rows('services') ):
						// Loop through rows.
						while( have_rows('services') ) : the_row(); ?>
							
							<div class="col-lg-4 col-12 project pb-4 mb-2 grid px-3">
								<div class="image_conf mb-lg-0 mb-4">
									<?php $image = get_sub_field('image'); ?> 
									<img class="bg-service" src="<?php echo $image; ?>"/>
									<div class="title">
										<img class="mx-auto pb-2" src="<?php echo get_sub_field('icon'); ?> ">
										<h5 class="text-uppercase font-weight-bold"><?php echo get_sub_field('title'); ?></h5>						
									</div>
									<div class="description">
										<p class="px-4"><?php echo get_sub_field('content'); ?></p>	
									</div>
								</div>								
							</div>		
							
						<?php 
						endwhile;
					endif;
				?>				
			</div>
		</div>	

		<!-- Shedule -->
        <div class="container-fluid py-4 bg-skyblue">
			<div class="container py-4">
				<div class="row">
					<div class="col-lg-4 col-12 d-flex justify-content-center">
						<h2 class="text-white"><?php echo get_field('title_shedule'); ?></h2>
					</div>
					<div class="col-lg-4 col-12 d-flex justify-content-center">
						<h2 class="text-white"><span class="dashicons dashicons-phone shedule"></span><?php echo get_field('number'); ?></h2>
					</div>
					<div class="col-lg-4 col-12 d-flex justify-content-center">
						<?php $link = get_field('url_button_shedule'); ?>
						<a class="btn btn-white" href="<?php echo $link;?>"><span class="dashicons dashicons-email"></span> <?php the_field('title_button_shedule'); ?></a>
					</div>		
				</div>
			</div>	
		</div>

        <!-- Testimonials -->
		<div class="container py-4">
			<div class="row py-4">
				<div class="col-12 d-flex justify-content-center pb-4">
					<div class="col-md-8 col-12 text-center">
						<h2 class="text-skyblue"><?php echo get_field('title_testimonials'); ?></h2>
						<p><?php echo get_field('content_testimonial'); ?></p>
					</div>		
				</div>	
				<?php					
					if( have_rows('testimonials') ):
						// Loop through rows.
						while( have_rows('testimonials') ) : the_row(); ?>
							
							<div class="col-lg-4 col-12 project p-0 grid text-center px-3">
								<a href="<?php echo get_sub_field('url_video'); ?>" class="vp-s video_socal">
									<img src="<?php echo get_sub_field('video'); ?>">									
								</a>
								<h5 class="text-skyblue pt-3"><?php echo get_sub_field('name'); ?></h5>
								<p class="mb-3 cont_esencia"><?php echo get_sub_field('content'); ?></p>
							</div>		
							
						<?php 
						endwhile;
					endif;
				?>				
			</div>
		</div>

	</main><!-- #main -->	

<?php

get_footer();
