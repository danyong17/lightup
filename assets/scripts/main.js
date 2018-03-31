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
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    // About us page, note the change from about-us to about_us.
    'page_template_template_residential_php': {
      init: function() {
        var swiper = new Swiper('.swiper-container', {
          direction: 'vertical',
          slidesPerView: 1,
          slidesPerColumn:1,
          slidesPerColumnFill:'row',
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev'
        });
      }
    },
    'page_template_template_testimonial_php': {
      init: function() {
        var swiper = new Swiper('.slide-container', {
          loop: true,
          slidesPerView: 1,
          slidesPerColumn:1,
          slidesPerColumnFill:'row',
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev'
        });
      }
    },
    'page_template_template_packages_php': {
      init: function() {
        var swiper = new Swiper('.package-container', {
          slidesPerView: 1,
          slidesPerColumn:1,
          speed:800,
          paginationClickable:true,
          slidesPerColumnFill:'row',
          spaceBetween: 30,
          pagination: '.swiper-pagination',
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          paginationBulletRender: function (swiper, index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
          }
        });
        document.addEventListener( 'wpcf7mailsent', function( event ) {
          if ( '332' === event.detail.contactFormId ) {
            var curkwh = $('#curkwh').val();
            var curbill = $('#billkwh').val();
            var avekwh = $('#avekwh').val();
            var pageID = $('#pageID').val();
            $.ajax({
              url : ajaxurl,
              type : 'post',
              // dataType : 'html',
              data : {
                action : 'post_find_package',
                avekwh : avekwh,
                pageID : pageID
              },
              beforeSend : function() {
                $('.calculation-section .calculate .overlay').fadeIn();
              },
              success : function( response ) {
                // alert(data);
                $('.calculation-section .calculate .overlay').fadeOut();
                $('#package_result').html(response);
                $('html, body').animate({
                  scrollTop: $("#package_result").offset().top - 100
                }, 800);
              }
            });
          }
        }, false );

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
