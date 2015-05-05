// Document is ready
$(function() {
	menuActiveDetailDocument();
	getSourceFacebookComment();

	// Remove last hr in popular document
	$(".bottom-new-article").last().remove();
});

function menuActiveDetailDocument() {
	$(".katchup-menu li").each(function(index) {
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
	});
	$(".katchup-menu li:nth-child(3)").addClass("active");	
}

function getSourceFacebookComment() {
	$(".fb-comments").attr("data-href", location.href);
}