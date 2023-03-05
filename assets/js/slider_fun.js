$(document).ready(function()
                     { 
   
         $(".carouselindex").owlCarousel({
           
                margin:0,
               loop:true,
             
              //nav:false,
			dots:true,
           //shadowBlur:80,
               autoplay:true,
               autoplayTimeout:4000,
             
            autoplayHoverPause:true,
             ///////////////////
            
            responsive:
            {
                0:{
                    items:1,
                   
                },
                
                600:{
                   items:1, 
                },
                
                1000:{
                    items:1,
                }
            }
            
        });
        /////////////////////////
        var owlindex=$('.carouselindex');
        owlindex.owlCarousel();
        $(".PrevArrow").click(function()
                             {
            owlindex.trigger("next.owl.carousel");
        }
        
        );
         $(".NextArrow").click(function()
                             {
            owlindex.trigger("prev.owl.carousel",[300]);
        }
        
        );
        ////////////////////////
        ////////////////////////////////////////////
       
         
    }) ; 