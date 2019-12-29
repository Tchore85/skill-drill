<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
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
</article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>



			<section class="canoe-girl-nature">
          <div class="description-grid"><h2> Latest Informations</h2></div>
            <div class="grid-container-nature">

                  <div class="canoe-girl">
  
                    <a class="canoe-text">Improve Your Skills On Ice Today <br> <button type="button">Read More</button></a> 
                      <img class="canoe-direct" style= background:linear-gradient: rgba(0, 0, 0, 0.35) , src="<?php echo get_stylesheet_directory_uri();?>/images/ice.jpg">
      
                  </div>

                    <div class="beach-fire">
  
                        <a class="beach-text">A Night With Friends at the Beach<br><button type="button">Read More</button></a>
                           <img class="fire-beach-pcs" src="<?php echo get_stylesheet_directory_uri();?>/images/player2.jpg">

                    </div>

                         <div class="hills">
                           <a class="hills-text">Taking in the View At Big Mountain<button type="button">Read More</button></a>
                              <img class="hills-pcs" src="<?php echo get_stylesheet_directory_uri();?>/images/branka.jpg">

                          </div>
                          <div class="sky">
                            <a class="stars-text">Star-Ganzing at the Night Sky<button type="button">Read More</button></a>
                              <img class="stars-pct" src="<?php echo get_stylesheet_directory_uri();?>/images/training.jpg">
                          </div>
                         </div>  
                      </section>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
