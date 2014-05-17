/*
 *  SliderNav - A Simple Content Slider with a Navigation Bar
 *  Copyright 2010 Monjurul Dolon, http://mdolon.com/
 *  Released under the MIT, BSD, and GPL Licenses.
 *  More information: http://devgrow.com/slidernav
 */
$(function(){
	$('.slider-content').qscroll();
});

$.fn.sliderNav = function(options) {
	var defaults = { items: ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"], debug: false, height: null, arrows: true};
	var opts = $.extend(defaults, options); var o = $.meta ? $.extend({}, opts, $$.data()) : opts; var slider = $(this); $(slider).addClass('slider');
	$('.slider-content li:first', slider).addClass('selected');
	$(slider).append('<div class="slider-nav"><ul></ul></div>');
	for(var i in o.items) $('.slider-nav ul', slider).append("<li><a alt='#"+o.items[i]+"'>"+o.items[i]+"</a></li>");
	//var height = $('.slider-nav', slider).height();
	var height = $(window).height()-72;
	
	if(o.height) height = o.height;
	$('.slider-content', slider).css('height',height);
	$('.slider-nav', slider).css('height',$(window).height());
	if(o.debug) $(slider).append('<div id="debug">Scroll Offset: <span>0</span></div>');
	$('.slider-nav a', slider).on('touchstart',function(event){
		//pv_transmoveY($('.slider-content', slider).children('ul')[0],0);
		var target = $(this).attr('alt');
		//var cOffset = $('.slider-content', slider).offset().top;
		var tOffset = $(target, slider).offset().top;
		//var height = $('.slider-nav', slider).height(); if(o.height) height = o.height;
		//var pScroll = (tOffset - cOffset) - height/8;
		var pScroll = tOffset - $('.slider-content', slider).children('ul').data('rellistdata');
		$('.slider-content li', slider).removeClass('selected');
		$(target).addClass('selected');
		//$('.slider-content', slider).stop().animate({scrollTop: '+=' + pScroll + 'px'});
		pv_transmovetimeY($('.slider-content', slider).children('ul')[0],32-pScroll,500);
		
	});
	if(o.arrows){
		$('.slider-nav',slider).css('top','0px');
		$(slider).prepend('<div class="slide-up end"><span class="arrow up"></span></div>');
		$(slider).append('<div class="slide-down"><span class="arrow down"></span></div>');
		$('.slide-down',slider).on('touchstart',function(){
			pv_transmovetimeY($('.slider-content', slider).children('ul')[0],$('.slider-content', slider).children('ul').data('rellistdatamin'),500);
		});
		$('.slide-up',slider).on('touchstart',function(){
			pv_transmovetimeY($('.slider-content', slider).children('ul')[0],0,500);
		});
	}
};

function tel(tel){
	location.href="parentscript://location.href='tel:"+tel+"'";
}