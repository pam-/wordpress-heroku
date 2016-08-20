<?php

/**

 * The template for displaying Search Results pages.

 *

 * @package WordPress

 * @subpackage WEBERSOLUTIONS

 * @since WEBERSOLUTIONS 1.0

 */



get_header(); ?>


<section class="body_container">

  <section class="inner_container">

    <div class="wrapper">

      <div class="on_mobile">

        <?php dynamic_sidebar('mobile_blog_sidebar');  ?>

      </div>

	   <!-- begin content container -->
      <section class="content_container">

        
        <!-- begin left container -->
      	<section class="left_container">
 <h1><?php printf( __( 'Search Results for: %s', 'ssxtheme' ), get_search_query() ); ?> </h1>

          <?php 	   

         if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="postloop_box">

            <h2><a href="<?php the_permalink(); ?>">

              <?php the_title(); ?>

              </a></h2>

             <ul class="dateBar">                
                 <li>Posted on <?php the_time(__('j F, Y')) ?></li>
                </ul>

            <?php the_excerpt(); ?>

          </div>

          <?php endwhile;	  

	  	wp_pagenavi(); 

	     else : ?>

	  <?php get_template_part( 'content', 'none' ); ?>

      <?php endif; ?>

        </section>

     

     <!-- begin right container -->
      	<section class="right_container">
        
        	
            <!-- begin article -->
            <article class="rightBox">

       				 <?php get_sidebar('blog'); ?>

				</article>
                <!-- end article-->
                
			
      </section>
      
      <!-- end right container -->
      
      
      </section>
 	<!-- end content container -->
      
    </div>

  </section>

</section>



<?php get_footer(); ?>