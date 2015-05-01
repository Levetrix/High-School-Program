$(document).ready(function(){
	var clickExpand = function(obj){
		obj.addClass("corners");
		window.setTimeout(function(){
			$("#course-category-container:not(.expand-box) .corners").addClass("stretch");
			$("#course-category-container:not(.expand-box) .course-category:not('.stretch')").addClass("fade");
		}, 150);
	}
	
	var clickCollapse = function(){
		$("#course-category-container:not(.expand-box) .stretch").addClass("target");
		$("#course-category-container:not(.expand-box) .target").removeClass("stretch");
		window.setTimeout(function(){
			$("#course-category-container:not(.expand-box) .course-category:not('.corners')").removeClass("fade");
			$("#course-category-container:not(.expand-box) .target").removeClass("corners").removeClass("target");
		}, 605);
	}
	var exitHandler = function(e){
		var $this = $(this);
		clickCollapse();
		$("#course-category-container:not(.expand-box) .course-category").off("click.ccclick").on("click.ccclick",e.data,e.data.ch);
		e.stopPropagation();
	}
	var clickHander = function(e){
		var $this = $(this);
		clickExpand($this);
		$("#course-category-container:not(.expand-box) .course-category").off("click.ccclick").on("click.ccclick",e.data,e.data.eh);
		$this.off(".ccclick");
		if ($(window).width() < 550) {
			$("body, html").animate({ 
	            scrollTop: ($(this).offset().top - 12)
	        }, 600);
		}
	};
	var dataDefaultObject = {eh:exitHandler,ch:clickHander};
	$("#course-category-container:not(.expand-box) .course-category").on("click.ccclick",dataDefaultObject,clickHander);
	$("#course-category-container:not(.expand-box) .close-button").on("click.ccclick",dataDefaultObject,exitHandler);

	/*second set of handler objects */
	
	var clickExpand2 = function(obj){
		obj.addClass("corners");
		window.setTimeout(function(){
			$("#course-category-container.expand-box > .corners").addClass("stretch");
			$("#course-category-container.expand-box > .course-category:not('.stretch')").addClass("fade");
			$(".courses-collapsed").addClass("courses-expanded").removeClass("courses-collapsed");
		}, 150);
	}
	var clickCollapse2 = function(){
		$("#course-category-container.expand-box > .stretch").addClass("target");
		$("#course-category-container.expand-box > .target").removeClass("stretch");
		$(".courses-expanded").addClass("courses-collapsed").removeClass("courses-expanded");
		window.setTimeout(function(){
			$("#course-category-container.expand-box > .course-category:not('.corners')").removeClass("fade");
			$("#course-category-container.expand-box > .target").removeClass("corners").removeClass("target");
		}, 605);
	}
	var exitHandler2 = function(e){
		var $this = $(this);
		clickCollapse2();
		$("#course-category-container.expand-box > .course-category").off("click.ccclick").on("click.ccclick",e.data,e.data.ch2);
		e.stopPropagation();
	}
	var clickHander2 = function(e){
		var $this = $(this);
		clickExpand2($this);
		$("#course-category-container.expand-box > .course-category").off("click.ccclick").on("click.ccclick",e.data,e.data.eh2);
		$this.off(".ccclick");
		if ($(window).width() < 550) {
			$("body, html").animate({ 
	            scrollTop: ($(this).offset().top - 12)
	        }, 600);
		}
	};
	var dataDefaultObject = {eh2:exitHandler2,ch2:clickHander2};
	$("#course-category-container.expand-box > .course-category").on("click.ccclick",dataDefaultObject,clickHander2);
	$("#course-category-container.expand-box > .course-category > .close-button").on("click.ccclick",dataDefaultObject,exitHandler2);

});