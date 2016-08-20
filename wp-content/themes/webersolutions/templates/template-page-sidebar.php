<?php

/** 

Template Name: Page With Sidebar

 */



get_header(); ?>



<section class="body_container">

  <section class="inner_container">

    <div class="wrapper">

     

	   <!-- begin content container -->
      <section class="content_container">

        
        <!-- begin left container -->
      	<section class="left_container">

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

          <h1>

            <?php the_title(); ?>

          </h1>

          <?php the_content(); ?>

          <?php endwhile; endif; ?>

        </section>
		<!-- end left container -->
    
 <!-- begin right container -->
      <section class="right_container">
      
      	  <!-- begin right box -->
            <article class="rightBox">

       			 <?php get_sidebar('page'); ?>
        
        	</article>
             <!-- end right box -->
        

      </section>
      <!-- end right container -->
      
        </section>

    </div>

  </section>

</section>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

