<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage WEBERSOLUTIONS
 * @since WEBERSOLUTIONS 1.0
 */

get_header(); ?>
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <section class="<?php the_title(); ?>"></section>
  <?php endwhile; endif; ?>
  <section class="overlay whole"></section>
  <section class="m-page__wrapper">
    <div class="wrapper">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <p class="m-page__title <?php the_title(); ?>--title"> <?php the_title(); ?></p>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </section>

<?php get_footer(); ?>
