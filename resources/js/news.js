// Angularjs
var myDocument = angular.module("myDocument", []);

// Document is ready
$(function() {	
	menuActiveDocument();
	loadDocument();
	RemoveLastItem();
});

function RemoveLastItem() {
	// Remove last hr in popular document
	$(".bottom-new-article").last().remove();

	// Remove last menu
	$(".category .item").last().addClass("removeItemAfter");

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

function loadDocument() {    
	var clickEvent = false;
	$('#myCarousel').carousel({
		interval:   4000	
	}).on('click', '.list-group li', function() {
			clickEvent = true;
			$('.list-group li').removeClass('active');
			$(this).addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.list-group').children().length -1;
			var current = $('.list-group li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.list-group li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});	
	
	$(window).load(function() {
		var boxheight = $('#myCarousel .carousel-inner').innerHeight();
	    var itemlength = $('#myCarousel .item').length;
	    var triggerheight = Math.round(boxheight/itemlength+1);
		$('#myCarousel .list-group-item').outerHeight(triggerheight);
	});
}

