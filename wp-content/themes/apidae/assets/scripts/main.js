/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
		
		function initNavbarToggle(){
			$('.navbar-toggle').unbind('click');
			$('.navbar-toggle').click(function(){
				//var window_height = $(window).height();
				//var header_height = $('.navbar-header').height();
				
				//console.log('window_height: '+window_height);
				//console.log('header_height: '+header_height);
											   
				if($(this).hasClass('collapsed')){
					$(this).removeClass('collapsed');
					//$('.menu_bg').fadeIn();
					//$('body').removeClass('fixed');
					//$('.main-menu-mobile').removeClass('show');
					//$('.mobile-menu-wrapper').css('height', 'auto');
				}else{
					$(this).addClass('collapsed');
					//$('.menu_bg').fadeOut();
					//$('body').addClass('fixed');
					//$('.main-menu-mobile').addClass('show');
					//$('.mobile-menu-wrapper').css('height', 'auto');
					//$('.mobile-menu-wrapper').css('height', window_height-header_height);
				}
			});
		}
		
		$(document).ready(function(){
			initNavbarToggle();
			
			// hide #back-top first
			$(".btn_back-to-top").hide();
			
			// fade in .btn_back-to-top
			$(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 100) {
						$('.btn_back-to-top').fadeIn();
					} else {
						$('.btn_back-to-top').fadeOut();
					}
				});
		
				// scroll body to 0px on click
				$('.btn_back-to-top').click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 800);
					return false;
				});
			});
		});
		
		$(window).resize(function(){
			//$('.nav_toggle').removeClass('collapsed');
			$('.navbar-toggle').removeClass('collapsed');
			$('body').removeClass('fixed');
			$('.main-menu-mobile').removeClass('show');
			$('.mobile-menu-wrapper').css('height', 'auto');
		});
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
		function initSlick(){
			$('.main-banner').slick({
				dots: false,
				autoplay: false,
				autoplaySpeed: 5000,
				slidesToScroll: 1,
				slidesToShow: 1,
				prevArrow: $('.prev'),
				nextArrow: $('.next'),
				
			});  
		}
			
		// JavaScript to be fired on the home page
		$(document).ready(function(){
			initSlick();
		});
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'page_template_template_milestone': {
      init: function() {
        // JavaScript to be fired on the about us page
		
		function initMilestoneAnchor(){
			$('.nav_anchor').click(function(){
				$anchor = $(this).attr("data-anchor");
				$('html, body').animate({
					scrollTop: $("#"+$anchor).offset().top-90
				}, 500);
			});
		}
		
		$(document).ready(function(){
			initMilestoneAnchor();						   
		});
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
