$(document).ready(function(){
	var clickExpand = function(obj){
		obj.addClass("corners");
		window.setTimeout(function(){
			console.log("t1 firing");
			$(".corners").addClass("stretch");
			$(".course-category:not('.stretch')").addClass("fade");
		}, 150);
	}
	
	var clickCollapse = function(){
		$(".stretch").addClass("target");
		console.log("stretch being removed")
		$(".target").removeClass("stretch");
		window.setTimeout(function(){
			console.log("queued function being fired");
			$(".course-category:not('.corners')").removeClass("fade");
			console.log("fade classes being removed");
			$(".target").removeClass("corners").removeClass("target");
		}, 605);
	}
	var exitHandler = function(e){
		var $this = $(this);
		//console.log(e.data);
		console.log("exitHanlder being fired");
		clickCollapse();
		$(".course-category").off("click.ccclick").on("click.ccclick",e.data,e.data.ch);
		e.stopPropagation();
	}
	var clickHander = function(e){
		var $this = $(this);
		//console.log(e.data);
		clickExpand($this);
		$(".course-category").off("click.ccclick").on("click.ccclick",e.data,e.data.eh);
		$this.off(".ccclick");
	};
	var dataDefaultObject = {eh:exitHandler,ch:clickHander};
	$(".course-category").on("click.ccclick",dataDefaultObject,clickHander);
	$(".close-button").on("click.ccclick",dataDefaultObject,exitHandler);
});