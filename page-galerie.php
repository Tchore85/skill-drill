<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

						get_header(); ?>

								<div id="primary" class="content-area">
									<main id="main" class="site-main galery-page" role="main">
										

									<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php endwhile; // End of the loop. ?>


									<div class="product-grid-archive">
									
																<?php

							// check if the repeater field has rows of data
							if( have_rows('galerie_images') ): ?>

							
						
							<?php

								// loop through the rows of data
								while ( have_rows('galerie_images') ) : the_row();

									// display a sub field value
									?>

									<img class="mobile-svg" src="<?php the_sub_field('galerie_single_image'); ?>"/>
									
								
								
								<?php endwhile;
								
								?>

								
						
								<?php

							else :

								// no rows found

							endif;

							?>
									</div>
									</main><!-- #main -->
											</div><!-- #primary -->
										
										<?php get_footer(); ?>
