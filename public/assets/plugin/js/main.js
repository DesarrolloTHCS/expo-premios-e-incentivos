(function ($)
  { "use strict"


/* 1. Proloder */
    $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
        'overflow': 'visible'
      });
    });

/* 2. sticky And Scroll UP */
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll < 400) {
        $(".header-sticky").removeClass("sticky-bar");
        $('#back-top').fadeOut(500);
      } else {
        $(".header-sticky").addClass("sticky-bar");
        $('#back-top').fadeIn(500);
      }
    });

  // Scroll Up
    $('#back-top a').on("click", function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });


/* 3. slick Nav */
// mobile_menu
    var menu = $('ul#navigation');
    if(menu.length){
      menu.slicknav({
        prependTo: ".mobile_menu",
        closedSymbol: '+',
        openedSymbol:'-'
      });
    };



    // index-2
    $('.slider-item-active').slick({
      slidesToShow: 1,
      loop:true,
      infinite: true,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor:'.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      loop:true,
      arrows: false,
      infinite: true,
      asNavFor: '.slider-item-active',
      dots: false,
      prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
      centerMode: true,
      focusOnSelect: true,
      centerPadding:0,
    });



/* 4. Testimonial Active*/
var testimonial = $('.h1-testimonial-active');
if(testimonial.length){
testimonial.slick({
    dots: true,
    infinite: true,
    speed: 1000,
    autoplay:true,
    loop:true,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="ti-arrow-top-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="ti-arrow-top-right"></i></button>',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows:true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows:true
        }
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots:false
        }
      }
    ]
  });
}


/* 5. Gallery Active */
var client_list = $('.instagram-active');
if(client_list.length){
  client_list.owlCarousel({
    slidesToShow: 5,
    slidesToScroll: 1,
    loop: true,
    autoplay:true,
    speed: 3000,
    smartSpeed:2000,
    nav: false,
    dots: false,
    margin: 0,

    autoplayHoverPause: true,
    responsive : {
      0 : {
        nav: false,
        items: 2,
      },
      768 : {
        nav: false,
        items: 5,
      }
    }
  });
}

/* 5.1 Carousel de imágenes que trabajan con nosotros */
var client_list = $('.carousel-active');
if(client_list.length){
  client_list.owlCarousel({
    items: 5,
    loop: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplaySpeed: 800,
    smartSpeed: 5000,
    nav: false,
    dots: false,
    margin: 0,
    autoplayHoverPause: false,
    responsive : {
      0 : {
        nav: false,
        items: 2,
      },
      768 : {
        nav: false,
        items: 5,
      }
    }
  });

  // Event listener for starting autoplay again after interaction
  client_list.on('dragged.owl.carousel', function(event) {
    $(this).trigger('stop.owl.autoplay');
    $(this).trigger('play.owl.autoplay', [1000]);
  });

  client_list.on('translated.owl.carousel', function(event) {
    $(this).trigger('stop.owl.autoplay');
    $(this).trigger('play.owl.autoplay', [1000]);
  });

  client_list.on('changed.owl.carousel', function(event) {
    $(this).trigger('stop.owl.autoplay');
    $(this).trigger('play.owl.autoplay', [1000]);
  });
}


/* 6. Nice Selectorp  */
  var nice_Select = $('select');
    if(nice_Select.length){
      nice_Select.niceSelect();
    }

/* 7. data-background */
    $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });


/* 10. WOW active */
    new WOW().init();

// 11. ---- Mailchimp js --------//
    function mailChimp() {
      $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();


// 12 Pop Up Img
    var popUp = $('.single_gallery_part, .img-pop-up');
      if(popUp.length){
        popUp.magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }
        });
      }
// 12 Pop Up Video
    var popUp = $('.popup-video');
    if(popUp.length){
      popUp.magnificPopup({
        type: 'iframe'
      });
    }

/* 13. counterUp*/
    $('.counter').counterUp({
      delay: 10,
      time: 3000
    });

/* 14. Datepicker */
  $('#datepicker1').datepicker();

// 15. Time Picker
  $('#timepicker').timepicker();

//16. Overlay
  $(".snake").snakeify({
    speed: 200
  });


//17.  Progress barfiller

  $('#bar1').barfiller();
  $('#bar2').barfiller();
  $('#bar3').barfiller();


  //17. hamburger Menu
  $('.hamburger').on('click', function() {
    $(this).toggleClass('is-active');
    $(this).next().toggleClass('nav-menu-show')
  });




})(jQuery);

document.getElementById('nav-main').addEventListener('click', function() {
    document.getElementById('inicio').scrollIntoView({
        behavior: 'smooth'
    });
});

document.getElementById('nav-why').addEventListener('click', function() {
    document.getElementById('servicios').scrollIntoView({
        behavior: 'smooth'
    });
});

document.getElementById('nav-clients').addEventListener('click', function() {
    document.getElementById('clients').scrollIntoView({
        behavior: 'smooth'
    });
});

document.getElementById('nav-map').addEventListener('click', function() {
    document.getElementById('ubicacion').scrollIntoView({
        behavior: 'smooth'
    });
});

document.getElementById('nav-register').addEventListener('click', function() {
    document.getElementById('registro').scrollIntoView({
        behavior: 'smooth'
    });
});
