$(document).ready(function(){
	$('a.clickScroll').on('click', function(event) {
		event.preventDefault();
		var link = this;
		$.smoothScroll({
			scrollTarget: link.hash,
			easing: 'swing',
			speed: 1050
		});
		return false;
	});
});