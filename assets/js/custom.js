// $(window).resize(function(){location.reload();});

history.scrollRestoration = "manual";
$(window).on('beforeunload', function(){
      $(window).scrollTop(0);
     });
$('boby').removeClass("is_light");
// loader 

$(window).on('load', function () {
  setTimeout(function () {
    $(".loader").delay(1000).fadeOut(600);
  }, 800);
});




jQuery(document).ready(function ($) {
  $("#owl-banner").owlCarousel({
    nav: true,
    navigation: true,
    slideSpeed: 300,
    rewind: true,
    dots: false,
    paginationSpeed: 500,
    items: 1,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      }
    }
  });

});




var owl = $('#horizontal');
owl.owlCarousel({
  loop: false,
  nav: false,
  margin: 30,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  center: true,
  afterAction: function(){
    if ( this.itemsAmount > this.visibleItems.length ) {
      if ( this.currentItem == 0 ) {
        console.log("start");
      }
      if ( this.currentItem == this.maximumItem ) {
        console.log("end");
      }
  
    } else {
    
    }
  },

  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    960: {
      items: 1
    },
    1200: {
      items: 1.5
    }
  }
});



$('#horizontal').on('mousewheel', '.owl-stage', function (e) {
  if (e.deltaY > 0) {
    owl.trigger('prev.owl.carousel');
  } 
  else {
    owl.trigger('next.owl.carousel');
  }
  e.preventDefault();
console.log(e);
});




$('#employeeSlider').owlCarousel({
  loop: false,
  margin: 20,
  nav: true,
  dots: false,
  navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
  responsive: {
    0: {
      items: 1,
      dots: true,
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})


$('#employeeSliderTwo').owlCarousel({
  loop: false,
  margin: 20,
  nav: true,
  dots: false,
  navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
  responsive: {
    0: {
      items: 1,
      dots: true,
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})



$('#testimonialSlider').owlCarousel({
  loop: false,
  margin: 10,
  dots: false,
  animateOut: 'fadeOut',
  autoplay: true,
  nav: true,
  navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})





$('#lifeOg').owlCarousel({
  loop: false,
  margin: 10,
  dots: false,
  pagination: true,
  nav: true,
  navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
  // navText: ["<div><img src='assets/images/arrow-outline.svg' alt='arrow'/> </div>", "<div><img src='assets/images/arrow-outline.svg' alt='arrow'/> </div>"],
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots:true
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})





var videoSlider = $('#heroBanner');
videoSlider.owlCarousel({
  loop: false,
  rewind: true,
  margin: 0,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  nav: true,
  dots: false,
  items: 1,
  navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
  responsive: {
    0: {
      items: 1,
      nav: false
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    }
  }
});

videoSlider.on('translate.owl.carousel', function (e) {
  $('.owl-item .item video').each(function () {
    // pause playing video - after sliding
    $(this).get(0).pause();
  });
});

videoSlider.on('translated.owl.carousel', function (e) {
  // check: does the slide have a video?
  if ($('.owl-item.active').find('video').length !== 0) {
    // play video in active slide
    $('.owl-item.active .item video').get(0).play();
  }
});



// cookie open modal 

jQuery(document).ready(function ($) {
  // Get CookieBox
  var cookieBox = document.getElementById('cookiebarBox');
  // Get the <span> element that closes the cookiebox
  var closeCookieBox = document.getElementById("cookieBoxok");
  closeCookieBox.onclick = function () {
    cookieBox.style.display = "none";
  };
});

(function () {

  /**
   * Set cookie
   *
   * @param string name
   * @param string value
   * @param int days
   * @param string path
   * @see http://www.quirksmode.org/js/cookies.html
   */
  function createCookie(name, value, days, path) {
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toGMTString();
    }
    else expires = "";
    document.cookie = name + "=" + value + expires + "; path=" + path;
  }

  function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  // Set/update cookie
  var cookieExpiry = 30;
  var cookiePath = "/";

  document.getElementById("cookieBoxok").addEventListener('click', function () {
    createCookie('seen-cookiePopup', 'yes', cookieExpiry, cookiePath);
  });

  var cookiePopup = readCookie('seen-cookiePopup');
  if (cookiePopup != null && cookiePopup == 'yes') {
    cookiebarBox.style.display = 'none';
  } else {
    cookiebarBox.style.display = 'block';
  }
})();





// range slider 

var rangeSlider = function () {
  var slider = $('.range-slider'),
    range = $('.range-slider__range'),
    value = $('.range-slider__value');

  slider.each(function () {

    value.each(function () {
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function () {
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();











// page scroll top 
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('#progress-value').fadeIn();
      $("#header_section").addClass("shadow_outer position-fixed");
      $(".fixed_faq").show(500);
    } else {
      $('#progress-value').fadeOut();
      $("#header_section").removeClass("shadow_outer position-fixed");
      $(".fixed_faq").hide(500);
    }
  });


  $(window).scroll(function () {
    if ($(this).scrollTop() > 600) {
      $("#header_section").addClass("shadow_outer position-fixed");
    } else {
      $("#header_section").removeClass("shadow_outer position-fixed");
    }
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 800) {
      $(".risk-dismiss").addClass("fade_top");
    } 
  });


  $('#progress-value').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 100);
    return false;
  });


  // fixed faq 
  $(".help_tag").click(function () {
    $(".fixed_faq").toggleClass('r-w-0');
  });
  $(".faq_close").click(function () {
    $(".fixed_faq").removeClass('r-w-0');
  });

});
$(document).mouseup(function(e) 
{
    var container = $(".fixed_faq ");
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
      $(".fixed_faq").removeClass('r-w-0');
    }
});


