/* Load script in every page */
// Document is ready
$(function() {
	menuActive();
	initBoxLetter();
	supportBootstrap();
	processModalHeader();
});

function processModalHeader() {
	$('#modalForgotPassword').on('shown.bs.modal', function () {
	  $('#modalLogin').modal('hide');
	});

	$('#modalForgotPassword').on('hidden.bs.modal', function (e) {
	  $('#modalLogin').modal('show');
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