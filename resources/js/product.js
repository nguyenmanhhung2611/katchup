// Angularjs
var myProduct = angular.module("myProduct", []);

// Document is ready
$(function() {	
	menuActiveDocument();
});

function menuActiveDocument() {
	$(".katchup-menu li").each(function(index) {
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
	});
	$(".katchup-menu li:nth-child(4)").addClass("active");	
}

