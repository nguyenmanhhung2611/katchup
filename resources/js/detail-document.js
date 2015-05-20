// Angularjs
var myDetailDocument = angular.module("myDetailDocument", []);
getPopularDocument();
getCategories();
getDocumentSummary(documentID);

function getCategories() {
	myDetailDocument.controller('ctrl-category', function($scope, $http) {
		$http.get("home/showListCategory").success(function(response) {
			$scope.arr = response;
			
		});
	});
}

function getPopularDocument() {
	myDetailDocument.controller('ctrl-popular-document', function($scope, $http) {
		
		$http.get("home/showPopularDocument").success(function(response) {
			$scope.arr = response;
			
		});
	});
}

function getDocumentSummary(documentID) {
	
	myDetailDocument.controller('ctrl-document-summary', function($scope, $http) {
		
		$http.get("home/showDocumentSummary/" + documentID).success(function(response) {
			$scope.sumDoc = response;
			
		});
	});
}

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