/*
 *
 *		CUSTOM.JS
 *
 */

(function($){
	
	"use strict";
	
	// DETECT TOUCH DEVICE //
	function is_touch_device() {
		return !!('ontouchstart' in window) || ( !! ('onmsgesturechange' in window) && !! window.navigator.maxTouchPoints);
	}
	
	
	// SHOW/HIDE MOBILE MENU //
	function show_hide_mobile_menu() {
		
		$("#mobile-menu-button").on("click", function(e) {
            
			e.preventDefault();
			
			$("#mobile-menu").slideToggle(300);
			
        });	
		
	}
	
	
	// MOBILE MENU //
	function mobile_menu() {
		
		if ($(window).width() < 992) {
			
			if ($("#menu").length > 0) {
			
				if ($("#mobile-menu").length < 1) {
					
					$("#menu").clone().attr({
						id: "mobile-menu",
						class: ""
					}).insertAfter("#header");
					
					$("#mobile-menu .megamenu > a").on("click", function(e) {
                        
						e.preventDefault();
						
						$(this).toggleClass("open").next("div").slideToggle(300);
						
                    });
					
					$("#mobile-menu .dropdown > a").on("click", function(e) {
                        
						e.preventDefault();
						
						$(this).toggleClass("open").next("ul").slideToggle(300);
						
                    });
					
					$("#mobile-menu .cart > a").on("click", function(e) {
                        
						e.preventDefault();
						
						$(this).toggleClass("open").next("div").slideToggle(300);
						
                    });
				
				}
				
			}
				
		} else {
			
			$("#mobile-menu").hide();
			
		}
		
	}
	
	
	// STICKY //
	function sticky() {
		
		var sticky_point = 121;
		
		$("#header").clone().attr({
			id: "header-sticky",
			class: ""
		}).insertAfter("header");
		
		$(window).scroll(function(){
			
			if ($(window).scrollTop() > sticky_point) {  
				$("#header-sticky").slideDown(300).addClass("header-sticky");
				$("#header .menu ul, #header .menu .megamenu-container").css({"visibility": "hidden"});
			} else {
				$("#header-sticky").slideUp(100).removeClass("header-sticky");
				$("#header .menu ul, #header .menu .megamenu-container").css({"visibility": "visible"});
			}
			
		});
		
	}
	
	
	// HEADER SEARCH //
	function header_search() {	
		
		$(".search a").on("click", function(e) { 
	
			e.preventDefault();
			
			if(!$(".search a").hasClass("open")) {
			
				$("#search-form-container").addClass("open-search-form");
				
			} else {
				
				$("#search-form-container").removeClass("open-search-form");
			
			}
			
			$(window).resize(function(){
				$("#search-form-container").removeClass("open-search-form");
			})
			
		});
		
		$("#search-form").after('<a class="search-form-close" href="#">x</a>');
		
		$("#search-form-container a.search-form-close").on("click", function(event){
			
			event.preventDefault();
			$("#search-form-container").removeClass("open-search-form");
			
		});
		
	 }
	
 
	// PROGRESS BARS // 
	function progress_bars() {
		
		$(".progress .progress-bar:in-viewport").each(function() {
			
			if (!$(this).hasClass("animated")) {
				$(this).addClass("animated");
				$(this).animate({
					width: $(this).attr("data-width") + "%"
				}, 2000);
			}
			
		});
		
	}


	// CHARTS //
	function pie_chart() {
		
		if (typeof $.fn.easyPieChart !== 'undefined') {
		
			$(".pie-chart:in-viewport").each(function() {
				
				$(this).easyPieChart({
					animate: 1500,
					lineCap: "square",
					lineWidth: $(this).attr("data-line-width"),
					size: $(this).attr("data-size"),
					barColor: $(this).attr("data-bar-color"),
					trackColor: $(this).attr("data-track-color"),
					scaleColor: "transparent",
					onStep: function(from, to, percent) {
						$(this.el).find(".pie-chart-percent .value").text(Math.round(percent));
					}
				});
				
			});
			
		}
		
	}
	
	// COUNTER //
	function counter() {
		
		if (typeof $.fn.jQuerySimpleCounter !== 'undefined') {
		
			$(".counter .counter-value:in-viewport").each(function() {
				
				if (!$(this).hasClass("animated")) {
					$(this).addClass("animated");
					$(this).jQuerySimpleCounter({
						start: 0,
						end: $(this).attr("data-value"),
						duration: 2000
					});	
				}
			
			});
			
		}
	}
	
	
	// LOAD MORE PROJECTS //
	function load_more_projects() {
	
		var number_clicks = 0;
		
		$(".load-more").on("click", function(e) {
			
			e.preventDefault();
			
			if (number_clicks == 0) {
				$.ajax({
					type: "POST",
					url: $(".load-more").attr("href"),
					dataType: "html",
					cache: false,
					msg : '',
					success: function(msg) {
						$(".isotope").append(msg);	
						$(".isotope").imagesLoaded(function() {
							$(".isotope").isotope("reloadItems").isotope();
							$(".fancybox").fancybox({
								prevEffect: 'none',
								nextEffect: 'none'
							});
						});
						number_clicks++;
						$(".load-more").html("Nothing to load");
					}
				});
			}
			
		});
		
	}
	
	
	// SHOW/HIDE SCROLL UP //
	function show_hide_scroll_top() {
		
		if ($(window).scrollTop() > $(window).height()/2) {
			$("#scroll-up").fadeIn(300);
		} else {
			$("#scroll-up").fadeOut(300);
		}
		
	}
	
	
	// SCROLL UP //
	function scroll_up() {				
		
		$("#scroll-up").on("click", function() {
			$("html, body").animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
	}
	
	
	// INSTAGRAM FEED //
	function instagram_feed() {

		if ($('#instafeed').length > 0 ) {
		
			var nr = $('#instafeed').data('number');
			var userid = $('#instafeed').data('user');
			var accesstoken = $('#instafeed').data('accesstoken');
			
			var feed = new Instafeed({
				target: 'instafeed',
				get: 'user',
				userId: userid,
				accessToken: accesstoken,
				limit: nr,
				resolution: 'thumbnail',
				sortBy: "most-recent"
			});
			
			feed.run();		
		
		}
			
	}
	
	
	// EQUAL HEIGHT //
	function equal_height() {
		
		if ($(window).width() > 767) {
		
			$(".blog-article.style-2").each(function() {
				$(".blog-article.style-2 .blog-article-details").height($(".blog-article.style-2 .blog-article-thumbnail").height());
			});
			
		} else {
			
			$(".blog-article.style-2").each(function() {
				$(".blog-article.style-2 .blog-article-details").height("auto");
			});
			
		}
		
	}
	
	
	// PRICE SELECTOR //
	function price_selector() {
		
		if ($("#slider").length > 0) {
		
			var slider = document.getElementById('slider');

			noUiSlider.create(slider, {
				start: [10, 80],
				connect: true,
				range: {
					'min': 0,
					'max': 100
				},
				step: 1
			});
			
			var slider_value = [
				document.getElementById('lower-value'),
				document.getElementById('upper-value')
			];

			slider.noUiSlider.on('update', function( values, handle ) {
				slider_value[handle].innerHTML = values[handle];
			});
			
		}
		
	}
	
	
	// FULL SCREEN //
	function full_screen() {
		
		if ($(window).width() > 767) {
			$(".full-screen").css("height", $(window).height() + "px");
		}
		
	}
	
	
	// ANIMATIONS //
	function animations() {
		
		animations = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 100,
			mobile: false,
			live: true
		});
		
		animations.init();
		
	}
	
	
	// DOCUMENT READY //
	$(document).ready(function(){
		
		// STICKY //
		sticky();
		
		
		// MENU //
		if (typeof $.fn.superfish !== 'undefined') {
			
			$(".menu").superfish({
				delay: 500,
				animation: {
					opacity: 'show',
					height: 'show'
				},
				speed: 'fast',
				autoArrows: true
			});
			
		}
		
		
		// SHOW/HIDE MOBILE MENU //
		show_hide_mobile_menu();
		
		
		// MOBILE MENU //
		mobile_menu();
		
		
		// HEADER SEARCH //
		header_search();
		
		
		// FANCYBOX //
		if (typeof $.fn.fancybox !== 'undefined') {
		
			$(".fancybox").fancybox({
				prevEffect: 'none',
				nextEffect: 'none'
			});
		
		}
		
		// REVOLUTION SLIDER //
		if (typeof $.fn.revolution !== 'undefined') {
			
			$(".rev_slider").revolution({
				sliderType: "standard",
				sliderLayout: "auto",
				delay: 9000,
				navigation: {
					arrows:{
						style: "default",
						enable: true,
						hide_onmobile: true,
						hide_onleave: false,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						hide_under: 0,
						hide_over: 9999,
						tmp: '',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: 20,
							v_offset: 0,
						 },
						 right: {
							h_align: "right",
							v_align: "center",
							h_offset: 20,
							v_offset: 0
						 }
					},
					bullets:{
						style: "default",
						enable: true,
						hide_onmobile: false,
						hide_onleave: false,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						hide_under: 0,
						hide_over: 9999,
						tmp: '', 
						direction: "horizontal",
						space: 15,       
						h_align: "center",
						v_align: "bottom",
						h_offset: 0,
						v_offset: 40
					},
					touch:{
						touchenabled: "on",
						swipe_treshold: 75,
						swipe_min_touches: 1,
						drag_block_vertical: false,
						swipe_direction: "horizontal"
					}
				},			
				gridwidth: 1170,
				gridheight: 620		
			});
			
			$(".rev_slider_fullscreen").revolution({
				sliderType: "standard",
				sliderLayout: "fullscreen",
				delay: 900000,
				navigation: {
					arrows:{
						style: "default",
						enable: true,
						hide_onmobile: true,
						hide_onleave: false,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						hide_under: 0,
						hide_over: 9999,
						tmp: '',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: 20,
							v_offset: 0,
						 },
						 right: {
							h_align: "right",
							v_align: "center",
							h_offset: 20,
							v_offset: 0
						 }
					},
					bullets:{
						style: "default",
						enable: true,
						hide_onmobile: false,
						hide_onleave: false,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						hide_under: 0,
						hide_over: 9999,
						tmp: '', 
						direction: "horizontal",
						space: 15,       
						h_align: "center",
						v_align: "bottom",
						h_offset: 0,
						v_offset: 40
					},
					touch:{
						touchenabled: "on",
						swipe_treshold: 75,
						swipe_min_touches: 1,
						drag_block_vertical: false,
						swipe_direction: "horizontal"
					}
				},			
				gridwidth: 1170,
				gridheight: 620		
			});
			
		}
	
	
		// OWL Carousel //
		if (typeof $.fn.owlCarousel !== 'undefined') {
			
			// PRODUCT SLIDER //
			var product_slider = $(".owl-carousel.product-slider").owlCarousel({
				singleItem: true,
				slideSpeed: 500,
				autoPlay: true,
				stopOnHover: true,
				navigation: false,
				navigationText: false,
				pagination: false,
				paginationNumbers: false,
				mouseDrag: true,
				touchDrag: true,
				transitionStyle: false
			});
			
			$(".next").on("click", function(){
				product_slider.trigger('owl.next');
			});
			
			$(".prev").on("click", function(){
				product_slider.trigger('owl.prev');
			});
			
			
			// BLOG ARTICLES SLIDER //
			var blog_articles_slider = $(".owl-carousel.blog-articles-slider").owlCarousel({
				singleItem: true,
				slideSpeed: 500,
				autoPlay: true,
				stopOnHover: true,
				navigation: false,
				navigationText: false,
				pagination: false,
				paginationNumbers: false,
				mouseDrag: true,
				touchDrag: true,
				transitionStyle: false
			});
			
			$(".next").on("click", function(){
				blog_articles_slider.trigger('owl.next');
			});
			
			$(".prev").on("click", function(){
				blog_articles_slider.trigger('owl.prev');
			});
			
			
			// IMAGES SLIDER //
			var images_slider = $(".owl-carousel.images-slider").owlCarousel({
				singleItem: true,
				slideSpeed: 500,
				autoPlay: true,
				stopOnHover: true,
				navigation: false,
				navigationText: false,
				pagination: false,
				paginationNumbers: false,
				mouseDrag: true,
				touchDrag: true,
				transitionStyle: false
			});
			
			$(".next").on("click", function(){
				images_slider.trigger('owl.next');
			});
			
			$(".prev").on("click", function(){
				images_slider.trigger('owl.prev');
			});
			
			
			// TESTIMONIALS SLIDER //
			var testimonials_slider = $(".owl-carousel.testimonials-slider").owlCarousel({
				singleItem: true,
				slideSpeed: 500,
				autoPlay: true,
				stopOnHover: true,
				navigation: false,
				navigationText: false,
				pagination: false,
				paginationNumbers: false,
				mouseDrag: true,
				touchDrag: true,
				transitionStyle: "fade"
			});
			
			$(".next").on("click", function(){
				testimonials_slider.trigger('owl.next');
			});
			
			$(".prev").on("click", function(){
				testimonials_slider.trigger('owl.prev');
			});
			
			
			// SERVICES SLIDER //
			var services_slider = $(".owl-carousel.services-slider").owlCarousel({
				singleItem: true,
				slideSpeed: 500,
				autoPlay: true,
				stopOnHover: true,
				navigation: false,
				navigationText: false,
				pagination: false,
				paginationNumbers: false,
				mouseDrag: true,
				touchDrag: true,
				transitionStyle: false
			});
			
			$(".next").on("click", function(){
				services_slider.trigger('owl.next');
			});
			
			$(".prev").on("click", function(){
				services_slider.trigger('owl.prev');
			});
			
			
			// TESTIMONIALS SLIDER 2 //
			$(".owl-carousel.testimonials-slider-2").owlCarousel({
				singleItem: true,
				slideSpeed: 200,
				autoPlay: true,
				stopOnHover: true,
				navigation: false,
				navigationText: false,
				pagination: true,
				paginationNumbers: false,
				mouseDrag: true,
				touchDrag: true,
				transitionStyle: "fade"
			});
			
			
			// LOGOS SLIDER //
			$(".owl-carousel.logos-slider").owlCarousel({
				items: 5,
				itemsDesktop: [1199,5],
				itemsDesktopSmall: [991,4],
				itemsTablet: [767,2],
				itemsMobile: [479,1],
				slideSpeed: 500,
				autoPlay: true,
				stopOnHover: true,
				navigation: true,
				navigationText: false,
				pagination: false,
				paginationNumbers: false,
				mouseDrag: true,
				touchDrag: true,
				transitionStyle: false
			});
			
		}
		
		
		// GOOGLE MAPS //
		if (typeof $.fn.gmap3 !== 'undefined') {
		
			$(".map").each(function(){
				
				var data_zoom = 15;
				
				if ($(this).attr("data-zoom") !== undefined) {
					data_zoom = parseInt($(this).attr("data-zoom"),10);
				}	
				
				$(this).gmap3({
					marker: {
						values: [{
							address: $(this).attr("data-address"),
							data: $(this).attr("data-address-details")
						}],
						options:{
							draggable: false
						},
						events:{
							mouseover: function(marker, event, context){
								var map = $(this).gmap3("get"),
								infowindow = $(this).gmap3({get:{name:"infowindow"}});
								if (infowindow){
									infowindow.open(map, marker);
									infowindow.setContent(context.data);
								} else {
									$(this).gmap3({
										infowindow:{
											anchor:marker, 
											options:{content: context.data}
										}
									});
								}
							},
							mouseout: function(){
								var infowindow = $(this).gmap3({get:{name:"infowindow"}});
								if (infowindow){
									infowindow.close();
								}
							}
						}
					},
					map: {
						options: {
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							zoom: data_zoom,
							scrollwheel: false
						}
					}
				});
				
			});
			
		}
		
		
		// ISOTOPE //
		if ((typeof $.fn.imagesLoaded !== 'undefined') && (typeof $.fn.isotope !== 'undefined')) {
		
			$(".isotope").imagesLoaded( function() {
				
				var container = $(".isotope");
				
				container.isotope({
					itemSelector: '.isotope-item',
					layoutMode: 'masonry',
					transitionDuration: '0.8s'
				});
				
				$(".filter li a").on("click", function() {
					$(".filter li a").removeClass("active");
					$(this).addClass("active");
		
					var selector = $(this).attr("data-filter");
					container.isotope({
						filter: selector
					});
		
					return false;
				});
		
				$(window).resize(function() {
					container.isotope();
				});
				
			});
			
		}
		
		
		// LOAD MORE PORTFOLIO ITEMS //
		load_more_projects();
		
		
		// PLACEHOLDER //
		if (typeof $.fn.placeholder !== 'undefined') {
			
			$("input, textarea").placeholder();
			
		}
		
		
		// CONTACT FORM VALIDATE & SUBMIT //
		// VALIDATE //
		if (typeof $.fn.validate !== 'undefined') {
		
			$("#contact-form").validate({
				rules: {
					name: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
					subject: {
						required: true
					},
					message: {
						required: true,
						minlength: 10
					}
				},
				messages: {
					name: {
						required: "Please enter your name!"
					},
					email: {
						required: "Please enter your email!",
						email: "Please enter a valid email address"
					},
					subject: {
						required: "Please enter the subject!"
					},
					message: {
						required: "Please enter your message!"
					}
				},
					
				// SUBMIT //
				submitHandler: function(form) {
					var result;
					$(form).ajaxSubmit({
						type: "POST",
						data: $(form).serialize(),
						url: "assets/php/send.php",
						success: function(msg) {
							
							if (msg == 'OK') {
								result = '<div class="alert alert-success">Your message was successfully sent!</div>';
								$("#contact-form").clearForm();
							} else {
								result = msg;
							}
							
							$("#alert-area").html(result);
		
						},
						error: function() {
		
							result = '<div class="alert alert-danger">There was an error sending the message!</div>';
							$("#alert-area").html(result);
		
						}
					});
				}
			});
			
		}
		
		
		// PARALLX //
		if (typeof $.fn.stellar !== 'undefined') {
		
			if (!is_touch_device()) {
				
				$(window).stellar({
					horizontalScrolling: false,
					verticalScrolling: true,
					responsive: true
				});
				
			}
		
		}
		
		
		// SHOW/HIDE SCROLL UP
		show_hide_scroll_top();
		
		
		// SCROLL UP //
		scroll_up();
		
		
		// YOUTUBE PLAYER //
		if (typeof $.fn.mb_YTPlayer !== 'undefined') {
			
			$(".youtube-player").mb_YTPlayer();
		
		}
		
		
		// EQUAL HEIGHT //
		equal_height();
		
		
		// INSTAGRAM FEED //
		instagram_feed();
		
		
		// PRICE SELECTOR //
		price_selector();
		
		
		// FULL SCREEN //
		full_screen();
		
		
		// ANIMATIONS //
		animations();
		
		
		// COUNTDOWN //
		if (typeof $.fn.countdown !== 'undefined') {
			
			$(".countdown").countdown('2016/05/01 07:00', function(event) {
				$(this).html(event.strftime(
					'<div>%-D <span>Days</span></div>' + 
					'<div>%-H <span>Hours</span></div>' + 
					'<div>%-M <span>Minutes</span></div>' + 
					'<div>%S <span>Seconds</span></div>'
				));
			});
		
		}
		
	});

	
	// WINDOW SCROLL //
	$(window).scroll(function() {
		
		progress_bars();
		pie_chart();
		counter();
		show_hide_scroll_top();
		
	});
	
	
	// WINDOW RESIZE //
	$(window).resize(function() {

		mobile_menu();
		equal_height();
		full_screen();
		
	});
	
})(window.jQuery);