<?php

/**

 * The Template for displaying all single posts.

 *

 * @package WordPress

 * @subpackage SSX_THEME

 * @since SSXTHEME 1.0

 */



get_header(); ?>
<section class="overlay whole"></section>

<?php while ( have_posts() ) : the_post(); ?>
<section class="body_container single <?php the_title(); ?>"></section>

      <!-- begin content container -->
      <section class="content_container">
          <?php get_template_part( 'content', get_post_format() ); ?>
          <?php endwhile; ?>
      </section>
<?php get_footer(); ?>
