$(document).ready(function(){
	console.log("ready");
	$('a.clickScroll').on('click', function(event) {
		console.log("a.scroll click even firing");
		event.preventDefault();
		var link = this;
		console.log(link);
		$.smoothScroll({
			scrollTarget: link.hash
		});
		return false;
	});
});