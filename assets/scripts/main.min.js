!function(e){
	"use strict";
	var t={};
	NProgress.start(),e(document).ready(function(){return t.module.init(),t.plugin.init(),e('[data-toggle="tooltip"]').length&&e('[data-toggle="tooltip"]').tooltip(),!1}),
	e(window).on("load",function(){return t.plugin.isotope.init(),t.func.resizeNotice(),NProgress.done(),!1}),
	t.module={
		init:function(){return t.module.dropDown("js__drop_down",!1),t.module.toggle(),!1},
		dropDown:function(t,i){var r=e("."+t);return r.each(function(){var t=e(this);t.on("click",".js__drop_down_button",function(o){return o.preventDefault(),(e(window).width()<1025||i===!1)&&(t.hasClass("active")?t.removeClass("active"):(r.removeClass("active"),t.addClass("active"))),!1})}),e("html").on("click",function(i){var r=e(i.target);r.hasClass(t)||r.parents("."+t).length||e("."+t+".active").removeClass("active")}),!1},
	},
	t.func={
		childReturnWidth:function(i,r){if(i.children("li").children(".sub-menu").length){var o=0;return i.children("li").children(".sub-menu").each(function(){var i=t.func.childReturnWidth(e(this),r+e(this).outerWidth());i>o&&(o=i)}),o}return r},
		resizeNotice:function(){e(".notice-popup").each(function(){var t=e(this),i=parseInt(t.data("space"),10)>0?parseInt(t.data("space"),10):75,r=e(window).height()-i;t.attr("style",""),t.height()>r&&t.css({height:r})})}
	},
	t.plugin={
		init:function(){return t.plugin.chart(),t.plugin.mCustomScrollbar(),t.plugin.select2(),t.plugin.ui.accordion(),t.plugin.ui.slider(),t.plugin.ui.sortable(),t.plugin.ui.tabs(),t.plugin.waves(),t.plugin.isotope.filter(),!1},
		isotope:{
			init:function(){return setTimeout(function(){e(".js__filter_isotope").each(function(){var t=e(this);t.find(".js__isotope_items").isotope({itemSelector:".js__isotope_item",layoutMode:"cellsByRow"})})},100),!1},
		}
	}
}(jQuery);