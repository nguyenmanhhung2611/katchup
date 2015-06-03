// Angularjs
var myProduct = angular.module("myProduct", []);
myProduct.controller("itemProductCtrl", function($scope){
    $scope.products = null;
    $scope.deleteItemProduct = function(id) {
        $("#collapseCheckout #" + id).remove();

        // Delete element in array
        for(var i = 0; i < $PRODUCTS.length; i++) {
			if($PRODUCTS[i].id == id)
				$PRODUCTS.splice(i, 1); 
		}
		sessionStorage.setItem("products", JSON.stringify($PRODUCTS));
		calcTotalCheckout();

		// Exists item product
		if(!$(".checkout-item").length) {
			$('#collapseCheckout').collapse('hide');
		}
    };
    $scope.changeAmountProduct = function(id) {
        for (i = 0; i < $PRODUCTS.length; i++) {
	        if($PRODUCTS[i].id == id) {	        	
				if ($("#" + id + " input").val().trim() == "") {
					$("#" + id + " input").val("1");
				}
	        	$PRODUCTS[i].amount = parseInt($("#" + id + " input").val());
	        }
	    }
	    sessionStorage.setItem("products", JSON.stringify($PRODUCTS));
	    calcTotalCheckout();
    };
});
myProduct.controller("ProductCtrl", function($scope){
    $scope.itemProduct = function(id) {
        var productElement = $(".product-item#" + id);

		if(!checkExistsproduct(id)) {
			var product = {
			  id : id,
			  img : productElement.find("img").attr("src"),
			  title : productElement.find(".caption h3 a").text(),
			  desc : productElement.find(".caption p").text(),
			  amount : 1,
			  price : productElement.find(".price").text()
			}
			$PRODUCTS.push(product);
			sessionStorage.setItem("products", JSON.stringify($PRODUCTS));
		}		

		var scope = angular.element($("#collapseCheckout")).scope();
		setTimeout(function () {
	        scope.$apply(function() {
				scope.products = $PRODUCTS;
			});
			calcTotalCheckout();

			// Exists item product
			if($(".checkout-item").length) {
				$('#collapseCheckout').collapse('show');
			}
	    }, 500);

    };
});

var $PRODUCTS = [];

// Document is ready
$(function() {	
	menuActiveDocument();
	checkout();
	addCommasProducts();
});

function chooseCity() {
	if($( "#tphcmCity" ).is(":checked")) {
		processChooseCity(true);
	} else {
		processChooseCity(false);
	}
	$( "#tphcmCity" ).click(function() {
		processChooseCity(true);
	});
	$( "#ttkCity" ).click(function() {
		processChooseCity(false);
	});
}

function processChooseCity(isTphcm) {
	if(isTphcm) {
		$("#collapseTphcm").collapse('show');
		$("#collapseTtk").collapse('hide');	

	} else {
		$("#collapseTtk").collapse('show');
		$("#collapseTphcm").collapse('hide');
	}
}

function menuActiveDocument() {
	$(".katchup-menu li").each(function(index) {
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
	});
	$(".katchup-menu li:nth-child(4)").addClass("active");	
}

function checkout() {
	if(sessionStorage.getItem("products") != null) {
		$PRODUCTS = JSON.parse(sessionStorage.getItem('products'));

		var scope = angular.element($("#collapseCheckout")).scope();
		setTimeout(function () {
	        scope.$apply(function() {
				scope.products = $PRODUCTS;
			});
			calcTotalCheckout();

			// Exists item product
			if($(".checkout-item").length) {
				$('#collapseCheckout').collapse('show');
			}
	    }, 500);
	}

	chooseCity();
	validateFormCheckout();

	$('#collapseCheckout').on('show.bs.collapse', function () {
		// Exists item product
		if(!$(".checkout-item").length) {
			
		} else {
			calcTotalCheckout();
		}
	});

	$('#collapseCheckout').on('shown.bs.collapse', function () {
		// Exists item product
		if(!$(".checkout-item").length) {
			$(this).collapse('hide');
		}
	});
}

