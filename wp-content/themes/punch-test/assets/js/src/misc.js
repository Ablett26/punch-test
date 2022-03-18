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

    const cardLogo = $('.js-image');

    $(cardLogo).css('opacity', 0);
    $(cardLogo).waypoint(function() {
      $(cardLogo).addClass('fadeInDown');
      $(cardLogo).css('opacity', 1);
      console.log('hello')
    }, { offset: '70%' });

    const listContent = $('.image-text-block__list-content');

    $(listContent).css('opacity', 0);


    function staggerAnimation(item) {
      for (let index = 0; index < item.length; index++) {
        const element = item[index];
        setTimeout(function() {
          $(element).addClass('fadeInLeft');
          $(element).css('opacity', 1);

        }, 500 * index);
      }
    };


    $(listContent).waypoint(function() {
      staggerAnimation(listContent);
    }, { offset: '70%' });



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
    });




  });

})(jQuery);