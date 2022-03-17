/*
 *
 * PUT CUSTOM JQUERY IN THIS FILE
 *
 */

(function($) {

  'use strict';

  $(document).ready(function() {





    //CODE TO GO IN HERE FOR THE WEBSITE
    console.log('hello from misc.js');

    $('.hero-carousel').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      variableWidth: true,
      arrows: true,
      dots: true,
      prevArrow: '<div class="left-arrow"><span class="fa fa-angle-left"></span><span class="sr-only">Prev</span></div>',
      nextArrow: '<div class="right-arrow"><span class="fa fa-angle-right"></span><span class="sr-only">Next</span></div>'
    });

    // Adds colour to current menu items title when child is hovered
    $('.menu-item > a').hover((e) => {
      $(e.currentTarget).parent().parent().parent().children().toggleClass('highlight');
    })

  });

})(jQuery);