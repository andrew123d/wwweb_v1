( function( $ ) {
	// console.log('scrolling');
	$( window ).scroll(function() {
		detectScroll();
		//console.log('scrolling'); 
	  });

	function detectScroll () {
		let el = $('.custom-block-page');
		let winscroll = $(window).scrollTop();
        let pageBottom = winscroll + $(window).height();
				
		el.each (function(){
			let elscrool = $(this).offset().top;
            let elbottom = elscrool + el.height()
            if (elscrool < winscroll && pageBottom > elbottom ) {
                //$(this).find('.title_2').addClass('animate__shakeX');
                $(this).find('.anim_img').addClass('animate__flipInX');
            } else {
                //$(this).find('.title_2').removeClass('animate__shakeX');
               $(this).find('.anim_img').removeClass('animate__flipInX');
            }
		}) 
	}
}( jQuery ) );
