/* 
 * Use toggle for footer widget
 */
;
(function($) {
	$(function() {
        $(".widget h1").on("click", function() {
            $(this).next().slideToggle();
            if ( $(this).hasClass("toggled") ) $(this).removeClass("toggled");
            	else $(this).addClass("toggled");
        });
	});
})(jQuery);