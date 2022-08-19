// Hide Header on on scroll down

        $(window).on('scroll',function(){
            if($(window).scrollTop()){
                $('header').addClass('black');
            }
            else{
                $('header').removeClass('black');
            }
        });

 window.onload = function () {
    window.setTimeout(fadeout, 500);
    };
    function fadeout() {
    document.querySelector(".preloader").style.opacity = "0";
    document.querySelector(".preloader").style.display = "none";
    };

wow = new WOW(
    {
    
    offset: 100
    }
    );
    wow.init();
$(document).ready(function () {
    $(".hs-menubar").hsMenu();
});

$(".brands").slick({
    
    autoplay: true,
    infinite: true,
    dots: false,
    speed: 1000,
    slidesToShow: 4,
    slideswToScroll: 1,
    pauseOnHover: false,
    arrows: false,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
            }
        }

    ]

});

$(".services-slider").slick({
    
    autoplay: true,
    infinite: true,
    dots: false,
    speed: 1000,
    slidesToShow: 3,
    slideswToScroll: 1,
    arrows: false,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 1.8,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1.8,
                slidesToScroll: 1,
                arrows: false,
            }
        }

    ]

});
$(".team-slider").slick({
    
    autoplay: false,
    infinite: true,
    dots: false,
    speed: 1000,
    slidesToShow: 4,
    slideswToScroll: 1,
    arrows: true,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
            }
        }

    ]

});

var btn = $('.to-top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


const sections = document.querySelectorAll("section[id]");

window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
  
  let scrollY = window.pageYOffset;
 
  sections.forEach(current => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");
    
   
    if (
      scrollY > sectionTop &&
      scrollY <= sectionTop + sectionHeight
    ){
      document.querySelector(".nav-links a[href*=" + sectionId + "]").classList.add("active");
    } else {
      document.querySelector(".nav-links a[href*=" + sectionId + "]").classList.remove("active");
    }
  });
}

 new WOW().init();
 
 
            $(document).ready(function() {

var counters = $(".count");
var countersQuantity = counters.length;
var counter = [];

for (i = 0; i < countersQuantity; i++) {
  counter[i] = parseInt(counters[i].innerHTML);
}

var count = function(start, value, id) {
  var localStart = start;
  setInterval(function() {
    if (localStart < value) {
      localStart++;
      counters[id].innerHTML = localStart;
    }
  }, 0.1);
}

for (j = 0; j < countersQuantity; j++) {
  count(0, counter[j], j);
}
});
       


$(".slick-slider").slick({
    slidesToShow: 3,
    infinite:false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000
      // dots: false, Boolean
     // arrows: false, Boolean
   });
 
 
 // Image Slider Demo:
 // https://codepen.io/vone8/pen/gOajmOo