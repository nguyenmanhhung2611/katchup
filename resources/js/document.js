// Angularjs
var myDocument = angular.module("myDocument", []);

getPopularDocument();
getLatestDocument(categoryID);
getCategories();
//getListPaging();

function getLatestDocument(categoryID) {
	var param = "";
	if (categoryID > 0) {
		param = "/" + categoryID;
	}
	myDocument.controller('ctrl-new-articles', function($scope, $http) {
		$http.get("home/changeDocumentList" + param).success(function(response) {
			$scope.arr = response.documentList;
			$scope.categoryName = response.categoryName;
			if (!response.categoryName) {
				$scope.categoryName = "Bài đăng mới nhất";
			}
		});



		// paging
		$scope.filteredTodos = []
		,$scope.currentPage = 1
		,$scope.numPerPage = 10
		,$scope.maxSize = 5;

		

		$scope.makeTodos = function() {
			$scope.todos = [];
			for (i=1;i<=1000;i++) {
				$scope.todos.push({ text:'todo '+i, done:false});
			}
		};
		$scope.makeTodos(); 

		$scope.$watch('currentPage + numPerPage', function() {
			var begin = (($scope.currentPage - 1) * $scope.numPerPage)
			, end = begin + $scope.numPerPage;

			$scope.filteredTodos = $scope.todos.slice(begin, end);
		});
	});
}

function getCategories() {
	myDocument.controller('ctrl-category', function($scope, $http) {
		$http.get("home/showListCategory").success(function(response) {
			$scope.arr = response;
			
		});
	});
}

function getPopularDocument() {
	myDocument.controller('ctrl-popular-document', function($scope, $http) {
		
		$http.get("home/showPopularDocument").success(function(response) {
			$scope.arr = response;
			
		});
	});
}

function getListPaging() {
	
}

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

	// header menu
function menuActiveDocument() {
	$(".katchup-menu li").each(function(index) {
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
	});
	$(".katchup-menu li:nth-child(3)").addClass("active");	
}

	// slide
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

	// change "Bài đăng mới nhất" to CategoryName
function changeTitleOfListArticles() {

}