$(".dark").on('click', function (e) {
  e.preventDefault();
  onclick = "switchTheme()"
  $(".body").addClass("is_dark")
  $(".light").removeClass("is_active")
  $(".dark").addClass("is_active")

  // document.getElementById("logo_header").src = "assets/images/logo/logo_dark.png";
  // document.getElementById("logo_footer").src = "assets/images/logo/logo_dark.png";
});

$(".light").on('click', function (e) {
  e.preventDefault();
  $(".body").removeClass("is_dark")
  $(".light").addClass("is_active")
  $(".dark").removeClass("is_active")

  // document.getElementById("logo_header").src = "assets/images/logo/logo.png";
  // document.getElementById("logo_footer").src = "assets/images/logo/logo.png";
});




// scroll top progress 
let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#531A94 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;



// hover dropdown 
$(document).ready(function () {
  $(".dropdown_hover").hover(
    function () {
      $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("100");
      $(this).toggleClass('open');
    },
    function () {
      $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("100");
      $(this).toggleClass('open');
    }
  );
});





// toggle button 
$('.theme_check').on('click', function(e) {
  $('.theme_mode').toggleClass("pressed"); 
  e.preventDefault();
});






// client testimonial 
$('#customers-testimonials').owlCarousel({
  loop: true,
  center: true,
  items: 3,
  margin: 0,
  autoplay: true,
  dots:true,
  autoplayTimeout: 8500,
  smartSpeed: 450,
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2
    },
    1170: {
      items: 3
    }
  }
});



// mobile sidebar menu
$(document).ready(function(){
  $(".menu_icon").click(function(){
    $("html").toggleClass("body_hidden");
  });
  $(".inner_nav_link").click(function(){
    $(".navbar-collapse").removeClass("show");
    $("html").removeClass("body_hidden");
  });
});



// media query 
$( window ).resize( function() {
  if ( window.matchMedia( '(max-width:1199px)' ).matches ) {
    $(".has-megamenu").removeClass('dropdown_hover');
    
  } else if ( window.matchMedia( '(max-width:991px)'.matches ) ) {
   
  } else {
    
  }

} );
$( window ).resize();
