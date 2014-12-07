
$(document).ready(function(){									
	$(".main").on("click", function(){							//min nav toggle menu
		$(".dropdown").toggleClass("open");						//
	});	


	$(".selector").on("click", function(){						//min nav toggle portfolio
		$(".selection").toggleClass("open");					//
	});	


	var windowWidth = $(window).width();						//
	if(windowWidth <= 768){										//reverses li order in .dropdown if 
		ul = $('.dropdown');									//screen size is equal or smaller
		ul.children().each(function(i,li){ul.prepend(li)}) 		//than 768px (doesn't work if browser 
	}															//is resized - not dynamic, must be refreshed)


	if(windowWidth <= 480){										//reverses li order in .selection if 
		ul = $('.selection');									//screen size is equal or smaller
		ul.children().each(function(i,li){ul.prepend(li)}) 		//than 480px (doesn't work if browser 
	}															//is resized - not dynamic, must be refreshed)


	$(".nav").on("click", "li", function() {					//
	    var $this = $(this);									//adds active class to clicked element and
	    $this.addClass("active")								//removes .active from siblings
	         .siblings().removeClass("active");					//
	});

});


$(function() {													//
  $('.target').hovercap({										//
    toggleElement: '.target__caption',							//activates image overlay on hover with fade in effect
    toggleAnimataion: 'fade'									//
  });															//
});

