$(document).ready(function(){
  $(".gallery").owlCarousel({
        items:3,
        merge:true,
        loop:true,
        margin:20,
        nav:true,
        video:true,
        autoHeight:true,
        lazyLoad:true,
        center:true,
        navText: ['<div class="slider-button prev-gall"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div><span class="visually-hidden">Previous</span>', '<div class="slider-button next-gall"><span class="carousel-control-next-icon" aria-hidden="true"></span></div><span class="visually-hidden">Next</span>'], 
        autoplayTimeout:5000,
        responsive:{
            0:{
                items:2,
                margin:0,
                nav:true
            },
            768:{
                items:3
            }
        }
    });
    
    $('.gallery').find('.owl-nav').removeClass('disabled');
    $('.gallery').find('.cloned').addClass('margin-gallery');
    $('.gallery').on('changed.owl.carousel', function(event) {
        $(this).find('.owl-nav').removeClass('disabled');
    });

    $(".video-hero").owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:20,
        nav:true,
        video:true,
        lazyLoad:true,
        center:true,
        navText: ['<div class="slider-button prev-gall"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div><span class="visually-hidden">Previous</span>', '<div class="slider-button next-gall"><span class="carousel-control-next-icon" aria-hidden="true"></span></div><span class="visually-hidden">Next</span>'], 
        autoplayTimeout:5000,
        onDragged: function() {
            console.log('transition');
        },
        responsive:{
            0:{
                items:1,
                margin:0,
                nav:true
            },
            768:{
                items:1
            }
        }
       
    });
    var owl = $('.owl-carousel');
    owl.on('translated.owl.carousel', function(event) {
        var currentSlide, player, command;

        currentSlide = $('.item-video');
    
        player = currentSlide.find("iframe").get(0);
    
        command = {
            "event": "command",
            "func": "pauseVideo"
        };
    
        if (player != undefined) {
            player.contentWindow.postMessage(JSON.stringify(command), "*");
    
        };    
   });

  
    $('.video-hero').find('.owl-nav').removeClass('disabled');
    $('.video-hero').find('.cloned').addClass('margin-gallery');
    $('.video-hero').on('changed.owl.carousel', function(event) {
        $(this).find('.owl-nav').removeClass('disabled');
    });

    $(".gallery-feat").owlCarousel({
        items:2,
        loop:true,
        margin:32,
        lazyLoad:true,
        center:true,
        autoHeight:true,
        autoWidth:true,
        autoplayTimeout:5000,
        responsive:{
            0:{
                items:2
            }
        }
    });
    

});
$('.dropdown').hover(function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
});