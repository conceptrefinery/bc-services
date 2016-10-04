(function($){
	$(window).load(function() {
	    $('.flexslider').flexslider();
	    // $('#widget_sp_image-2 a.find-out-more').attr('href', '#corporate-events');
	    // console.log('done');
	});
	$('.popup-contact .pop-submit').each(function(){
		$(this).val('GET IN TOUCH');
	});
	$('body.home').removeClass('page-template-default');
	$('#drawer-toggle-label').click(function(){
		if ( $('.nav-primary').is(':visible') ) {
			$('.nav-primary').hide();
		} else {
			$('.nav-primary').show();
		}
	});
	$('a.back-top').click(function(){
		$(window).scrollTop(0);
	});
	// $('#widget_sp_image-2 a.find-out-more').attr('href', '#corporate-events');
	// console.log('done');
	$('.hex').click(function(){
		$(this).find('a').each(function(index, element ){
			if ( !$(element).attr('href').includes('unique')  ) {
				$(element).orangeBox('create');	
				
			} else {
				window.location.href=$(element).attr('href');
				
			}
			
		});
	});
})(jQuery);

 (function($){  
 $(window).on('load', function(){
            $('.container1').masonry({
               columnWidth: '.block',
                itemSelector: '.block'
                
            });
                })
    
})  (jQuery);
    