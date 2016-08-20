<?php

/**

 * Template Name: Home without banner rotater

 */



get_header(); 



$welcomePageId = of_get_option('welcomepageid');



?>


<?php if(has_post_thumbnail()){ ?>
<section class="slider_container">

  <div class="wrapper">

  <div class="slider">

    <?php the_post_thumbnail('bannerimg'); ?>

  </div>

  </div>

</section>
<?php }?>
<section class="body_container">

  

  <?php //if($welcomePageId) { 

         //query_posts('page_id='.$welcomePageId.'&post_type=page');

		 if(have_posts()) : ?>

  <section class="btm_sec">

    <?php while(have_posts()) : the_post(); ?>

    <h3>

      <?php the_title(); ?>

    </h3>

    <div class="btm_detail">

      <div class="wrapper">

        <?php the_content(); ?>

      </div>

    </div>

    <?php endwhile; endif; ?>

  </section>

  <?php //} ?>

</section>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

