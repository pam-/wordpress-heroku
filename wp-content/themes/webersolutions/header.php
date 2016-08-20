<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage WEBERSOLUTIONS

 * @since WEBERSOLUTIONS 1.0

 */

?>

<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>

<?php wp_title( '|', true, 'right' ); ?>

</title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/genericons.css">



<!--[if lt IE 9]>

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>

	<![endif]-->

<?php wp_head();

$logoImage = of_get_option('site_logo');



?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/font/font.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/placeholders.min.js"></script>


<!--[if IE]><script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script><![endif]-->

</head>



<body <?php body_class(); ?>>
  <div class="site-wrapper">
    <div class="buttons">
      <button class="hamburger">&#9776;</button>
      <button class="cross">&#735;</button>
    </div>
  <div class="mobile-menu">
    <?php  wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu','container'=>'' ) ); ?>
  </div>

<header <?php if(!is_home()){ ?> class="inner"  <?php } ?>>

    <div class="masthead-brand"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <h1 class="m-title__blog">

        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
        <span <?php if(is_home()){ ?> class="about"  <?php } ?>>
          We are a professional services firm providing solutions in Information Technology, Logistics
          Management and Staffing to government and commercial agencies nationwide.
        </span>
      </h1>
      </a>
    </div>
    <nav>
    <div class="nav masthead-nav">
      <div class="desktop-menu">
        <?php  wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu','container'=>'' ) ); ?>
    	</div>
    </div>
  </nav>

</header>


