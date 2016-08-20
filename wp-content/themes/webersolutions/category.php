<?php

/**

 * The template for displaying Category pages.

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage SSX_THEME

 * @since SSXTHEME 1.0

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

        <h1><?php echo  single_cat_title("", false); ?> </h1>

        
        
      
         <?php 

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