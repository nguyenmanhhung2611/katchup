var test;

// Angularjs
var myAjax = angular.module("myAjax", []);
var arrAngularjs = [
        {name:'Jani',country:'Norway'},
        {name:'Hege',country:'Sweden'},
        {name:'Kai',country:'Denmark'}
    ];

var arrAngularjs1 = [
        {name:'Jani1',country:'Norway1'},
        {name:'Hege1',country:'Sweden1'},
        {name:'Kai1',country:'Denmark1'}
    ];

myAjax.controller("FirstCtrl", function($scope){
    $scope.names = null;
});

// Document is ready
$(function() {
	
});

function changeDataAngularjs() {
	var scope = angular.element($("#idctrlFirstCtrl")).scope();
	scope.$apply(function() {
		scope.names = arrAngularjs;
	});
}
function changeDataAngularjs1() {
	var scope = angular.element($("#idctrlFirstCtrl")).scope();
	scope.$apply(function() {
		scope.names = arrAngularjs1;
	});
}

// Ajax post no param response json
function ajaxPostNoParam() {	
	$.ajax ({
		url : $PN + "Ajax/ajaxPostNoParam",
		type : "post",
		// dataType : "json",
		// cache: false,
		// async: false,
		timeout : $AJAX_TIMEOUT,
		success : function(data) {
			console.log("Json data: ");
			console.log(data);
			var objectData = JSON.parse(data);
			console.log("Object data: ");
			console.log(objectData);
			test = objectData;
		},
		error : function(x, t, m) {
			alert($ERR_BUSY);
		},		
	});
}

// Ajax post param
function ajaxPostParam() {
	var eid = 111;
	var postData = {
    	'email' : 'shit@opswta.com',
    	'password' : 'shit',
    	'html' : 'PASS'
    };
	$.ajax ({
		url : $PN + "Ajax/ajaxPostParam",
		type : "post",
		// dataType : "json",
		// cache: false,
		// async: false,
		/*data : {
			id : eid
		},*/
		data : postData,
		timeout : $AJAX_TIMEOUT,
		success : function(data) {
			console.log("Json data: ");
			console.log(data);
		},
		error : function(x, t, m) {
			alert($ERR_BUSY);
		},		
	});
}

// Ajax post param in URL 
function ajaxPostParamInURL() {
	var eid = 222;
	$.ajax ({
		url : $PN + "Ajax/ajaxPostParamInURL?id=" + eid,
		type : "post",
		// dataType : "json",
		// cache: false,
		// async: false,		
		timeout : $AJAX_TIMEOUT,
		success : function(data) {
			console.log("Json data: ");
			console.log(data);
		},
		error : function(x, t, m) {
			alert($ERR_BUSY);
		},		
	});
}