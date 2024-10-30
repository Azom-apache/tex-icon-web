var $window = $(window);
var $root = $('html, body');

$(function(){
	// Animate with Scroll
	new WOW().init();

  AOS.init({
    duration: 1200
  });

  
  // Fancybox Configuration

  $('[data-fancybox="gallery"]').fancybox({
    buttons: [
      "slideShow",
      "thumbs",
      "zoom",
      "fullScreen",
      "share",
      "close"
    ],
    loop: false,
    protect: true
  });
  
});


$(document).ready(function(){

  $('.main_menu_ul .nav-item .nav-link').click(function(){
    $('.main_menu_ul .nav-item .nav-link').removeClass('active');
    $(this).addClass('active');
  })
  $('.navbarNav_menu').click(function(){
    $('.modal-backdrop').removeClass('show');
  })

  $('.navbarNav_menu').click(function(){
    $('.navbarNav_menu').removeClass('show');

  })


  
})

// Homepage BAnner

jQuery("#homepage_banner_carousel_id").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 9000,
  smartSpeed: 1000,
  dots: false,
  nav:true,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  mouseDrag  : false,
  navText: ['<span class="fa-solid fa-chevron-left"></span>','<span class="fa-solid fa-chevron-right"></span>'],
  responsive: {
    0: {
      items: 1,

    },

    600: {
      items: 1,
      
    },

    1024: {
      items: 1,
      
    },

    1366: {
      items: 1,   
      
    }
  },
});
  // About us carosuel 
jQuery("#about_us_carousel_id").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: false,
    margin: 20,
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 9000,
    smartSpeed: 1000,
    dots: false,
    responsive: {
      0: {
        items: 1,
 
      },
  
      600: {
        items: 1,
        
      },
  
      1024: {
        items: 1,
        
      },
  
      1366: {
        items: 1,   
	      
      }
    },
});



jQuery("#design_studio_left_carousel_id").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 0,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 9000,
  smartSpeed: 1000,
  dots: false,
  nav:true,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  navText: ['<span class="fa-solid fa-chevron-left"></span>','<span class="fa-solid fa-chevron-right"></span>'],
  
  responsive: {
    0: {
      items: 1,

    },

    600: {
      items: 1,
      
    },

    1024: {
      items: 1,
      
    },

    1366: {
      items: 1,   
      
    }
  },
});
jQuery("#design_studio_carousel_id").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 9000,
  smartSpeed: 1000,
  dots: false,
  responsive: {
    0: {
      items: 1,

    },

    600: {
      items: 1,
      
    },

    1024: {
      items: 1,
      
    },

    1366: {
      items: 1,   
      
    }
  },
});

jQuery("#blog_carosuel_id").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 9000,
  smartSpeed: 1000,
  dots: false,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  responsive: {
    0: {
      items: 1,

    },

    600: {
      items: 1,
      
    },

    1024: {
      items: 1,
      
    },

    1366: {
      items: 1,   
      
    }
  },
});


$(function(){
	$(".counter").counterUp({
		delay:10,
		time:2000
	});
});

$window.on('scroll', function () {
 
    if ($window.scrollTop() > 100) {
        $('#header').addClass('header-sticky');
      
    } else {
        $('#header').removeClass('header-sticky');
        
    }
  
});

$(function () {

  $("a.smooth-scroll").click(function (event) {

      event.preventDefault();

      
      var section = $(this).attr("href");

      $('html, body').animate({
          scrollTop: $(section).offset().top - 70
      }, 1250, "easeInOutExpo");
  });
});


/*---------Client-------------*/

$(function(){
	$("#client-list").owlCarousel({
		items:6,
		autoplay:true,
		smartSpeed:900,
		loop:true,
    dots: false,
    arrows: false,
		autoplayHoverPause:true,
		responsive:{
			// breakpoint from 0 up
			0:{
				items:3
			},
			// breakpoint from 480p up
			480:{
				items:3
			},
			// breakpoint from 768p up
			768:{
				items:5
			},

			//breakpoint from 992p up
			992:{
				items:6
			},
      1200:{
				items:6
			},
      1400:{
				items:6
			}
		} 
	});
});
/*---------Vision-------------*/

