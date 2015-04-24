/* Load script in every page */
// Document is ready
$(function() {	
	$(".katchup-menu li").each(function(index) {
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
	});
	$(".katchup-menu li:nth-child(3)").addClass("active");
});
