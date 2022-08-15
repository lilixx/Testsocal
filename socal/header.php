<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Socal
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'socal' ); ?></a>
    <div class="container-fluid bg-dark">
		<div class="container">
			<div class="row">
				<div class="offset-lg-4 col-lg-8 col-12 text-white d-flex justify-content-end header_bar">
					<div class="row w-100 text-center">
						<div class="col-lg-4 col-12 p-0">
							<?php dynamic_sidebar( 'header_telephone' ); ?>
						</div>
						<div class="col-lg-4 col-12 p-0">	
							<?php dynamic_sidebar( 'header_email' ); ?>
						</div>
						<div class="col-lg-4 col-12 p-0 text-uppercase">	
							<?php dynamic_sidebar( 'header_appoinment' ); ?>
						</div>
					</div>		
				</div>	
			</div>
		</div>	
	</div>	
	<header id="masthead" class="site-header page_int bg-white">
		<div class="container">
			<div class="row py-4">
				<div class="site-branding col-8 col-lg-3 logo_header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>"></a>
				</div><!-- .site-branding -->
				<div class="col-4 col-lg-9 d-flex align-items-center">  
					<nav id="site-navigation" class="main-navigation d-flex justify-content-end">
						
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>		
		</div>
	</header><!-- #masthead -->