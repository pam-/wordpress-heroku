jQuery(document).ready(function($) {
	$('.sub-menu').hover(function() {
	   $(this).parent().addClass('selected');          
  	},

  function() {
	   $(this).parent().removeClass('selected');          
	  });
 $('.nav-menu').after(function(){

		return $('<div id="dedicated-mobile"><a class="trigger" href="#">Navigation<span></span></a></div>');

		});

		$('ul.nav-menu:first').clone().attr('id', 'dedicated-mobilemenu').removeAttr('class').hide().appendTo('#dedicated-mobile');

		$('#dedicated-mobile a.trigger').addClass('close');

		$('#dedicated-mobile a.trigger').click(function(e){

			e.preventDefault();

			$this = $(this);

			if($this.hasClass('close')){

				$this.removeClass('close').addClass('open');

				$this.parent().find('#dedicated-mobilemenu').slideDown();

			} else {

				$this.removeClass('open').addClass('close');

				$this.parent().find('#dedicated-mobilemenu').slideUp();

			}

		});	
		
		$('#dedicated-mobilemenu li.menu-item-has-children a').click(function(e) {
		
        if($(this).hasClass('opwn'))
		{
			$(this).removeClass('opwn');
			$(this).next('.sub-menu').slideUp();	
			
		} else {
			$(this).addClass('opwn');
			$(this).next('.sub-menu').slideDown();	
		}
    });
	
	 if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Mac') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
        // console.log('Safari on Mac detected, applying class...');
        $('body').addClass('safari-mac'); // provide a class for the safari-mac specific css to filter with
    }
	  

});



