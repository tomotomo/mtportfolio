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
