$(document).ready(function(){
	$('#article_tab').owlCarousel({
	    loop:true,
	    autoplay:true,
    	autoplayTimeout:2000,
    	autoplayHoverPause:true,
	    margin:10,
	    nav:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:3
	        }
	    }
	})
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    autoplay:true,
    	autoplayTimeout:2000,
    	autoplayHoverPause:true,
	    margin:10,
	    nav:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	})

})