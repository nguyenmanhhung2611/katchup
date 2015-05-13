/* Load script in every page */
// Document is ready
$(function() {
	menuActive();
	initBoxLetter();
	supportBootstrap();
	processModalHeader();
	validateFormLogin();
	validateFormForgotPassword();
	validateFormRegister();
});

function validateFormLogin() {
	$("#email").blur(function() {
		if(!validateEmail($(this).val())) {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});

	$("#passwd").blur(function() {
		if($(this).val().trim() == "") {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});	

	$("#login_form").submit(function(e){
		var hasError = $("#email").hasClass("error") || $("#passwd").val() == "";
		if(hasError) {
			// passwd
			if($("#passwd").val().trim() == "") {
				cssCheckErrorClass($("#passwd"), true);
			} else {
				cssCheckErrorClass($("#passwd"), false);
			}

			return false;
		}			
	});
}

function validateFormForgotPassword() {
	$("#emailForgotPassword").blur(function() {
		if(!validateEmail($(this).val())) {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});

	$("#forgot_password_form").submit(function(e){
		var hasError = $("#emailForgotPassword").hasClass("error");
		if(hasError) {
			// emailForgotPassword
			if(!validateEmail($("#emailForgotPassword").val())) {
				cssCheckErrorClass($("#emailForgotPassword"), true);
			} else {
				cssCheckErrorClass($("#emailForgotPassword"), false);
			}

			return false;
		}			
	});
}

function validateFormRegister() {
	$("#email-register").blur(function() {
		if(!validateEmail($(this).val())) {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});

	$("#password-register").blur(function() {
		if($(this).val().trim() == "") {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});	

	$("#confirm-password-register").blur(function() {
		if(!validateConfirmPassword($("#password-register"), $(this))) {
			cssCheckErrorClass($(this), true);
		} else {
			cssCheckErrorClass($(this), false);
		}
	});

	$("#register_form").submit(function(e){
		var hasError = $("#email-register").hasClass("error") || $("#password-register").val() == "" || $("#confirm-password-register").hasClass("error");
		if(hasError) {
			// password-register
			if($("#password-register").val().trim() == "") {
				cssCheckErrorClass($("#password-register"), true);
			} else {
				cssCheckErrorClass($("#password-register"), false);
			}

			// confirm-password-register
			if(!validateConfirmPassword($("#password-register"), $("#confirm-password-register"))) {
				cssCheckErrorClass($("#confirm-password-register"), true);
			} else {
				cssCheckErrorClass($("#confirm-password-register"), false);
			}

			return false;
		}

		$.post("home/register", { defaultReal : $("#defaultReal").val(), defaultRealHash: $("#defaultReal").realperson('getHash')} ,function(data) {			
		    if ($.trim(data) == "Error") {
		        cssCheckErrorClass($("#defaultReal"), true);
		    } else {
		    	// call ajax save account
		    	// ....
		    	location.reload();
		    }
		});
		return false;
	});
}

function processModalHeader() {
	$('#modalForgotPassword').on('shown.bs.modal', function () {
	  $('#modalLogin').modal('hide');
	});

	$('#modalForgotPassword').on('hidden.bs.modal', function (e) {
	  $('#modalLogin').modal('show');
	});	

	$('#modalRegister').on('shown.bs.modal', function () {
		$('#modalLogin').modal('hide');
		justGetNumber("#phone-number-register");
		$('#date-register').datetimepicker({
			format: 'dd/mm/yyyy',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0,
	        pickerPosition: "top-left"
		});
		$('#defaultReal').realperson();
		
	});
}

function supportBootstrap() {
	// Every time a modal is shown, if it has an autofocus element, focus on it.
	$('.modal').on('shown.bs.modal', function() {
	  $(this).find('[autofocus]').focus();
	});
}

function menuActive() {	
	$(".katchup-menu li a").last().css("border-right-width", "0px");
	/*$(".katchup-menu li").each(function( index ) {
		//console.log( index + ": " + $( this ).text() );
	});*/

	// Left navigater
	var menu = $(".katchup-menu li");
	menu.click(function() {
		menu.each(function(index) {
			if($(this).hasClass("active")) {
				$(this).removeClass("active");
			}
		});
		$(this).addClass("active");
	});

	// Right navigater
	$("#register").hover(function(){
		$("#login").removeClass("btn-login");
	});
	
	$("#register").mouseout(function(e) {
		$("#login").addClass("btn-login");
	});

	// Scrolltop
	$(".scrollup").click(function(e) {
	    $('html, body').stop().animate({
	        scrollTop: 0
	    }, 300);
	    e.preventDefault();
	});
}

function initBoxLetter() {
	$(".icon-email,.box-letter-title").click(function(e) {
		/*$("#box-letter-content").fadeIn(200).toggleClass("hide").delay(300).fadeOut(300);*/
	    $("#box-letter-content").fadeIn(400).removeClass("hide");
	    $("#txtName").focus();

	    // Scrollup page
	    $(".scrollup").css("padding-top","300px");

	    // Opacity box letter
	    $("#box-letter-header").css("opacity", "1");
	    
	});

	$(".icon-close").click(function(e) {
	    $("#box-letter-content").addClass("hide");
	    $("#txtName").focus();

	    // Scrollup page
	    $(".scrollup").css("padding-top","0px");

	    // Opacity box letter
	    $("#box-letter-header").css("opacity", "0.5");
	});

	// Opacity box letter
	$(".icon-close").hover(function(e) {
		if(!$("#box-letter-content").hasClass("hide")) {
			$("#box-letter-header").css("opacity", "1");
		}
		e.stopPropagation();
	});

	$(".icon-close").mouseout(function(e) {
		e.stopPropagation();
	});

	$(".icon-email,.box-letter-title").hover(function(e) {
		 $("#box-letter-header").css("opacity", "1");
	});
	
	$("#box-letter-header").hover(function(e){
		$("#box-letter-header").css("opacity", "1");
	});

	$("#box-letter-content").hover(function(e) {
		$("#box-letter-header").css("opacity", "1");
	});

	$("#box-letter-header").mouseout(function(e) {
		$("#box-letter-header").css("opacity", "0.5");
	});
}

function justGetNumber(element) {
	$(element).keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

function validateConfirmPassword(element1, element2) {
	if(element1.val().trim() == "" || element1.val() != element2.val())
		return false;
	return true;		
}

function cssCheckErrorClass(element, isError) {	
	if(isError) {
		element.addClass("error");
		element.next().addClass("error");

		element.next().removeClass("alert-success");
		element.next().children().removeClass("glyphicon-ok");
		element.next().children().addClass("glyphicon-remove");
	} else {
		element.removeClass("error");
		element.next().removeClass("error");

		element.next().addClass("alert-success");
		element.next().children().addClass("glyphicon-ok");
		element.next().children().removeClass("glyphicon-remove");
		element.next().children().removeClass("glyphicon-asterisk");
	}	
}