function validateFormCheckout() {
	$("#name-checkout").blur(function() {
		if($(this).val().trim() == "") {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});

	$("#address-checkout").blur(function() {
		if($(this).val().trim() == "") {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});

	$("#phone-checkout").blur(function() {
		if(!validatePhoneNumber($(this).val())) {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});

	$("#checkout_form").submit(function(e){
		var hasError = !validatePhoneNumber($("#phone-checkout").val()) || $("#name-checkout").val().trim() == "" || $("#address-checkout").val().trim() == "";		
		if(hasError) {
			// name-checkout
			if($("#name-checkout").val().trim() == "") {
				cssCheckErrorClass($("#name-checkout"), true);
			} else {
				cssCheckErrorClass($("#name-checkout"), false);
			}

			// address-checkout
			if($("#address-checkout").val().trim() == "") {
				cssCheckErrorClass($("#address-checkout"), true);
			} else {
				cssCheckErrorClass($("#address-checkout"), false);
			}

			// phone-checkout
			if(!validatePhoneNumber($("#phone-checkout").val())) {
				cssCheckErrorClass($("#phone-checkout"), true);
			} else {
				cssCheckErrorClass($("#phone-checkout"), false);
			}
			return false;

		} else {
			$('#modalAlert').modal('show');
			$("#title-Modal-Alert").text("Thông tin");
			$("#content-Modal-Alert").html("Cám ơn bạn đã mua sản phẩm của chúng tôi </br> Đơn hàng của bạn đã được gửi đi, chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.");
			$('#btnClose-Modal-Alert').click(function() {
				AjaxCheckout();
			});
			return false;
		}		
	});
}

function AjaxCheckout() {
	var products = [];	
	$(".checkout-item").each(function() {
	    var product = {
		  id : $(this).attr("id"),
		  title : $(this).find(".title").text(),
		  price : removeCommas($(this).find(".price b").text()),
		  amount : $(this).find("input").val()
		}
		products.push(product);
	});

	var city = "ttk";
	var optionCity = $(".ttk-detail span").text();
	if($( "#tphcmCity" ).is(":checked")) {
		city = "tphcm";
		$("#collapseTphcm .radio input").each(function() {
		  if($(this).is(":checked")) {
		    optionCity = $(this).parent().text();
		  }
		});
	}	

	var postData = {
		'city' : city,
		'optionCity' : optionCity,
		'product' : products,
		'total' : removeCommas($("#total").text()),
    	'name' : $("#name-checkout").val().trim(),
    	'address' : $("#address-checkout").val(),
    	'phone' : $("#phone-checkout").val().trim(),
    	'email' : $("#email-checkout").val().trim()
    };

	$.ajax ({
		url : $PN + "SanPham/thanh_toan",
		type : "post",
		// dataType : "json",
		cache: false,
		// async: false,
		data : postData,
		timeout : $AJAX_TIMEOUT,
		success : function(data) {
			// console.log(data);
			if(data != 'Error') {
				sessionStorage.removeItem("products");
				location.reload();
			}			
		},
		error : function(x, t, m) {
			alert($ERR_BUSY);
		},		
	});
}

function calcTotalCheckout() {
	var total = 0;
	$(".checkout-item").each(function() {
		total += parseInt(removeCommas($(this).find(".price b").text())) * parseInt($(this).find("input").val());
	});
	$(".checkout-total #total").text(commas(total.toString()) + "đ");
}

function addCommasProducts() {
	$(".product-item .caption").each(function() {
		if($(this).find(".price-old").text() == "0đ") {
			$(this).find(".price-old").text("00.000đ");
			$(this).find(".price").text("00.000đ");
		} else {
			$(this).find(".price-old").text(commasItemProduct($(this).find(".price-old").text()));
			$(this).find(".price").text(commasItemProduct($(this).find(".price").text()));
		}		
	});
}

// Add commas to item product
function commasItemProduct(str) {
	str = str.replace("đ", "");
    return str.replace(/.(?=(?:.{3})+$)/g, '$&.') + "đ";
}

// Add commas in price
function commas(str) {
    return str.replace(/.(?=(?:.{3})+$)/g, '$&.');
}

// Remove commas in price
function removeCommas(str) {
	str = str.replace("đ", "");
    return str.replace(/\./g, "");
}

function checkExistsproduct(id) {
	for (i = 0; i < $PRODUCTS.length; i++) {
        if($PRODUCTS[i].id == id) {
        	$PRODUCTS[i].amount = $PRODUCTS[i].amount + 1;
        	sessionStorage.setItem("products", JSON.stringify($PRODUCTS));
        	return true;
        }
    }
    return false;
}
