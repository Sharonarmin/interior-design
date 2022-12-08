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
$('.client-slider').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
    nav:false,
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


// interior slider 

$(document).ready(function(){
    $('.interior-design-slider').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        dots:true,
        autoplay:false,
        navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1300:{
                items:1
            },
            1500:{
                items:1
            }
        }
      })
});



