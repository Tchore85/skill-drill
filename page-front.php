<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main home-page" role="main">
    <!-- <div class="weather-widget">
											<div id="results"></div>

										</div> -->


                    
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
                          <div class="wrapper_thumbnail_front_page">
                                          
                              <div class="post-image" style=" height: 30vh;
									             background:linear-gradient(180deg, rgba(0, 0, 0, 0.4) , rgba(0, 0, 0, 0.4)),
									
									url(<?php echo the_post_thumbnail_url(); ?>); background-size:cover;background-position:50% 100%;"> 
                                     
                                    
                                <div class ="post-info-wrapper">
                                     <div class="post-title">
                                         <a href="<?php echo get_the_permalink(); ?>">
                                              <?php the_title();?> </a>
                                      </div>
                                          <div class="front_page_button">
                                             <a href="<?php echo get_the_permalink(); ?>">Read More</a>
                                
                                          </div>

                                          
                                  </div>
         
                              </div>
                             

                                <!-- THE END OF WRAPPER FRONT PAGE -->
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
                      <img class="canoe-direct"  src="<?php echo get_stylesheet_directory_uri();?>/images/kalendar4.jpg" alt="kalendar" />
      
                  </div>

                    <div class="beach-fire">
  
                        <a href="home" class="beach-text">Newest Technologies <br><button type="button">Read More</button></a>
                           <img class="fire-beach-pcs" src="<?php echo get_stylesheet_directory_uri();?>/images/specter/specter-1.jpg">

                    </div>

                         <div class="hills">
                           <a class="hills-text">Wetter Zürich<div class="weather-widget" id="results" ></div> </a>

                        
                          <img class="hills-pcs" src="<?php echo get_stylesheet_directory_uri();?>/images/ice-weather.jpg">
                              
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>