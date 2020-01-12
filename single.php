<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="grid-container">
			<div class="journal-selection">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			
		<article id="post-" class="main-journal-section"<?php the_ID(); ?>" <?php post_class(); ?>>



	<header class="entry-header journal-header">

			<div class ="boss-color-journal">

				<div class="journal-hockey-text">
				<?php the_title( '<h2 class="entry-title journal-single-entry-title">', '</h2>' ); ?>

					</div>

 				 	<div class="journal-hockey-picture">

							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
  					</div>
							

					
							</div>

						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<?php red_starter_entry_footer(); ?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->


			<?php the_post_navigation(); ?>

			

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

				<!-- CLOSING DIV FOR GRID JOURNAL SELECTION -->
				</div> 


				<div class="sidebar-uni">

										<?php get_sidebar(); ?>
							</div>

							<!-- CLOSING DIV FOR WHOLE GRID -->
							</div>

				<?php get_footer(); ?>
