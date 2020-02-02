<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

				get_header(); ?>

		<div class="grid-container">
			<div class="journal-selection">

					<div id="primary" class="content-area">

						<main id="main" class="site-main page-journal-hockey" role="main">

						<?php if ( have_posts() ) : ?>

							<?php if ( is_home() && ! is_front_page() ) : ?>
								<header>
								
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>


								</header>
							<?php endif; ?>

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>


			<article id="post-" class="main-journal-section" <?php the_ID(); ?>" <?php post_class(); ?>>



				<header class="entry-header journal-header">



                    <div class ="boss-color-journal">

                         <div class="journal-hockey-text">

                            <?php the_title( sprintf( '<h2 class="entry-title journal-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                </div>

                                <div class="journal-hockey-picture">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'large' ); ?>
                                    <?php endif; ?>
                                 </div>

                                    <?php if ( 'post' === get_post_type() ) : ?>
                            
                            
                            <?php endif; ?>
                        </div>                         
                    </header><!-- .entry-header -->

                                    <div class="entry-content-journal">
										<?php the_excerpt(); ?>              
										 <div class="journal_page_button">
                                  <a href="<?php echo get_the_permalink(); ?>">Read More --></a>
                                

                                  <!-- get_the_permalink() -->

                                              </div>
                                    </div><!-- .entry-content -->
                                </article><!-- #post-## -->


												<?php endwhile; ?>

										<?php the_posts_navigation(); ?> 

											<?php else : ?>

												<?php get_template_part( 'template-parts/content', 'none' ); ?>

											<?php endif; ?>

													<!-- THIS IS THE LOOP FOR CUSTOM FIELD POST -->
													<?php
									
									if( have_rows('training') ):   ?>

							<div class="training-main">						

										<?php	while ( have_rows('training' ) ) : the_row();?>

								<div class="training-about">


								<div class ="training-title-vs-info">
												<div class="training-title"> <h3><?php  the_sub_field('training_title');?> </h3></div>
																
									</div>

										<img class="training-img" src="<?php the_sub_field('training_image'); ?>"/>

										<div class="training-info"> <h5><?php  the_sub_field('training_description');?> </h5></div>									
											<?php endwhile;?>

							</div>
											<?php else : endif; ?>
				
				
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
