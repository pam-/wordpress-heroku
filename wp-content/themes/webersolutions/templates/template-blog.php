<?php

/**

 * The template for displaying for Posts

 *

 * Template Name:Blog template

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

        <h1><?php the_title(); ?> </h1>

        

          <?php 

	    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

	    query_posts('orderby=menu_order&post_type=post&paged='.$paged); 

         if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="postloop_box">

            <?php 

		    if (has_post_thumbnail()) {            

             $postImg = wp_get_attachment_image_src( get_post_thumbnail_id(), '');

             ?>

            <?php if($postImg) { ?>

            <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('blogimg'); ?>

            </a>

            <?php } } ?>

            <h2><a href="<?php the_permalink(); ?>">

              <?php the_title(); ?>

              </a></h2>

            
            
            <ul class="dateBar">                
                 <li>Posted on <?php the_time(__('j F, Y')) ?></li>
                </ul>           
            

            <?php if(strstr($post->post_content,'<!--more-->')) { ?>

            <?php global $more; $more=0; the_content('Read More >>'); ?>

            <?php } else { ?>

            <?php the_excerpt(); ?>

            <?php  } ?>

          </div>

          <?php endwhile;	  

	  	wp_pagenavi(); 

	   endif; ?>

        </section>
		<!-- end left container -->
        
	
		<!-- begin right container -->
      	<section class="right_container">
        
        	
             <!-- begin right box -->
            <article class="rightBox">

       				 <?php get_sidebar('blog'); ?>

				</article>
                <!-- end right box -->
                
			
      </section>
      
      <!-- end right container -->
      
      
      </section>
 	<!-- end content container -->
      
    </div>

  </section>

</section>



<?php get_footer(); ?>

