<?php

/**

 * The default template for displaying content. Used for both single and index/archive/search.

 *

 * @package WordPress

 * @subpackage SSX_THEME

 * @since SSXTHEME 1.0

 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<?php if ( is_single() ) : ?>

		<h1><?php the_title(); ?></h1>

		<?php else : ?>

		<h3 class="entry-title">

			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>

		</h3>

		<?php endif;  ?>


	<?php if ( !is_single() ) :?>

	<div class="entry-summary">

      <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

		 <div class="entry-thumbnail">

        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

		</div>

		<?php endif; ?>

      	<?php

		the_excerpt();

		 ?>

	</div><!-- .entry-summary -->

	<?php else: ?>

	<div class="entry-content">


    	 <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

		 <div class="entry-thumbnail">

       			<?php the_post_thumbnail('large'); ?>

		</div>
          <ul class="singleBar">

                <li>Posted on <?php the_time(__('j F, Y')) ?></li>
                </ul>

		<?php endif; ?>



		<?php

		global $more;

		$more=1;

		the_content(); ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ssxtheme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

	</div><!-- .entry-content -->

	<?php endif; ?>
</article><!-- #post -->

