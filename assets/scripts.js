$(document).ready(function() {
	//jQuery Smooth Jump Scroll
	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});

	$var = "yes";
	
	if ($var == "yes") {
		$('#no').hide();
		$("body").css("background-color", "#7ce288");

	} 

	if ($var == "no") {
		$('#yes').hide();
		$("body").css("background-color", "#ed0f0f");

	} 


	
	//Footer Date
	$("#footer-date").text( (new Date).getFullYear() );

});
