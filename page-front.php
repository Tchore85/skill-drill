<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main home-page" role="main">

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

<!-- THIS IS THE BEGINNIGN OF THE LOOP FROM JOURNAL -->


<section class="selected-posts">
                      <h2>Unsere Programme</h2>
                            <div class ="selected-posts-front-page">
                                                  
                                <?php
                                  $args = array( 'post_type' => 'post','posts_per_page' => 3, 'order' => 'DESC' );
                                  $journal_posts = get_posts( $args ); // returns an array of posts
                                  ?>
                                 <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
                          <article class="post">
                                          
                                    <div class="post-image">
                                     <?php the_post_thumbnail();?>
                                      </div>
                                <div class ="post-info-wrapper">
                                        <div class ="post-date">
                                          <!-- <?php the_date();?> -->
                                        </div>

                                         <div class="post-title">
                                              <?php the_title();?>
                                          </div>
                                            
                                  </div>
                                              
                                <div class="front_page_button">
                                  <a href="<?php echo get_the_permalink(); ?>">Read More</a>
                                

                                  <!-- get_the_permalink() -->

                                              </div>
                                              
                            </article>

   

                              <?php //echo get_the_date();?> 
                              <!-- this is longer version echo will display but if we have only get_the_date
                            we will get only the data but not displayed -->
                            <?php endforeach; wp_reset_postdata(); ?>

                    </div>
      </section>

      <!-- THIS IS THE END OF THE LOOP FOR JOURNAL POSTS -->

			<section class="canoe-girl-nature">
          <div class="description-grid"><h2> Latest Informations</h2></div>
            <div class="grid-container-nature">

                  <div class="canoe-girl">
  
                    <a href="events" class="canoe-text">Upcomming Trainings<br> <button type="button">Read More</button></a> 
                      <img class="canoe-direct" style= background:linear-gradient: rgba(0, 0, 0, 0.35) , src="<?php echo get_stylesheet_directory_uri();?>/images/kalendar4.jpg" alt="kalendar" width="50%"/>
      
                  </div>

                    <div class="beach-fire">
  
                        <a href="home" class="beach-text">Improve Your Skills On Ice Today <br><button type="button">Read More</button></a>
                           <img class="fire-beach-pcs" src="<?php echo get_stylesheet_directory_uri();?>/images/team-training.jpg">

                    </div>

                         <div class="hills">
                           <a class="hills-text">Excellent Location<button type="button">Read More</button></a>
                              <img class="hills-pcs" src="<?php echo get_stylesheet_directory_uri();?>/images/branka.jpg">

                          </div>
                          <div class="sky">
                            <a class="stars-text">Train As a Profi<button type="button">Read More</button></a>
                              <img class="stars-pct" src="<?php echo get_stylesheet_directory_uri();?>/images/training.jpg">
                          </div>
                         </div>  
                      </section>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
