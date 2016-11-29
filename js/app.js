 // IIFE - Immediately Invoked Function Expression
 (function(insecoApp) {

  // The global jQuery object is passed as a parameter
  insecoApp(window.jQuery, window, document);

 }(function($, window, document) {

  // The $ is now locally scoped 

  // Listen for the jQuery ready event on the document
  $(function() {

   // The DOM is ready!
   // $('.page-companies-slider').slick({
   //  infinite: true,
   //  slidesToShow: 3,
   //  slidesToScroll: 1,
   //  autoplay: true,
   //  autoplaySpeed: 4000,
   // }).css('opacity', '1');

   $('.home-companies-slider').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 3,
    autoplay: true,
    arrows: false, // true
    autoplaySpeed: 3000,
   }).css('opacity', '1');

   $('.companies-slider').css('display', 'block');

   setTimeout(function() {
    // Vertical center
    $.each($('.slick-slide'), function() {
     var containerHeight = $('.companies-slider').height();
     var vheight = $(this).height();
     var topSpace = (containerHeight - vheight) / 2;

     $(this).find('.image').css('margin-top', topSpace);
     
     var vcontent = $(this).find('.home-slider-content');
     var vlogo = vcontent.find('.home-slider-small-logo');
     var vlink = vcontent.find('.home-slider-link');
     
     if(vcontent.hasClass('home-slider-bottom')){
      vlink.css('margin-left',vlogo.width()+15 +'px');
      vcontent.find('p').css('margin-left',vlogo.width()+15 +'px');
     }
    });
    $('.companies-slider').css('opacity', '1');
   }, 300);

   // Home Slider
   $('.home-slider').slick({
    dots: true, // true
    infinite: true,
    autoplay: true,
    autoplaySpeed: 8000,
    fade: true,
    arrows: false, // true
    pauseOnFocus: true
   }).css('opacity', '1');

  
  });

  $(window).load(function($) {
   //executes when complete page is fully loaded, including all frames, objects and images
  });
  // The rest of the code goes here!
 }));