<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="hamburger_menu">
					<?php if(is_front_page() || is_page() ){
							if ( has_post_thumbnail() ) { ?>


<a><img class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/images/hamburger-light.png" alt="icon-hamburger"></img></a>

<?php } else {  ?>
	<a><img class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/images/hamburger-green.png" alt="icon-hamburger"></img></a>

	<?php	} ?>

	<?php } else { ?>
		<a><img class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/images/hamburger-green.png" alt="icon-hamburger"></img></a>
			<?php	} ?>
					
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>





					
					<div class="only_searchform">

								<?php get_search_form();?> 
					</div>	

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<?php 
		
							if(is_front_page()){
								if ( has_post_thumbnail() ) { ?>

									<section class="branka" style=" height: 100vh;
									background:linear-gradient(180deg, rgba(0, 0, 0, 0.4) , rgba(0, 0, 0, 0.4)),
									
									url(<?php echo the_post_thumbnail_url(); ?>); background-size:cover;">


										<div class="logo-full-front">
											<img src="<?php echo get_template_directory_uri();?>/images/original-logo-transparent.png">
										</div>

										
										

								</section>
								<?php
								}
							}?>

										

							<?php 
								
								if(is_page('about')){
									if ( has_post_thumbnail() ) { ?>
									<section class="about-hero" style="height: 100vh; 
									background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) , rgba(0, 0, 0, 0.4)),
									url(<?php echo the_post_thumbnail_url(); ?>); background-size:cover; background-position:50% 100%;"> 


										<div class="logo-full">
										
										<h3><?php the_title(); ?></h3>	

										</div>
									</section>
									<?php 
									}
								}
								?>


			<div id="content" class="site-content">
