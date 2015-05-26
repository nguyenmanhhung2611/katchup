console.log(1);
var myAdminAddDoc = angular.module("myAdminAddDoc", []);

showCategoryList();


function showCategoryList() {
	console.log(3);
	myAdminAddDoc.controller('ctrl-choose-category', function($scope, $http) {
		$http.get("home/showListCategory").success(function(response) {
			$scope.arr_category = response;
			console.log(response);
		});
	});
}

