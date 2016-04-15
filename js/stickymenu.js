$(document).ready(function(){

	var metrics = {},
		metricDefiner = function() {
			return {
				stickyMenu:	$(".quad-container.sticky-menu"),
				staticMenu:	$(".quad-container:not(.sticky-menu)"),
				menuHeight:	$(".quad-container:not(.sticky-menu)").offset(),
				isWideEnough: ($(window).width() > 1100)
			};
		},
		modifyMenu = function() {
			if(metrics.isWideEnough) {//check if within desired breakpoint
				if($(document).scrollTop() > metrics.menuHeight.top){//condition:scrolled lower than static menu
					console.log("doStuff");
					if(metrics.stickyMenu.hasClass("invis")){//if stickyMenu has invis, get rid of it
						metrics.stickyMenu.removeClass("invis");
						metrics.staticMenu.addClass("invis");
					}				
				} else {//condition:scrolled at or above the static menu
					if(!metrics.stickyMenu.hasClass("invis")){//if stickyMenu doesn't have invis, add it
						metrics.stickyMenu.addClass("invis");
						metrics.staticMenu.removeClass("invis");
					}
				}
			} else {//condition:not in the right break point
				if(!metrics.stickyMenu.hasClass("invis")){//if stickyMenu doesn't have invis, add it
					metrics.stickyMenu.addClass("invis");
					metrics.staticMenu.removeClass("invis");
				}
			}
		}
	;
	$(window).resize(function(){metrics=metricDefiner();modifyMenu();});//on resize, run modifymenu
	$(document).on("scroll", modifyMenu);//on scroll, run modifymenu
	metrics = metricDefiner();
	modifyMenu();
});