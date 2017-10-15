/*
*=========================================================
	Author       : ThemeBuskets
	Template Name: Boch | A Solution to your Portfolio
	Version      : 1.0
*=========================================================
*/
(function ($) {
	'use strict';
	
	/*++++++++++++++++++++++++
	-----Preloader Effect-----	    
	++++++++++++++++++++++++++*/
	$(window).on('load', function() { 
		$('#status').fadeOut();
		$('#preloader').delay(900).fadeOut('slow');
		$('body').delay(900).css({'overflow':'visible'});
		$( ".filter-list li:nth-child(1)" ).trigger( "click" )//isotope
	});
	/*++++++++++++++++++++++++
	-------Typing Effect------	 		
	++++++++++++++++++++++++++*/
	$(".typed-effect").typed({
		strings: expertise,
		typeSpeed: 50,
		backDelay: 500,
		loop: true
	});
	/*++++++++++++++++++++
	-----One Page Nav-----	    
	++++++++++++++++++++++*/
	$('#nav').onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing'
	});

	/*++++++++++++++++++++++++++++
	-----Testimonial Carousel-----	    
	++++++++++++++++++++++++++++++*/
	var testcarousel = $(".testimonial-carousel");
	testcarousel.owlCarousel({
		autoPlay : false,
		navigation : false,
		slideSpeed : 300,
		paginationSpeed : 400,
		stopOnHover : false,
		singleItem:true ,   
		mouseDrag : false,
		touchDrag : false,
	});
	var testpage = $(".testimonial-pagination li");
	testpage.on( 'click', function() {
		testpage.removeClass("active");
		$(this).addClass("active");
		var JumpSlide = jQuery(this).attr('data-slide');
		testcarousel.trigger('owl.goTo', JumpSlide)
	});
	
	/*++++++++++++++++++++++++++
	-----Blog Post Carousel-----	    
	++++++++++++++++++++++++++++*/
	var blogcarousel = $(".blog-carousel");
	blogcarousel.owlCarousel({
		autoPlay : false,
		navigation : false,
		slideSpeed : 300,
		paginationSpeed : 400,
		stopOnHover : false,
		singleItem:true ,   
	});
	jQuery('.blog-nav.left').on( 'click', function() { 
		blogcarousel.trigger('owl.prev');
	});
	jQuery('.blog-nav.right').on( 'click', function() { 
		blogcarousel.trigger('owl.next');
	});
	
	/*++++++++++++++++++++++++
	-----Portfolio Sorter-----	    
	++++++++++++++++++++++++++*/
	$(".porject-container").isotope({
		itemSelector: '.project-item'
	}); 
	var filterlistli = $(".filter-list li");
	filterlistli.on( 'click', function() { 
		filterlistli.removeClass("active");
		$(this).addClass("active");        

			var selector = $(this).attr('data-filter'); 
			$(".porject-container").isotope({ 
				filter: selector, 
				animationOptions: { 
					duration: 750, 
					easing: 'linear', 
					queue: false, 
				} 
			}); 
			return false; 
	}); 
	
	/*+++++++++++++++++++++++
	-----For Image PopUp-----	    
	+++++++++++++++++++++++++*/
	$('.image-popup-link').magnificPopup({
	  type: 'image',
	  mainClass: 'mfp-with-zoom',
	  zoom: {
		enabled: true,
		duration: 300,
		easing: 'ease-in-out',
		opener: function(openerElement) {
		  return openerElement.is('img') ? openerElement : openerElement.find('img');
		}
	  }
	});
	

	/*++++++++++++++++++++++++
	-----Sticky Menu Code-----	    
	++++++++++++++++++++++++++*/
	jQuery(window).bind('scroll', function() {

		 if (jQuery(window).scrollTop() > 0) {
			 jQuery('.nav-bar-area').addClass('fixed-top');
		 }
		 else {
			 jQuery('.nav-bar-area').removeClass('fixed-top');

		 }
	});
	   
	/*++++++++++++++++++++++++++++++++++++++++++++
	-----Important for hover on mobile device-----	    
	+++++++++++++++++++++++++++++++++++++++++++++*/
	$(document).on("touchstart", function (e) {
		var link = $('.project-item');
		if (link.hasClass('hover')) {
			link.removeClass('hover');
		 } 
	});
	
	/*+++++++++++++++++++++++++++++++
	----Mobile Menu hide on click----
	+++++++++++++++++++++++++++++++++*/
	$('.nav a').on('click', function(){
		if ($('#bs-example-navbar-collapse-1').hasClass('in')) {
			 $('.navbar-toggle').trigger( "click" );
		}
	});
	
	/*+++++++++++++++++++++++
	-----Particle Effect-----	    
	+++++++++++++++++++++++++*/
	document.addEventListener('DOMContentLoaded', function () {
	  /*particleground(document.getElementById('home'), {
		dotColor: 'rgba(46,204,113,.3)',
		density: 8000,
		lineColor: 'rgba(255,255,255,.1)',
		minSpeedX:.5,
		minSpeedY:.5,
		lineWidth: 2.2,
		particleRadius: 9,
		
	  });*/
	}, false);
	
	/*++++++++++++++++
	----Google Map----
	++++++++++++++++++*/
	google.maps.event.addDomListener(window, 'load', init);
	function init() {
		var mapLat = $('#gmap').attr('data-map-latitude');
		var maplng = $('#gmap').attr('data-map-longitude');
		var mapOptions = {
			zoom: 12,
			scrollwheel: false,
			center: new google.maps.LatLng(mapLat, maplng),
			styles:[{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#ff0200"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"},{"saturation":"-3"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#748ca3"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":100},{"visibility":"simplified"},{"hue":"#ff0200"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ff0200"},{"saturation":"23"},{"lightness":"20"},{"visibility":"off"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"color":"#ffdbda"},{"saturation":"0"},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"saturation":"100"},{"lightness":31},{"visibility":"simplified"},{"hue":"#ff0200"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#2ecc71"},{"saturation":"0"},{"weight":"2.03"},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#008eff"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#f89999"},{"saturation":"0"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#008eff"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#ff0200"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#007fff"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]}]
		};
		var mapElement = document.getElementById('gmap');
		var map = new google.maps.Map(mapElement, mapOptions);

		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(40.6700, -73.9400),
			map: map,
			title: 'Snazzy!'
		});
	}
	google.maps.event.trigger($("#gmap")[0], 'resize');
	
})(jQuery);

