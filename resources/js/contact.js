// Angularjs
var myContact = angular.module("myContact", []);

$(function() {
	menuActiveContact();
});

function menuActiveContact() {	
	$(".katchup-menu li").each(function(index) {
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
	});
	$(".katchup-menu li:nth-child(6)").addClass("active");
}