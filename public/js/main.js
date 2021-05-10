/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/***/ (() => {

/*
* Template Name: Leven - Resume / CV / vCard Template
* Author: lmpixels
* Author URL: http://themeforest.net/user/lmpixels
* Version: 1.4.0
*/
(function ($) {
  "use strict";

  var body = $('body');

  function imageCarousel() {
    $('.portfolio-page-carousel').each(function () {
      $(this).imagesLoaded(function () {
        $('.portfolio-page-carousel').owlCarousel({
          smartSpeed: 1200,
          items: 1,
          loop: true,
          dots: true,
          nav: true,
          navText: false,
          autoHeight: true,
          margin: 10
        });
      });
    });
  } // Ajax Pages loader


  function ajaxLoader() {
    // Check for hash value in URL
    var ajaxLoadedContent = $('#page-ajax-loaded');

    function showContent() {
      ajaxLoadedContent.removeClass('fadeOutLeft closed');
      ajaxLoadedContent.show();
      $('body').addClass('ajax-page-visible');
    }

    function hideContent() {
      $('#page-ajax-loaded').addClass('fadeOutLeft closed');
      $('body').removeClass('ajax-page-visible');
      setTimeout(function () {
        $('#page-ajax-loaded.closed').html('');
        ajaxLoadedContent.hide();
      }, 500);
    }

    var href = $('.ajax-page-load').each(function () {
      href = $(this).attr('href');

      if (location.hash == location.hash.split('/')[0] + '/' + href.substr(0, href.length - 5)) {
        var toLoad = $(this).attr('href');
        showContent();
        ajaxLoadedContent.load(toLoad);
        return false;
      }
    });
    $(document).on("click", "#ajax-page-close-button", function (e) {
      // Hide Ajax Loaded Page on Navigation cleck and Close button
      e.preventDefault();
      hideContent();
      location.hash = location.hash.split('/')[0];
    }).on("click", ".ajax-page-load", function () {
      // Show Ajax Loaded Page
      var hash = location.hash.split('/')[0] + '/' + $(this).attr('href').substr(0, $(this).attr('href').length - 5);
      location.hash = hash;
      showContent();
      return false;
    });
  } // /Ajax Pages loader
  // Contact form validator


  $(function () {
    $('#contact_form').validator();
    $('#contact_form').on('submit', function (e) {
      if (!e.isDefaultPrevented()) {
        var url = "contact_form/contact_form.blade.php";
        $.ajax({
          type: "POST",
          url: url,
          data: $(this).serialize(),
          success: function success(data) {
            var messageAlert = 'alert-' + data.type;
            var messageText = data.message;
            var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

            if (messageAlert && messageText) {
              $('#contact_form').find('.messages').html(alertBox);
              $('#contact_form')[0].reset();
            }
          }
        });
        return false;
      }
    });
  }); // /Contact form validator
  // Portfolio subpage filters

  function portfolio_init() {
    $('.portfolio-content').each(function () {
      var portfolio_grid_container = $(this),
          portfolio_grid_container_id = $(this).attr('id'),
          portfolio_grid = $('#' + portfolio_grid_container_id + ' .portfolio-grid'),
          portfolio_filter = $('#' + portfolio_grid_container_id + ' .portfolio-filters'),
          portfolio_filter_item = $('#' + portfolio_grid_container_id + ' .portfolio-filters .filter');

      if (portfolio_grid) {
        portfolio_grid.shuffle({
          speed: 450,
          itemSelector: 'figure'
        });
        $('.site-auto-menu').on("click", "a", function (e) {
          portfolio_grid.shuffle('update');
        });
        portfolio_filter.on("click", ".filter", function (e) {
          portfolio_grid.shuffle('update');
          e.preventDefault();
          portfolio_filter_item.parent().removeClass('active');
          $(this).parent().addClass('active');
          portfolio_grid.shuffle('shuffle', $(this).attr('data-group'));
        });
      }
    });
  } // /Portfolio subpage filters
  // Animate layout


  function animateLayout() {
    var windowWidth = $(window).width(),
        animatedContainer = '',
        animateType = $('#page_container').attr('data-animation');

    if (windowWidth > 991) {
      animatedContainer = $(".page-container");
    } else {
      animatedContainer = $(".site-main");
    }

    animatedContainer.addClass("animated " + animateType);
    $('.page-scroll').addClass('add-prespective');
    animatedContainer.addClass('transform3d');
    setTimeout(function () {
      $('.page-scroll').removeClass('add-prespective');
      animatedContainer.removeClass('transform3d');
    }, 1000);
  } // /Animate layout


  function scrollTop() {
    if ($(body).scrollTop() > 150) {
      $('.lmpixels-scroll-to-top').removeClass('hidden-btn');
    } else {
      $('.lmpixels-scroll-to-top').addClass('hidden-btn');
    }
  }

  function skillsStyles() {
    var custom_styles = "";
    $('.skill-container').each(function () {
      var value = $(this).attr('data-value');

      if (value >= 101) {
        value = '100';
      }

      if (typeof value != 'undefined') {
        var id = $(this).attr('id'),
            $custom_style = '#' + id + ' .skill-percentage { width: ' + value + '%; } ';
        custom_styles += $custom_style;
      }
    });
    $('head').append('<style data-styles="leven-theme-skills-css" type="text/css">' + custom_styles + '</style>');
  } //On Window load & Resize


  $(window).on('load', function () {
    //Load
    // Animation on Page Loading
    $(".preloader").fadeOut(800, "linear");
    animateLayout();
  }).on('hashchange', function (event) {
    if (location.hash) {
      ajaxLoader();
    }
  }); // On Document Load

  $(document).ready(function () {
    var movementStrength = 15;
    var height = movementStrength / $(document).height();
    var width = movementStrength / $(document).width();
    $("body").on('mousemove', function (e) {
      var pageX = e.pageX - $(document).width() / 2,
          pageY = e.pageY - $(document).height() / 2,
          newvalueX = width * pageX * -1,
          newvalueY = height * pageY * -1;

      if ($('.page-container').hasClass('bg-move-effect')) {
        var elements = $('.home-photo .hp-inner:not(.without-move), .lm-animated-bg');
      } else {
        var elements = $('.home-photo .hp-inner:not(.without-move)');
      }

      elements.addClass('transition');
      elements.css({
        "background-position": "calc( 50% + " + newvalueX + "px ) calc( 50% + " + newvalueY + "px )"
      });
      setTimeout(function () {
        elements.removeClass('transition');
      }, 300);
    }).scroll(function () {
      scrollTop();
    }); // Initialize Portfolio grid

    var $portfolio_container = $(".portfolio-grid"),
        $gallery_container = $("#portfolio-gallery-grid");
    $gallery_container.imagesLoaded(function () {
      $gallery_container.masonry();
    });
    $portfolio_container.imagesLoaded(function () {
      portfolio_init(this);
    });
    imageCarousel(); // Blog grid init

    var $container = $(".blog-masonry");
    $container.imagesLoaded(function () {
      $container.masonry({
        itemSelector: '.item',
        resize: false
      });
    }); // Mobile menu

    $('.menu-toggle').on("click", function () {
      $('.site-nav').addClass('animate');
      $('.site-nav').toggleClass('mobile-menu-hide');
    }); // Text rotation

    $('.text-rotation').owlCarousel({
      loop: true,
      dots: false,
      nav: false,
      margin: 10,
      items: 1,
      autoplay: true,
      autoplayHoverPause: false,
      autoplayTimeout: 3800,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn'
    }); // Testimonials Slider

    $(".testimonials.owl-carousel").owlCarousel({
      nav: false,
      // Show next/prev buttons.
      items: 3,
      // The number of items you want to see on the screen.
      loop: false,
      // Infinity loop. Duplicate last and first items to get loop illusion.
      navText: false,
      margin: 25,
      responsive: {
        // breakpoint from 0 up
        0: {
          items: 1
        },
        // breakpoint from 480 up
        480: {
          items: 1
        },
        // breakpoint from 768 up
        768: {
          items: 2
        },
        1200: {
          items: 2
        }
      }
    }); // Clients Slider

    $(".clients.owl-carousel").imagesLoaded().owlCarousel({
      nav: false,
      // Show next/prev buttons.
      items: 2,
      // The number of items you want to see on the screen.
      loop: false,
      // Infinity loop. Duplicate last and first items to get loop illusion.
      navText: false,
      margin: 10,
      autoHeight: false,
      responsive: {
        // breakpoint from 0 up
        0: {
          items: 2
        },
        // breakpoint from 768 up
        768: {
          items: 4
        },
        1200: {
          items: 6
        }
      }
    }); // Lightbox init

    body.magnificPopup({
      fixedContentPos: false,
      delegate: 'a.lightbox',
      type: 'image',
      removalDelay: 300,
      // Class that is added to popup wrapper and background
      // make it unique to apply your CSS animations just to this exact popup
      mainClass: 'mfp-fade',
      image: {
        // options for image content type
        titleSrc: 'title',
        gallery: {
          enabled: true
        }
      },
      iframe: {
        markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' + '<div class="mfp-title mfp-bottom-iframe-title"></div>' + '</div>',
        // HTML markup of popup, `mfp-close` will be replaced by the close button
        patterns: {
          youtube: {
            index: 'youtube.com/',
            // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
            id: null,
            // String that splits URL in a two parts, second part should be %id%
            // Or null - full URL will be returned
            // Or a function that should return %id%, for example:
            // id: function(url) { return 'parsed id'; }
            src: '%id%?autoplay=1' // URL that will be set as a source for iframe.

          },
          vimeo: {
            index: 'vimeo.com/',
            id: '/',
            src: '//player.vimeo.com/video/%id%?autoplay=1'
          },
          gmaps: {
            index: '//maps.google.',
            src: '%id%&output=embed'
          }
        },
        srcAction: 'iframe_src' // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".

      },
      callbacks: {
        markupParse: function markupParse(template, values, item) {
          values.title = item.el.attr('title');
        }
      }
    });
    $('.ajax-page-load-link').magnificPopup({
      type: 'ajax',
      removalDelay: 300,
      mainClass: 'mfp-fade',
      gallery: {
        enabled: true
      }
    });
    $('.portfolio-page-wrapper .portfolio-grid').each(function () {
      $(this).magnificPopup({
        delegate: 'a.gallery-lightbox',
        type: 'image',
        gallery: {
          enabled: true
        }
      });
    });
    $('.form-control').val('');
    $(".form-control").on("focusin", function () {
      $(this).parent('.form-group').addClass('form-group-focus');
    });
    $(".form-control").on("focusout", function () {
      if ($(this).val().length === 0) {
        $(this).parent('.form-group').removeClass('form-group-focus');
      }
    });
    $('body').append('<div id="page-ajax-loaded" class="page-portfolio-loaded animated fadeInLeft" style="display: none"><div class="preloader-portfolio"><div class="preloader-animation"><div class="preloader-spinner"></div></div></div></div>');
    ajaxLoader(); // Sidebar toggle

    $('.sidebar-toggle').on("click", function () {
      $('#blog-sidebar').toggleClass('open');
      $(this).toggleClass('open');
    });
    $('.lmpixels-scroll-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    }); //Google Maps

    $("#map").googleMap({
      zoom: 16 // Google Map ZOOM. You can change this value

    });
    $("#map").addMarker({
      address: "S601 Townsend Street, San Francisco, California, USA" // Your Address. Change it

    });
    scrollTop();
    skillsStyles();
  });
})(jQuery);

/***/ }),

/***/ "./resources/sass/dc-custom.sass":
/*!***************************************!*\
  !*** ./resources/sass/dc-custom.sass ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/main.css":
/*!********************************!*\
  !*** ./resources/css/main.css ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/******/ 	// the startup function
/******/ 	// It's empty as some runtime module handles the default behavior
/******/ 	__webpack_require__.x = x => {}
/************************************************************************/
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => Object.prototype.hasOwnProperty.call(obj, prop)
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// Promise = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main": 0
/******/ 		};
/******/ 		
/******/ 		var deferredModules = [
/******/ 			["./resources/js/main.js"],
/******/ 			["./resources/sass/dc-custom.sass"],
/******/ 			["./resources/css/main.css"]
/******/ 		];
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		var checkDeferredModules = x => {};
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime, executeModules] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0, resolves = [];
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					resolves.push(installedChunks[chunkId][0]);
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			while(resolves.length) {
/******/ 				resolves.shift()();
/******/ 			}
/******/ 		
/******/ 			// add entry modules from loaded chunk to deferred list
/******/ 			if(executeModules) deferredModules.push.apply(deferredModules, executeModules);
/******/ 		
/******/ 			// run deferred modules when all chunks ready
/******/ 			return checkDeferredModules();
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 		
/******/ 		function checkDeferredModulesImpl() {
/******/ 			var result;
/******/ 			for(var i = 0; i < deferredModules.length; i++) {
/******/ 				var deferredModule = deferredModules[i];
/******/ 				var fulfilled = true;
/******/ 				for(var j = 1; j < deferredModule.length; j++) {
/******/ 					var depId = deferredModule[j];
/******/ 					if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferredModules.splice(i--, 1);
/******/ 					result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 				}
/******/ 			}
/******/ 			if(deferredModules.length === 0) {
/******/ 				__webpack_require__.x();
/******/ 				__webpack_require__.x = x => {};
/******/ 			}
/******/ 			return result;
/******/ 		}
/******/ 		var startup = __webpack_require__.x;
/******/ 		__webpack_require__.x = () => {
/******/ 			// reset startup function so it can be called again when more startup code is added
/******/ 			__webpack_require__.x = startup || (x => {});
/******/ 			return (checkDeferredModules = checkDeferredModulesImpl)();
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	// run startup
/******/ 	return __webpack_require__.x();
/******/ })()
;