$(function(){


  $('#vision-list').slick({
		rows: 2,
		dots: false,
		arrows: false,
		infinite: false,
    autoplay:true,
		speed: 3000,
		slidesToShow: 3,
		slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          rows: 2,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          rows: 3,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          rows: 3,
        }
      }
    ]
  });

 

  $('.center').slick({
    centerMode: true,
    infinite: true,
    centerPadding: '0px',
    speed: 500,
    variableWidth: true,
  });
  $('.center').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    console.log('beforeChange', currentSlide, nextSlide);
  });
  $('.center').on('afterChange', function(event, slick, currentSlide){
    console.log('afterChange', currentSlide);
  });


  

});

  jQuery("#product_carousel_id").owlCarousel({
    autoplay: false,
    lazyLoad: true,
    loop: true,
    margin: 0,
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 9000,
    smartSpeed: 1000,
    dots: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true,
    mouseDrag  : false,
    navText: ['<span class="fa-solid fa-chevron-left"></span>','<span class="fa-solid fa-chevron-right"></span>'],
    
    responsive: {
      0: {
        items: 1,
  
      },
  
      600: {
        items: 1,
        
      },
  
      1024: {
        items: 1,
        
      },
  
      1366: {
        items: 1,   
        
      }
    },
  });


  // navigation

  $(function(){
    $(window).scroll(function(){
      if($(this).scrollTop() < 50){
        $("nav").removeClass("vesco-top-nav");
        $("#back-to-top").fadeOut();
      }else{
        $("nav").addClass("vesco-top-nav");
        $("#back-to-top").fadeIn();
      }
    });


    
  });

  $window.on('scroll', function () {
 
    if ($window.scrollTop() > 100) {
        $('#header').addClass('header-sticky');
      
    } else {
        $('#header').removeClass('header-sticky');
        
    }
  
});

// Preloader js
$(window).on('load', function() {
  $(".preloder_part").fadeOut();
  $(".spinner").delay(2000).fadeOut("slow");
});
  
  // Smooth scrolling
  
  $(function () {
  
      $("a.smooth-scroll").click(function (event) {
  
          event.preventDefault();
  
          // get/return id like #about, #work, #team and etc
          var section = $(this).attr("href");
  
          $('html, body').animate({
              scrollTop: $(section).offset().top - 70
          }, 1250, "easeInOutExpo");
      });
  });
  
  // close mobile menu on click
  
  $(function(){
    $(".navbar-collapse ul li a").on("click touch",function(){
      $(".navbar-toggle").click();
    })
  });


  $(document).on('click', '.website_video_modal_btn', function(){
      $("#website_video_modal").modal('show');            
  });
  
  jQuery("#blog_carosuel_page_id").owlCarousel({
    autoplay: false,
    lazyLoad: true,
    loop: false,
    margin: 20,
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 9000,
    smartSpeed: 1000,
    dots: false,
    responsive: {
      0: {
        items: 1,

      },

      600: {
        items: 1,
        
      },

      1024: {
        items: 1,
        
      },

      1366: {
        items: 1,   
        
      }
    },
  });

  jQuery("#blog_carosuel_heading").owlCarousel({
    autoplay: false,
    lazyLoad: true,
    loop: false,
    margin: 20,
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 9000,
    smartSpeed: 1000,
    nav:true,
    navText: ['<span class="fa-solid fa-chevron-left"></span>','<span class="fa-solid fa-chevron-right"></span>'],
    dots: false,
    responsive: {
      0: {
        items: 1,

      },

      600: {
        items: 1,
        
      },

      1024: {
        items: 1,
        
      },

      1366: {
        items: 1,   
        
      }
    },
  });