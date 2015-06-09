var myAdmin = angular.module("myAdmin", []);

showTable(tabledata);


function showTable(data) {

	console.log("2: " + data);
	myAdmin.controller('ctrl-table', function($scope) {
		$scope.titles = data[0];
		data.splice(0, 1);
		$scope.table = data;
	});
}

function checkLogIn(user, pass) {
	if ((user === "admin") && (pass === "1357986420")) {
		console.log(1);
	} else {
		console.log(2);
	}
}