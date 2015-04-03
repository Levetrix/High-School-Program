$(document).ready(function(){
	var clickExpand = function(obj){
		obj.addClass("corners");
		window.setTimeout(function(){
			$(".corners").addClass("stretch");
			$(".course-category:not('.stretch')").addClass("fade");
		}, 150);
	}
	
	var clickCollapse = function(){
		$(".stretch").addClass("target");
		$(".target").removeClass("stretch");
		window.setTimeout(function(){
			$(".course-category:not('.corners')").removeClass("fade");
			$(".target").removeClass("corners").removeClass("target");
		}, 605);
	}
	var exitHandler = function(e){
		var $this = $(this);
		clickCollapse();
		$(".course-category").off("click.ccclick").on("click.ccclick",e.data,e.data.ch);
		e.stopPropagation();
	}
	var clickHander = function(e){
		var $this = $(this);
		clickExpand($this);
		$(".course-category").off("click.ccclick").on("click.ccclick",e.data,e.data.eh);
		$this.off(".ccclick");
		if ($(window).width() < 550) {
			$("body, html").animate({ 
	            scrollTop: ($(this).offset().top - 12)
	        }, 600);
		}
	};
	var dataDefaultObject = {eh:exitHandler,ch:clickHander};
	$(".course-category").on("click.ccclick",dataDefaultObject,clickHander);
	$(".close-button").on("click.ccclick",dataDefaultObject,exitHandler);
});