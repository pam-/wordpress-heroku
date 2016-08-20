<?php

/**

 * The main template file.

 *

 * This is the most generic template file in a WordPress theme and one of the

 * two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * For example, it puts together the home page when no home.php file exists.

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage WEBERSOLUTIONS

 * @since WEBERSOLUTIONS 1.0

 */



get_header();



$welcomePageId = of_get_option('welcomepageid');



?>

<section class="overlay index"></section>

<section class="slider_container">


  <div class="slider">

    <?php dynamic_sidebar('home_slider'); ?>

  </div>


</section>

<section class="body_container">

  <?php if(have_posts()) : ?>

  <section class="btm_sec">

    <?php while(have_posts()) : the_post(); ?>
    <div class="m-link__blocks col-lg-4 col-md-4 col-sm-4">
      <div class="m-link__single">
        <a href="<?php the_permalink(); ?>"> <h1> <?php the_title(); ?></h1></a>
      </div>
    </div>

    <?php endwhile; endif; ?>

  </section>

</section>

<?php get_footer(); ?>

