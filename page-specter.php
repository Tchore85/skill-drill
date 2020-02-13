<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page-specter" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>




				<?php 
								
								if(is_page('specter')){
									if ( has_post_thumbnail() ) { ?>
									<section class="branka" style="height: 100vh; 
									background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) , rgba(0, 0, 0, 0.4)),
									url(<?php echo the_post_thumbnail_url(); ?>); background-size:cover;background-position:50% 50%;"> 


										<div class="logo-full">
										
										<h3><?php the_title(); ?></h3>	

										</div>
									</section>
									<?php 
									}
								}
								?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
