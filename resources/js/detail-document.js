// Angularjs
var myDetailDocument = angular.module("myDetailDocument", []);

// Document is ready
$(function() {
	menuActiveDetailDocument();
	RemoveLastItem();
	getSourceFacebookComment();
	getSourceLikeAndShareFacebook();
});

function RemoveLastItem() {
	// Remove last hr in popular document
	$(".bottom-new-article").last().remove();

	// Remove last menu
	$(".category .item").last().addClass("removeItemAfter");
}

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

function getSourceLikeAndShareFacebook() {
	$(".fb-like").attr("data-href", location.href);
}