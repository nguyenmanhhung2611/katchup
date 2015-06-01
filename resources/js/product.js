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
		calcTotalCheckout();

		// Exists item product
		if(!$(".checkout-item").length) {
			$('#collapseCheckout').collapse('hide');
		}
    };
    $scope.changeAmountProduct = function(id) {
        for (i = 0; i < $PRODUCTS.length; i++) {
	        if($PRODUCTS[i].id == id) {	        	
				if (!checkJustNumberOnly($("#" + id + " input").val().trim())) {
					$("#" + id + " input").val("1");
				}
	        	$PRODUCTS[i].amount = parseInt($("#" + id + " input").val());
	        }
	    }
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
			// localStorage.setItem("products", $PRODUCTS);
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
});

function menuActiveDocument() {
	$(".katchup-menu li").each(function(index) {
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
	});
	$(".katchup-menu li:nth-child(4)").addClass("active");	
}

function checkout() {
	/*if(localStorage.getItem("products") != null) {
		$PRODUCTS = localStorage.getItem("products");
	}*/
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

function calcTotalCheckout() {
	var total = 0;
	$(".checkout-item").each(function() {
		total += parseInt(removeCommas($(this).find(".price b").text())) * parseInt($(this).find("input").val());
	});
	$(".checkout-total #total").text(commas(total.toString()) + "đ");
}

// Add commas in price
function commas(str) {
    return str.replace(/.(?=(?:.{3})+$)/g, '$&.');
}

// Remove commas in price
function removeCommas(str) {
	str.replace("đ", "");
    return str.replace(/\./g, "");
}

function checkJustNumberOnly(str) {
	if(str.match(/^[0-9]+$/) == null)
		return false;
	return true;
}

function checkExistsproduct(id) {
	for (i = 0; i < $PRODUCTS.length; i++) {
        if($PRODUCTS[i].id == id) {
        	$PRODUCTS[i].amount = $PRODUCTS[i].amount + 1;
        	return true;
        }
    }
    return false;
}
