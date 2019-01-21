$(document).ready(function(){
	$(".wrapper").hover(function() {
		$(this).children(".modalbox").css("display", "block");
		$(this).css("margin-bottom", "-199px");
	}, function() {
		$(this).children(".modalbox").css("display", "none");
		$(this).css("margin-bottom", "0");
	});
});