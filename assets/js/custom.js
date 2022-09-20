jQuery(document).ready(function ($) {
    $("#owl-banner").owlCarousel({
      navigation: true,
      slideSpeed: 300,
      dots: true,
      paginationSpeed: 500,
      items: 1,
      singleItem: true,
      autoPlay: 4000
    });
  });



  var owl = $('#horizontal');
  owl.owlCarousel({
    loop: false,
    nav: false,
    margin: 30,
    center: true,
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

    } else {
      owl.trigger('next.owl.carousel');
    }
    e.preventDefault();
  });







  $('#employeeSlider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    responsive: {
      0: {
        items: 1
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
    loop: true,
    margin: 20,
    nav: false,
    responsive: {
      0: {
        items: 1
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
    loop: true,
    margin: 10,
    dots: false,
    animateOut: 'fadeOut',
    autoplay: true,
    nav: true,
    navText: ["<div><img src='assets/images/arrow.svg' alt='arrow'/> </div>", "<div><img src='assets/images/arrow.svg' alt='arrow'/> </div>"],
    responsive: {
      0: {
        items: 1,
        nav: false
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
    navText: ["<div><img src='assets/images/arrow-outline.svg' alt='arrow'/> </div>", "<div><img src='assets/images/arrow-outline.svg' alt='arrow'/> </div>"],
    responsive: {
      0: {
        items: 1,
        nav: false
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
  margin: 0,
  nav: false,
  dots: true,
  items: 1
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

jQuery(document).ready(function($) {
  // Get CookieBox
 var cookieBox = document.getElementById('cookiebarBox');
 // Get the <span> element that closes the cookiebox
 var closeCookieBox = document.getElementById("cookieBoxok");
   closeCookieBox.onclick = function() {
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

var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();





window.onload = function() {

var options = {
	exportEnabled: false,
	animationEnabled: true,
	backgroundColor: "#F3EEF7",
	data: [{
		type: "pie",
		showInLegend: false,
		toolTipContent: "<b>{name}</b>:(#percent%)",
		indexLabel: "{name}",
		legendText: "{name} (#percent%)",
		indexLabelPlacement: "inside",
    
		dataPoints: [
			{ y: 65, name: "Male", color: "#511890", indexLabelFontColor: "#ffffff"},
			{ y: 35, name: "Female",color: "#009193", indexLabelFontColor: "#ffffff"},
			]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
