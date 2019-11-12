/*-------------------------------------------------------------------------------------------------------------------------------*/
/*This is main JS file that contains custom style rules used in this template*/
/*-------------------------------------------------------------------------------------------------------------------------------*/
/* Template Name: Travel*/
/* Version: 1.0 Initial Release*/
/* Build Date: 22-04-2015*/
/* Author: Unbranded*/
/* Website: http://moonart.net.ua/site/
/* Copyright: (C) 2015 */
/*-------------------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------*/
/* TABLE OF CONTENTS: */
/*--------------------------------------------------------*/
/* 01 - VARIABLES */
/* 02 - PAGE CALCULATIONS */
/* 03 - FUNCTION ON DOCUMENT READY */
/* 04 - FUNCTION ON PAGE LOAD */
/* 05 - FUNCTION ON PAGE RESIZE */
/* 06 - FUNCTION ON PAGE SCROLL */
/* 07 - SWIPER SLIDERS */
/* 08 - BUTTONS, CLICKS, HOVERS */
/* 09 - LIGHT-BOX */

/*-------------------------------------------------------------------------------------------------------------------------------*/
$(function() {

	"use strict";



	/*================*/
	/* 01 - VARIABLES */
	/*================*/

	var swipers = [], winW, winH, winScr, $container, _isresponsive, xsPoint = 451, smPoint = 768, mdPoint = 992, lgPoint = 1200, addPoint = 1600, _ismobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);

	/*========================*/
	/* 02 - PAGE CALCULATIONS */
	/*========================*/
	function pageCalculations(){
		winW = $(window).width();
		winH = $(window).height();
		if($('.menu-button').is(':visible')) _isresponsive = true;
		else _isresponsive = false;
	}

	/*=================================*/
	/* 03 - FUNCTION ON DOCUMENT READY */
	/*=================================*/
	pageCalculations();
	accordionChooser();

	//center all images inside containers
	$('.center-image').each(function(){
		var bgSrc = $(this).attr('src');
		$(this).parent().addClass('background-block').css({'background-image':'url('+bgSrc+')'});
		$(this).hide();
	});

	//sticked header
	var $st_header = $('header');
	if($st_header.hasClass('header-sticked')){
		if ($st_header.hasClass('st-58')){
			$('body').addClass('st-58');
		} else if ($st_header.hasClass('st-100')){
			$('body').addClass('st-100');
		} else if($st_header.hasClass('st-148')){
			$('body').addClass('st-148');
		} else{
			$('body').addClass('stick');
		}

	}

	/*============================*/
	/* 04 - FUNCTION ON PAGE LOAD */
	/*============================*/
	$(window).load(function(){
		initFullPage();
		initSwiper();
		videoRezise();
		tpEntryHover();
		$('.loading').fadeOut(700);

		$('.isotope-container').isotope({itemSelector: '.item', masonry:{gutter:0,columnWidth:'.grid-sizer'}});
		var initValue = $('.filter-nav').find('.selected a').attr('data-filter');
		$container.isotope({itemSelector: '.item', filter: initValue,masonry:{gutter:0,columnWidth:'.grid-sizer'}});



	});
	/*==============================*/
	/* 05 - FUNCTION ON PAGE RESIZE */
	/*==============================*/
	function resizeCall(){
		pageCalculations();
		videoRezise();
		initFullPage();
		updateFullPage();
		tpEntryHover();

		$('.swiper-container.initialized[data-slides-per-view="responsive"]').each(function(){
			var thisSwiper = swipers['swiper-'+$(this).attr('id')], $t = $(this), slidesPerViewVar = updateSlidesPerView($t);
			thisSwiper.params.slidesPerView = slidesPerViewVar;
			thisSwiper.reInit();
			var paginationSpan = $t.find('.pagination span');
			var paginationSlice = paginationSpan.hide().slice(0,(paginationSpan.length+1-slidesPerViewVar));
			if(paginationSlice.length<=1 || slidesPerViewVar>=$t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
			else $t.removeClass('pagination-hidden');
			paginationSlice.show();
		});
	}
	if(!_ismobile){
		$(window).resize(function(){
			resizeCall();
		});
	} else{
		window.addEventListener("orientationchange", function() {
			resizeCall();
		}, false);
	}

	/*=====================*/
	/* 07 - swiper sliders */
	/*=====================*/
	function initSwiper(){
		var initIterator = 0;
		$('.swiper-container').each(function(){
			var $t = $(this);

			var index = 'swiper-unique-id-'+initIterator;

			$t.addClass('swiper-'+index + ' initialized').attr('id', index);
			$t.find('.pagination').addClass('pagination-'+index);

			var autoPlayVar = parseInt($t.attr('data-autoplay'),10);
			var centerVar = parseInt($t.attr('data-center'),10);
			var simVar = ($t.closest('.circle-description-slide-box').length)?false:true;

			var slidesPerViewVar = $t.attr('data-slides-per-view');
			if(slidesPerViewVar == 'responsive'){
				slidesPerViewVar = updateSlidesPerView($t);
			}
			else slidesPerViewVar = parseInt(slidesPerViewVar,10);

			var loopVar = parseInt($t.attr('data-loop'),10);
			var speedVar = parseInt($t.attr('data-speed'),10);

			var slidesPerGroup = parseInt($t.attr('data-slides-per-group'),10);
			if(!slidesPerGroup){slidesPerGroup=1;}

			swipers['swiper-'+index] = new Swiper('.swiper-'+index,{
				speed: speedVar,
				pagination: '.pagination-'+index,
				loop: loopVar,
				paginationClickable: true,
				autoplay: autoPlayVar,
				slidesPerView: slidesPerViewVar,
				slidesPerGroup: slidesPerGroup,
				keyboardControl: true,
				calculateHeight: true,
				simulateTouch: simVar,
				centeredSlides: centerVar,
				roundLengths: true,
				onInit: function(swiper){
					var browserWidthResize = $(window).width();
					if (browserWidthResize < 750) {
							swiper.params.slidesPerGroup=1;
					} else {
                      swiper.params.slidesPerGroup=slidesPerGroup;
					}
				},
				onResize: function(swiper){
					var browserWidthResize2 = $(window).width();
					if (browserWidthResize2 < 750) {
							swiper.params.slidesPerGroup=1;
					} else {
                      swiper.params.slidesPerGroup=slidesPerGroup;
					  swiper.resizeFix(true);
					}
				},
				onSlideChangeEnd: function(swiper){
					var activeIndex = (loopVar===1)?swiper.activeLoopIndex:swiper.activeIndex;
					var qVal = $t.find('.swiper-slide-active').attr('data-val');
					$t.find('.swiper-slide[data-val="'+qVal+'"]').addClass('active');
				},
				onSlideChangeStart: function(swiper){
					$t.find('.swiper-slide.active').removeClass('active');
					if($t.hasClass('thumbnails-preview')){
						var activeIndex = (loopVar===1)?swiper.activeLoopIndex:swiper.activeIndex;
						swipers['swiper-'+$t.next().attr('id')].swipeTo(activeIndex);
						$t.next().find('.current').removeClass('current');
						$t.next().find('.swiper-slide[data-val="'+activeIndex+'"]').addClass('current');
					}
				},
				onSlideClick: function(swiper){
					if($t.hasClass('thumbnails')) {
						swipers['swiper-'+$t.prev().attr('id')].swipeTo(swiper.clickedSlideIndex);
					}
				}
			});
			swipers['swiper-'+index].reInit();
			if($t.attr('data-slides-per-view')=='responsive'){
				var paginationSpan = $t.find('.pagination span');
				var paginationSlice = paginationSpan.hide().slice(0,(paginationSpan.length+1-slidesPerViewVar));
				if(paginationSlice.length<=1 || slidesPerViewVar>=$t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
				else $t.removeClass('pagination-hidden');
				paginationSlice.show();
			}
			initIterator++;
		});

	}

	function updateSlidesPerView(swiperContainer){
		if(winW>=addPoint) return parseInt(swiperContainer.attr('data-add-slides'),10);
		else if(winW>=lgPoint) return parseInt(swiperContainer.attr('data-lg-slides'),10);
		else if(winW>=mdPoint) return parseInt(swiperContainer.attr('data-md-slides'),10);
		else if(winW>=smPoint) return parseInt(swiperContainer.attr('data-sm-slides'),10);
		else if(winW>=xsPoint) return parseInt(swiperContainer.attr('data-xs-slides'),10);
		else return parseInt(swiperContainer.attr('data-mob-slides'),10);
	}

	//swiper arrows
	$('.swiper-arrow-left').on('click',function(){
		swipers['swiper-'+$(this).closest('.arrows').find('.swiper-container').attr('id')].swipePrev();
	});
	$('.swiper-arrow-right').on('click',function(){
		swipers['swiper-'+$(this).closest('.arrows').find('.swiper-container').attr('id')].swipeNext();
	});



	/*==============================*/
	/* 06 - FUNCTION ON PAGE SCROLL */
	/*==============================*/
	$(window).scroll(function() {
	    if ($(window).scrollTop() >= 10){
			$('header').addClass('scrol');
		}else {
			$('header').removeClass('scrol');
		}


	});

	if ($(window).width()<768){

		$('.drop-tabs').on( "click", function() {
			if($('.arrow-down').hasClass('act')){
				$(this).find('.arrow-down').removeClass('act');
				$(this).find('.nav-tabs').slideUp(400);

			}else{
               	$('.drop span').slideUp(300);
				$(this).find('.arrow-down').addClass('act');
				$(this).find('.nav-tabs').slideDown(400);
			}
			return false;
		});




    	$('.click-tabs').on( "click", function() {
			var tabbIndex =$(this).index();
			$(this).parent().parent().parent().find('b').text($(this).text());
			$('.drop-tabs').find('.nav-tabs').slideUp(400);
		    $('.tab-pane').removeClass('active');
		    $('.tab-pane').eq(tabbIndex).addClass('active');
		});
	}



		function timePiker() {
			$('.timePiker').each(function(){
			   $('.timePiker').DateTimePicker({
					dateTimeFormat: "dd-MM-yyyy hh:mm:ss AA",
					maxDateTime: "20-07-2016 12:00:00 AM",
					minDateTime: "20-07-2012 12:00:00 AM",


					animationDuration: 100
				});
			});

		 }

	timePiker();

	$('.click-tabs a').on('click', function(){
		timePiker();
		});

	/***********************************/
	/*VIDEO CKICK*/
	/**********************************/

	$('.video-click').on( "click", function() {
			$(this).find('iframe').attr('src',$(this).find('.video-change').attr('href') + '&autoplay=1');
            $(this).find('.video').show();
            $(this).find('.img-href').hide();
			$(this).find('.video-title').hide();
	    });

		$('.video .close-v').on('click', function(){
			$('.video').fadeOut(500, function(){
				$('.video iframe').attr('src','');
				$('.img-href').show();
				$('.video-title').show();
			});
	});
	function videoRezise(){
		$('.video-click').find('iframe').height($('.img-href').height());
	}

    $(document).on('click', '.video-open', function(){
		$('.video-player').addClass('active');
		var videoSource = $(this).find('img').attr('data-src');
		setTimeout(function(){$('.video-player iframe').attr('src', videoSource);}, 1000);
	});

	$('.video-player .close-iframe').on('click', function(){
		$('.video-player iframe').attr('src', '');
		setTimeout(function(){$('.video-player').removeClass('active');}, 1000);

	});

	$('#fullpage').on('mousewheel', function(event) {
    	console.log(event.deltaX, event.deltaY, event.deltaFactor);
	});

	/*==============================*/
	/* 06 - POPUPS */
	/*==============================*/
	//search popup

	$('.search .search-img').on( "click", function() {
		$(this).siblings('.search-popup').toggleClass("active");
		return false;
	});
	$('.s_close	').on( "click", function() {
		$(this).parent('.search-popup').toggleClass("active");
		return false;
	});


	//cart popup
	$('.card-icon, .card-link').on( "click", function() {
		$(this).siblings('.cart-popup').slideToggle();
		return false;
	});
	$('.cart_close').on( "click", function() {
		$(this).parent('.cart-popup').slideToggle();
		return false;
	});
	$('.cart-popup .item-remove').on( "click", function() {
		$(this).parents('.hotel-small').remove();
		return false;
	});


	/*==============================*/
	/* 06 - TABS, DROPDOWNS, COUNTERS, DATEPIKER  */
	/*==============================*/

    //Tabs
	var tabFinish = 0;
	$(document).on('click', '.nav-tab-item', function(){

	    var $t = $(this);
	    if(tabFinish || $t.hasClass('active')) return false;
	    tabFinish = 1;
	    $t.closest('.nav-tab').find('.nav-tab-item').removeClass('active');
	    $t.addClass('active');
	    var index = $t.parent().parent().find('.nav-tab-item').index(this);
	    $t.closest('.tab-wrapper').find('.tab-info:visible').fadeOut(500, function(){
	        $t.closest('.tab-wrapper').find('.tab-info').eq(index).fadeIn(500, function() {
	            tabFinish = 0;
	            resizeCall();
				setTimeout (function(){
				  initSwiper();
				},500)

	        });
	    });
	});

	$('.cat-drop').on('click', function(){
		var $t = $(this).parent('li');
		if ($t.hasClass('active')) return false;
		/*$t.parent('.sidebar-category').find('li.active ul').slideToggle(300, function(){
			$(this).parent('li').removeClass('active');
			 $t.addClass('active').find('ul').slideToggle(300);
		});*/
		var $cat_active = $t.parent('.sidebar-category').find('li.active');
		$cat_active.removeClass('active');
		$cat_active.find('ul').slideToggle();
		$t.addClass('active').find('ul').slideToggle();

		return false;
	});

	//Dropdown
	$('.drop').on( "click", function() {
		if($(this).find('.drop-list').hasClass('act')){
			$(this).find('.drop-list').removeClass('act');
			$(this).find('span').slideUp(300);
		}else{
           	$('.drop span').slideUp(300);
           	$('.drop .act').removeClass('act');
			$(this).find('.drop-list').addClass('act');
			$(this).find('span').slideDown(300);
		}
		return false;
	});
    $('.drop span a').on( "click", function() {
			$(this).parent().parent().find('b').text($(this).text());
			$('.drop').find('span').slideUp(300);
	});

	/*accordion*/
	$('.accordion').each(function(){
		$(this).find('.acc-title').on("click", function(){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$(this).siblings('.acc-body').slideUp();
			} else{
				$(this).closest('.accordion').find('.active').removeClass('active');
				$(this).closest('.accordion').find('.acc-body').slideUp('slow');
				$(this).toggleClass('active');
				$(this).siblings('.acc-body').slideToggle('slow');
			}
		});
	});

	//accordion-chooser
	$('.accordion-chooser a').on('click', function(){
		if($(this).hasClass('active')) return false;
		var filter = $(this).data('fifter');

		var accordion = $(this).parents('.accordion-filter').find('.accordion');
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		if (filter=="*"){
			accordion.find('.acc-panel').show();
		} else{
			accordion.find('.acc-panel:not('+filter+')').hide();
			accordion.find(filter).show();
		}

		return false;
	});
	function accordionChooser(){
		if($('.accordion-chooser').length){
			var active_filter = $('.accordion-chooser').find('a.active');
			var filter = active_filter.data('fifter');
			var accordion = active_filter.parents('.accordion-filter').find('.accordion');
			active_filter.siblings('.active').removeClass('active');
			active_filter.addClass('active');
			if (filter=="*"){
				accordion.find('.acc-panel').show();
			} else{
				accordion.find('.acc-panel:not('+filter+')').hide();
				accordion.find(filter).show();
			}

			return false;

		}
	}

	//counters
	if ($('.counters').length){
	$('.counters').viewportChecker({
		classToAdd: 'counted',
		offset: 100,
		callbackFunction: function(elem, action){
			elem.find('.counter-number').countTo();
		}
	});
	}

	//Datepiker
	if ($( ".datepicker" ).length){
    $( ".datepicker" ).datepicker();
	}

	//slider range
  	$(".slider-range" ).each(function(index) {
     	var counter = $(this).data('counter');
     	var position = $(this).data('position');
     	var from = parseInt($(this).data('from'),10);
     	var to = parseInt($(this).data('to'),10);
     	var min = parseInt($(this).data('min'),10);
     	var max = parseInt($(this).data('max'),10);
     	$(this).find(".range").attr("id","slider-range-"+index);
     	$(this).find(".amount-start").attr("id","amount-start-"+index);
     	$(this).find(".amount-end").attr("id","amount-end-"+index);
	  	$("#slider-range-"+index).slider({
			range: true,
			min: min,
			max: max,
			values: [ from , to ],
			slide: function( event, ui ) {
				if (position=="start"){
					$("#amount-start-"+index).val(counter + ui.values[ 0 ]);
					$("#amount-end-"+index).val(counter + ui.values[ 1 ]);
				} else{
					$("#amount-start-"+index).val(ui.values[ 0 ] + counter);
					$("#amount-end-"+index).val(ui.values[ 1 ] + counter);
				}
			}
	    });
	    if (position=="start"){
    		$("#amount-start-"+index).val(counter + $("#slider-range-"+index).slider("values",0));
    		$("#amount-end-"+index).val(counter + $("#slider-range-"+index).slider("values",1));
    	} else {
    		$("#amount-start-"+index).val($("#slider-range-"+index).slider("values",0) + counter);
    		$("#amount-end-"+index).val($("#slider-range-"+index).slider("values",1) + counter);
    	}
    });


	//circliful
	if ($('.circle-wrapper').length){
	$('.circle-wrapper').viewportChecker({
		classToAdd: 'counted',
		offset: 100,
		callbackFunction: function(elem, action){
			elem.find('.circle').circliful();
		}
	});
	}

	//progress bar
	if ($('.progress-wrapper').length){
	$('.progress-wrapper').viewportChecker({
		classToAdd: 'counted',
		offset: 100,
		callbackFunction: function(elem, action){
			elem.find('.count').countTo();

			elem.find('.progress-block').not('.counted').each(function(){
				$(this).addClass('counted');
				var $progress_bar = $(this).find('.progress-bar');
				var speed = parseInt($progress_bar.attr("data-speed"),10);
				var to = $progress_bar.attr("data-to");
				$progress_bar.animate({width: to+"%"}, {duration: speed});
			});
		}
	});
	}


	//isotope filter
	$container = $('.filter-content');
	$('.filter-nav').on( 'click', 'a', function() {
		var filterValue = $(this).attr('data-filter');
		$container.isotope({ filter: filterValue });
		var $buttonGroup = $(this).parent().parent();
		$buttonGroup.find('.selected').removeClass('selected');
		$(this).parent().addClass('selected');
	});

	//timer
  	function format(number){
    	if(number===0){
      		return '00';
    	}else if (number < 10) {
          	return '0' + number;
      	} else{
          	return ''+number;
      	}
    }
	function setTimer(final_date){
		var today = new Date();
		var finalTime = new Date(final_date);
		var interval = finalTime - today;
		if(interval<0) interval = 0;
		var days = parseInt(interval/(1000*60*60*24),10);
		var daysLeft = interval%(1000*60*60*24);
		var hours = parseInt(daysLeft/(1000*60*60),10);
		var hoursLeft = daysLeft%(1000*60*60);
		var minutes = parseInt(hoursLeft/(1000*60),10);
		var minutesLeft = hoursLeft%(1000*60);
		var seconds = parseInt(minutesLeft/(1000),10);
		$('.days').text(format(days));
		$('.hours').text(format(hours));
		$('.minutes').text(format(minutes));
		$('.seconds').text(format(seconds));
	}
	if($('.back-counter').length){
	 	var final_date  = $('.back-counter').data('finaldate');
		setTimer(final_date);
		setInterval(function(){setTimer(final_date);}, 1000);
	}

	//countdown
	if($('.ClassyCountdown').length){
		$('#countdown').ClassyCountdown({
			theme: "white", // theme
			end: $.now() + 645600,
			// custom style for the countdown
			style: {
			  element: '',
			  labels: false,
			  days: {gauge: {thickness: 0.05}},
			  hours: {gauge: {thickness: 0.05}},
			  minutes: {gauge: {thickness: 0.05}},
			  seconds: {gauge: {thickness: 0.05}}
			}
		});
	}


	/*==============================*/
	/* 06 - CHANGE CONTENT */
	/*==============================*/
	//change hotel content simulate
    $('.choose-hotel .drop span a').on( "click", function() {
		var $hotelCont = $(this).parents(".main-wraper");
		var $hotelBg = $hotelCont.find('.hotel-clip .bg');
		var bgImg = $hotelBg.css('background-image');
		if(bgImg.match("hotel_bg.jpg")) {

			$hotelBg.fadeTo(800, 0, function()
			{
			    $(this).css({'background-image': bgImg.replace('hotel_bg.jpg','hotel_bg2.jpg')});
			}).fadeTo(800, 1);
			//$hotelBg.stop().css('background-image', bgImg.replace('hotel_bg.jpg','hotel_bg2.jpg'));

			$hotelCont.find('.hotel-choose:not(.hotel-hidden)').hide(0);
			$hotelCont.find('.hotel-choose.hotel-hidden').show(0, function() {resizeCall();});
		} else{

			$hotelBg.fadeTo(800, 0, function()
			{
			    $(this).css({'background-image': bgImg.replace('hotel_bg2.jpg','hotel_bg.jpg')});
			}).fadeTo(800, 1);
			//$hotelBg.stop().css('background-image', bgImg.replace('hotel_bg2.jpg','hotel_bg.jpg'));
			$hotelCont.find('.hotel-choose.hotel-hidden').hide(0);
			$hotelCont.find('.hotel-choose:not(.hotel-hidden)').show(0, function() {resizeCall();});

		}
	});

	//change slider
	$('.change-slider').on( "click", function() {
		var img = $(this).attr("href");
		$(this).parents('.section').find('.bg-bg-chrome').fadeTo('slow', 0.3, function()
		{
		    $(this).css({'background-image':'url('+img+')'});
		}).fadeTo('slow', 1);
		$(this).parents('.section').find('.change-slider.active').removeClass('active');
		$(this).addClass('active');
		return false;
	});

	//left slider change
	$(document).on('click', '.slide-preview a', function(){
		var img = $(this).attr("href");
		$(this).parents('.slider-block-right').siblings('.slider-block-left').fadeTo('slow', 0.3, function()
		{
		    $(this).css({'background-image':'url('+img+')'});
		}).fadeTo('slow', 1);
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		return false;
	});

	//tab-tour-block
	var tourFinish = 0;
	$('.tab-tour-header .tab-tour').on( "click", function() {
		var $t = $(this);
		if(tourFinish || $t.hasClass('active')) return false;

		tourFinish = 1;
		var index = $t.index();
		var $c_content = $t.parents('.tab-tour-header').siblings('.tab-tour-content');

		$t.siblings('.active').removeClass('active');
		$t.addClass('active');

		$c_content.find('.hotel-wrpp.active').fadeOut(800, function(){
			$(this).removeClass('active');
	        $c_content.find('.hotel-wrpp').eq(index).fadeIn(800, function() {$(this).addClass('active');tourFinish = 0;resizeCall();});
	    });
	});
	$('.tab-select .drop span a').on( "click", function() {
		var $t = $(this);
		var index = $t.index();
		var $c_content = $t.parents('.tab-select').siblings('.tab-tour-content');
		$c_content.find('.hotel-wrpp.active').fadeOut(800, function(){
			$(this).removeClass('active');
	        $c_content.find('.hotel-wrpp').eq(index).fadeIn(800, function() {$(this).addClass('active');tourFinish = 0;resizeCall();});
	    });
	});

    //list-grid change
    $('.change-list').on( "click", function() {
    	if ($(this).hasClass('active')) return false;
    	$(this).siblings('.active').removeClass('active');
    	$(this).addClass('active').parents('.list-header').siblings('.grid-content').removeClass('grid-content').addClass('list-content');
    });
    $('.change-grid').on( "click", function() {
    	if ($(this).hasClass('active')) return false;
    	$(this).siblings('.active').removeClass('active');
    	$(this).addClass('active').parents('.list-header').siblings('.list-content').removeClass('list-content').addClass('grid-content');
    });

	/*==============================*/
	/* 06 - FULL PAGE */
	/*==============================*/
	function initFullPage(){
		if($('.fullpage').length){
			if (winW<992) return false;
			$('body').css("overflow-y", "hidden");
			$('.fullpage').css("height", winH+"px");
			$('html, body').scrollTop(0);
		}
	}
	function updateFullPage(){
		if(!$('.fullpage').length) return false;
		if (winW>=992){
			var $wrapper = $('.fullpage-wrapper');
			var $pageActive = $('.fullpage .section.active');
			var index = $pageActive.index();
			var footer_hieght = $('.footer').outerHeight();
			if ($pageActive.hasClass('footer')){
				$wrapper.css('top', '-' +(winH*(index-1)+footer_hieght)+'px');
			} else {
				$wrapper.css('top', '-' +winH*(index)+'px');
			}

			$('html, body').scrollTop(0);
			//alert(count+'/'+index+'/'+winH);
		} else{
			$('body').css("overflow-y", "auto");
		}

	}

	if ($('.fullpage').length){
	var fullpage = 1;
	$('.fullpage').mousewheel(function(event) {
		if (fullpage === 0) return false;
		if(winW<=991) return false;
		fullpage = 0;

		var $wrapper = $('.fullpage-wrapper');
		var $pageActive = $('.fullpage .section.active');
		var index = $pageActive.index();
		var footer_hieght = $('.footer').outerHeight();

		if(event.deltaY==-1){
			if(!$pageActive.hasClass('footer')){
				if ($pageActive.next().hasClass('footer')){
					$pageActive.removeClass('active').next().addClass('active');
					var count = (winH*(index))+footer_hieght;
					//$wrapper.css('top', '-' +count+'px');
					$wrapper.animate({top:'-'+count+'px'}, "slow", function(){fullpage=1;});
				} else{
					$pageActive.removeClass('active').next().addClass('active');
					$wrapper.animate({top:'-'+winH*(index+1) +'px'}, "slow", function(){fullpage=1;});
					//$wrapper.css('top', '-'+winH*(index+1) +'px');
				}
			} else{fullpage=1;}
		} else if(event.deltaY==1){
			if(index!==0){
				$pageActive.prev().addClass('active');
				$pageActive.removeClass('active');
				$wrapper.animate({top:'-'+winH*(index-1) +'px'}, "slow", function(){fullpage=1;});
				//$wrapper.css('top', '-'+winH*(index-1) +'px');
			} else{
				fullpage=1;
			}
		}
	});
    }

	$('.serach-item').on('mouseover', function(){
	   $('.serach-item input').addClass('active');
		return false;
	});

	$('.serach-item input').focus(function() {
	   $(this).addClass('active');
		return false;
	});

	$('.serach-item input').blur(function() {
	   $(this).removeClass('active');
		return false;
	});

	/*==============================*/
	/* 06 - MENU */
	/*==============================*/
	$('nav.menu .fa-angle-down, nav.menu .fa-chevron-right').on( "click", function() {
		$(this).parent('a').parent('li').toggleClass('active');
		$(this).parent('a').next('.dropmenu').slideToggle();
		return false;
	});

	$('.nav-menu-icon a').on('click', function() {
	  if ($('nav').hasClass('slide-menu')){
			$('nav').removeClass('slide-menu');
			$(this).removeClass('active');
			$('body').toggleClass('menu_opened');
	  }else {
  			$('nav').addClass('slide-menu');
		  	$(this).addClass('active');
		  	$('body').toggleClass('menu_opened');
	  }
		return false;
	 });

	/***********************************/
	/*STYLE BAR*/
	/**********************************/

	$('.conf-button').on('click', function(){
		if ($('.style-page').hasClass('slide-right')){
		    $('.style-page').removeClass('slide-right');
			$('.conf-button span').removeClass('act');
		}else{
		    $('.style-page').addClass('slide-right');
			$('.conf-button span').addClass('act');
		}return false;
    });

	 $('.entry').on('click', function(){
		  var prevTheme = $('body').attr('data-color');
		  var newTheme = $(this).attr('data-color');
		  if($(this).hasClass('active')) return false;
		  $(this).parent().find('.active').removeClass('active');
		  $(this).addClass('active');
		  $('body').attr('data-color', newTheme);
		  $('img').each(function() {
		   $(this).attr("src", $(this).attr("src").replace(prevTheme+'/', newTheme+'/'));
		  });

	         localStorage.setItem("color", newTheme);
	 });

	var localStorageThemeVar = localStorage.getItem('color');
	$('.entry[data-color="'+localStorageThemeVar+'"]').on('click');


	$('.rounded').on('click', function() {
	   if($('body').hasClass('noborder')) {
	    $('body').removeClass('noborder');
		 $(this).closest('.color-block').find('.check-option').removeClass('active');
	     $(this).parent().addClass('active');
	   }
	});
    $('.norounded').on('click', function() {
	    $('body').addClass('noborder');
		$(this).closest('.color-block').find('.check-option').removeClass('active');
	     $(this).parent().addClass('active');
	});

	$('.boxed').on('click', function() {
	   if($('.container').hasClass('box')) {
	    $('.container').removeClass('box');
		   $(this).closest('.color-block').find('.check-option').removeClass('active');
	       $(this).parent().addClass('active');
		   initSwiper();
	   }
	});
    $('.noboxed').on('click', function() {
	    $('.container').addClass('box');
		$(this).closest('.color-block').find('.check-option').removeClass('active');
	     $(this).parent().addClass('active');
		   initSwiper();
	});


    $('.accordeon-entry h5').on('click', function(){
		$(this).parent().toggleClass('active');
		$(this).next().toggleClass('active');
	});

	$('.alert .fa').on('click', function(){
	   $(this).parent().addClass('act');
	});

	/***********************************/
	/*POPUP*/
	/**********************************/

	if ($('.popup-gallery').length) {
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			removalDelay: 300,
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-fade',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1]
			},
			zoom: {
				enabled: true,
				duration: 300,
				easing: 'ease-in-out',
				opener: function(openerElement) {
				  return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			}
		});
	}

	/***********************************/
	/*TP ENTRY*/
	/**********************************/
	function tpEntryHover() {
		$('.top-preview .tp_entry').on('click', function() {
			if ($(window).width() <= 1024)  {
				$('.tp_entry').removeClass('tp_entry-active');
				$(this).addClass('tp_entry-active');
			} else {
				$('.tp_entry').removeClass('tp_entry-active');
			}
		});
	};

});





