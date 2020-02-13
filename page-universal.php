<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="grid-container">
			<div class="journal-selection">



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="journal-hockey-picture">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail ('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);?>

                                    <?php endif; ?>
                                 </div>




	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

			<?php endwhile; // End of the loop. ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

				<div class="sidebar-uni">


					<?php get_sidebar(); ?>

								</div>

			<!-- CLOSING DIV FOR WHOLE GRID -->
			</div>



					<?php get_footer(); ?>
