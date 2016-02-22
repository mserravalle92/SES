$(document).ready(function(){
	var url = window.location.pathname;
	$('.nav ul li a[href="'+url+'"]').addClass('active');
})