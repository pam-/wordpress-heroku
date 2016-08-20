<?php

/**

 * The template for displaying the footer.

 *

 * Contains footer content and the closing of the

 * #main and #page div elements.

 *

 * @package WordPress

 * @subpackage WEBERSOLUTIONS

 * @since WEBERSOLUTIONS 1.0

 */

?>



<footer>

  <div class="wrapper">

  <p>6301 IVY LANE  SUITE 700 GREENBELT, MD 20770 <br> P: 301.313.9030 F: 301.560.8880</p>
<p>COPYRIGHT © 2016 WEBER SOLUTIONS. ALL RIGHTS RESERVED. | PRIVACY POLICY | WEB DESIGN BY <a href="http://twitter.com/pam_yam">@pam</a></p>
<img src="<?php echo get_template_directory_uri(); ?>/images/footer_icon.jpg" alt="">
    </div>


  </div>

</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
  if (window.innerWidth < 500) {
    console.log("what")
    $('.hamburger').addClass('showing')
    $('.showing, .cross').click(function() {
        console.log('clicked')
      $(this).siblings().addClass('showing');
      $(this).toggleClass('showing');
      $('.mobile-menu').toggleClass('open');
    });
  }
});
</script>

<?php wp_footer(); ?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</div>
</body></html>