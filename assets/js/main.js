//hero slider
$('.hero-right-slider').slick({
    infinite: true,
    slidesToShow: 1,
    margin: 10,
    slidesToScroll: 1,
    // autoplay: true,
    dots: false,
    arrows: true,
    responsive: [{
            breakpoint: 1099,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
  });
  

// client carousel
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})



// latest-project-slider
$(document).ready(function(){
    $('.latest-project-slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1.5
            },
            1300:{
                items:2.2
            },
            1500:{
                items:2.5
            }
        }
      })
});


// testimonial slider
$(document).ready(function(){
    $('.testimonial-slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1.5
            },
            1300:{
                items:3.5
            },
            1500:{
                items:3.5
            }
        }
      })
});


// data aos





//init Masonry
var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });