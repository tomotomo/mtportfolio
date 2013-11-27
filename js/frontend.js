/* 
 * Use script in front end theme.
 */
;
(function($) {
	$(function() {
		// Scroll to page top
		$('.page-top a').click(function() {
			$('html,body').animate({scrollTop: 0}, 'fast');
			return false;
		});
	});
})(jQuery);

(function($){
	$(function() {
		// When the page scroll, the button display at page-bottom.
		var a=$(".page-top");
		a.hide();
		$(window).scroll(function(){
			150<$(this).scrollTop()?a.fadeIn():a.fadeOut();
			return false;
		});
	});
})(jQuery);
