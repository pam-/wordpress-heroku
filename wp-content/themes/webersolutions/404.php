<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WEBERSOLUTIONS
 * @since WEBERSOLUTIONS 1.0
 */

get_header(); ?>

<section class="body_container">
  <section class="inner_container">
    <div class="wrapper">
    <section class="content_container">
      <h1>
        <?php _e( '404 Error Page', 'ssxtheme' ); ?>
      </h1>
      <h2>
        <?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'ssxtheme' ); ?>
      </h2>
      <p>
        <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ssxtheme' ); ?>
      </p>
    </section>
  </section>
  </div>
</section>
</section>
<?php get_footer(); ?>
