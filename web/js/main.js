'use strict';

window.initialize = function () {

  window.loadScript();
  window.initMenu();

  $(document).ready(function () {
    $('.home-slider').slick({
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1000,
      fade: true,
      cssEase: 'linear',
      //focusOnSelect: true (for clicks)
      //lazyLoad  'ondemand' or 'progressive'
      //mobileFirst: true
      //swipe: true
      //swipeToSlide: 
    });
  });

};

window.loadScript = function () {
  var sheet = document.createElement('link');
  sheet.rel = 'stylesheet';
  if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i))
    sheet.href = '/static/css/client_touch.css';
  else
    sheet.href = '/static/css/client_pointer.css';
  document.body.appendChild(sheet);
};

window.initMenu = function () {
  $('.menu-toggle').click($('.menu'), function (e) {
    var m = e.data;
    m.toggleClass('expanded'); // add expanded
    m.toggleClass('right'); // remove right (on mobile)
    e.stopPropagation();
  });

  $('.dropdown-toggle').click(function (e) {
    var t = $(this);
    var isExpanded = t.hasClass('expanded');

    // close other dropdowns
    $('.dropdown-toggle').removeClass('expanded');
    $('.dropdown').removeClass('expanded');

    if (!isExpanded) {
      // expand parents (again)
      var p = t.parents('.dropdown');
      p.addClass('expanded');
      p.prev('.dropdown-toggle').addClass('expanded');

      // expand current element
      t.addClass('expanded');
      t.next('.dropdown').addClass('expanded');
    }
    e.stopPropagation();
  });

  /* Clicks within the dropdown won't make
  it past the dropdown itself */
  $(".dropdown").click(function (e) {
    e.stopPropagation();
  });

  $(".menu").click(function (e) {
    e.stopPropagation();
  });

  /* Anything that gets to the document
  will hide the dropdown */
  $(document).click(function () {
    $('.menu').removeClass('expanded');
    $(".dropdown-toggle").removeClass('expanded');
    $(".dropdown").removeClass('expanded');
  });
};

window.onload = initialize;