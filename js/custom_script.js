/*My mobile menu*/
jQuery(document).ready(function ($) {
  /*Blog Sidebar Categories*/
  $(".blog-sidebar ul").prepend(
    '<li class="most-recent"><a href="/blog">Most Recent</a></li>'
  );

  $(window).on("load", function () {
    var path = window.location.pathname;

    if (path.indexOf("blog") >= 0) {
      //if path contains
      // alert('hej hej' + path);

      $(".most-recent").addClass("current-misse");
    }
  });

  /*when click on veggoburger...add or remove class */
  $(".toggle").click(function () {
    $(".nav-mobile").toggleClass("nav-mobile-open");
  });

  /*Desktop*/
  /*when click on menu-item with sub-menu...add or remove class*/

  $("nav ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation(); /* to stop the 'document handler' from activating at the same time as the click event on class */
    $(this).children("ul").toggleClass("sub-menu-open");
    //$('nav ul li.menu-item-has-children ul').toggleClass('sub-menu-open');
  });

  /*remove class clicking anywhere on page*/
  $(document).click(function (event) {
    if (!$(event.target).closest("nav ul li.menu-item-has-children ul").length) {
      $("nav ul li.menu-item-has-children ul").removeClass("sub-menu-open");
    }
  });

  /*Mobile menu*/

  $(".nav-mobile ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation(); /* to stop the 'document handler' from activating at the same time as the click event on class */
    //$('.nav-mobile ul li.menu-item-has-children ul').toggleClass('sub-menu-open');
    $(this).children("ul").toggleClass("sub-menu-open");
  });

  /*remove class clicking anywhere on page*/
  $(document).click(function (event) {
    if (!$(event.target).closest(".nav-mobile ul li.menu-item-has-children ul").length) {
      $(".nav-mobile ul li.menu-item-has-children ul").removeClass("sub-menu-open");
    }
  });

  /*Sliding Testimonials*/

  //ger första bilden class="top"
  $('.slides .slide:first').addClass('top');


  //Function for Next button - change class top
  var changeClassNext = function () {
    //alert('hej');

    var current = $('.slides .slide.top');
    var next = current.next(); //pick up the next element


    if (!next.length) { //if there is NOT a next element
      next = $('.slides .slide:first');

      next.addClass('top'); //add class 'top'

      current.animate({
        opacity: 0.0
      }, 1000, function () { //make current disappear
        current.removeClass('top'); //remove class 'top'
        current.css({
          opacity: 1.0
        }); //visible again
      });
    } else { //if there is a next element
      next.css({
          opacity: 0.0
        }) //make next disappear
        .addClass('top') //add class top to next
        .animate({
          opacity: 1.0
        }, 1000, function () { //make next appear again
          current.removeClass('top'); //take away the class on current
        });
    }
  }

  //execute every 6 seconds
  setInterval(changeClassNext, 4000);

  $('.btn_slider.next').click(function () {
    // alert('hej');
    changeClassNext();
  });


  //Function for Prev button - change class top
  var changeClassPrev = function () {

    var current = $('.slides .slide.top');
    var next = current.prev(); //pick up the previous element


    if (!next.length) { //if there is NOT a previous element = if it is the first
      next = $('.slides .slide:last');

      next.css({
          opacity: 0.0
        }) //make prev disappear
        .addClass('top') //add class top to prev
        .animate({
          opacity: 1.0
        }, 2000, function () { //make next appear
          current.removeClass('top'); //take away the class on current
          current.css({
            opacity: 1.0
          }); //current visible again
        });
    } else { //if there is a previous element

      next.addClass('top'); //add class 'top'

      current.animate({
        opacity: 0.0
      }, 2000, function () { //make current disappear
        current.removeClass('top'); //remove class 'top'
        current.css({
          opacity: 1.0
        }); //current visible again
      });

    }
  }

  $('.btn_slider.prev').click(function () {
    // alert('hej');
    changeClassPrev();
  });


}); //document.ready