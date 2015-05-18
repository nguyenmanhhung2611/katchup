// Angularjs
var myDocument = angular.module("myDocument", []);

// Document is ready
$(function() {	
	menuActiveDocument();
	autoResizeHotNews();
	RemoveLastItem();
});

function RemoveLastItem() {
	// Remove last hr in popular document
	$(".bottom-new-article").last().remove();

	// Remove last menu
	$(".bottom-news-total").last().remove();

	// Remove last in popular document
	$("#popular-document .item").last().addClass("removeItemAfter");	
}

function menuActiveDocument() {
	$(".katchup-menu li").each(function(index) {
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
	});
	$(".katchup-menu li:nth-child(5)").addClass("active");	
}

function autoResizeHotNews() {
	$(window).load(function() {
		var boxheight = $('#myCarousel .carousel-inner').innerHeight();
	    var itemlength = $('#myCarousel .item').length;
	    var triggerheight = Math.round(boxheight/itemlength+1);
		$('#myCarousel .list-group-item').outerHeight(triggerheight);
	});
}

