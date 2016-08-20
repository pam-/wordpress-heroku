/*jQuery(function($){

jQuery('.toggleMenu').click(function(e) {

    e.preventDefault();

	$('.menu').slideToggle();

});



$('nav ul li.menu-item-has-children > a').append('<span class="expand"></span>');

	   $('nav ul li.menu-item-has-children > a span.expand').click(function(e) {

            e.preventDefault();

			$(this).parent('a').next('ul.sub-menu').slideToggle();

			$(this).toggleClass('active')

        });

		

		$(window).resize(function(){

		$('nav > li > a span.expand').removeClass('active');

		$('.sub-menu').removeAttr('style');

		$('nav ul li.menu-item-has-children  > a span.expand').removeClass('active')

		$('nav').removeAttr('style');

		})

		

		

		

}); 





*/



jQuery(document).ready(function($) {


if ($('h1 span').length === 0) {
  console.log('ye')
}
$('.hamburger').click(function(e) {

    e.preventDefault();

	$('.top-block .menu').slideToggle();

});


if($('.top-block .menu li').has('.sub-menu')){

	$('.top-block .menu li .sub-menu').before('<span class="plus_icon"></span>');

	};

	

	



$(".plus_icon").click(function(){

	

	$(this).next().slideToggle();	

   $(this).toggleClass('open');



  });  
 



});
