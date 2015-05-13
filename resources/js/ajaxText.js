// Ajax settings
var $AJAX_TIMEOUT = "30000";
var $ERR_BUSY = "Server is busy, please try again";
var $PN = "/" + location.pathname.split("/")[1] + "/";
var test;

// Document is ready
$(function() {	

});

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