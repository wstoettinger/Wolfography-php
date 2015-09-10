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
      lazyLoad: 'progressive',
    });

    var big = {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.slider-eins-small'
    };

    var small = {
      slidesToShow: 5,
      slidesToScroll: 1,
      draggable: false,
      arrows: true,
      focusOnSelect: true,
      infinite: true,
      centerMode: true,
      asNavFor: '.slider-eins-big'
    };

    $('.slider-eins-big').slick(big);
    $('.slider-eins-small').slick(small);

    big.asNavFor = '.slider-zwei-small';
    small.asNavFor = '.slider-zwei-big';

    $('.slider-zwei-big').slick(big);
    $('.slider-zwei-small').slick(small);

    // immitate opening a modal dialog on a slide click.
    $('.slick-slide').click(function () {
      var cont = $(this).closest('.slider-container');
      // apply css for z-index and stuff
      cont.addClass('modal-shown');
      // scroll to position
      $('html, body').animate({
        scrollTop: cont.offset().top - 20
      }, 500);
      // show the backdrop
      $('#slideshowModal').modal('show');
    });

    // hide modal when escape pressed inside shlick slide
    $('.slick-slide').keyup(function (event) {
      if (event.which == 27) {
        $('#slideshowModal').modal('hide');
      }
    });

    // hide modal on mouse wheel:
    $('.slick-slide').bind('mousewheel', hideModal);
    $('#slideshowModal').bind('mousewheel', hideModal);

    // hide modal on touch move:
    $('.slick-slide').bind('touchmove', hideModal);
    $('#slideshowModal').bind('touchmove', hideModal);

    // remove class after modal is hidden
    $('#slideshowModal').on('hidden.bs.modal', function (event) {
      $('.slider-container').removeClass('modal-shown');
    });

    $('.slider div').removeClass("hidden");
  });
};

window.hideModal = function (e) {
  $('#slideshowModal').modal('hide');
}

window.loadScript = function () {
  var sheet = document.createElement('link');
  sheet.rel = 'stylesheet';
  if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i))
    sheet.href = '/css/client_touch.css';
  else
    sheet.href = '/css/client_pointer.css';
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