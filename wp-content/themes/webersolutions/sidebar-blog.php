<?php
/**
 * The sidebar containing the footer widget area.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage SSX_THEME
 * @since SSXTHEME 1.0
 */

if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
	
			<?php dynamic_sidebar( 'right_sidebar' ); ?>
	
<?php endif; ?>