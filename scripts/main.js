/* CUSTOM SCRIPTS FOR FUNCTIONALITY */


document.addEventListener("DOMContentLoaded", function() {

	var header = $(".main-nav__bar");
	    
	/* MANUFACTURERS MOBILE VIEW SELECT LIST CATEGORY ONCHANGE EVENT */
	$("select.manufacturers-list").change(function() {
  		window.location = $(this).find("option:selected").val();
	});

    $(window).scroll(function() {
           
    	if ( $('.page-template').hasClass('page-template-homepage') ) {

	    	var sec = $('.sec7');
	        var secTop = $('.sec7').offset().top;
	       	var secHeight = $('.sec7').outerHeight();
	       	var winHeight = $(window).height();
	       	var winScroll = $(this).scrollTop();
	      
   			/* HOMEPAGE BOTTOM SECTION WITH NUMBERS */
   			if ( !sec.hasClass("counted") ) {

	   			if (winScroll > (secTop+secHeight-winHeight) - 100){
	   				$(".large-font").addClass('visible');	
					$("#counter1, #counter3, #counter4, #counter5, #counter6").countify();
					$("#counter2").countify({
						decimal:1
					});
					sec.addClass("counted")
	   			}

   			} else {
   				//do nothing
   			}
   		}
		

		var scroll = $(window).scrollTop();
		var mitLogoInactive = $(".second-logo.inactive-state");
	    var mitLogoInverse = $(".second-logo.sticky-state");
	    var wmLogoWhite = $(".main-nav__logo.first-logo.active-state");
		var wmLogoBlack = $(".main-nav__logo.first-logo.sticky-state");

		/* STICKY NAV AND WM LOGO SWAP FUNCTIONALITY */
		if (scroll >= 1 ) {
		    header.addClass("sticky");
		    mitLogoInactive.addClass("hide");
		    mitLogoInverse.removeClass("hide");	    
		    wmLogoWhite.addClass('hide');
		    wmLogoBlack.removeClass('hide');
		} else {
		    header.removeClass("sticky");
		    mitLogoInactive.removeClass("hide");
		    mitLogoInverse.addClass("hide");		    
		    wmLogoWhite.removeClass('hide');
		    wmLogoBlack.addClass('hide');
		}		

    });
		


 	var mobileMenu = $("#hamburgerButton");
    var mobileMenuBars = $("#hamburgerButton span");
	/* HAMBURGER CLICK RESETS MOBILE NAV */
    mobileMenu.click(function() {
    	mobileMenuBars.toggleClass('blue');
    	header.find(".sub-menu").removeClass("expand");
    	header.find(".is-open").removeClass("is-open");
    	header.find(".vertical").removeClass("active");
		header.find(".horizontal").removeClass("active");
		header.find(menuItem).removeClass("active");
    });



	var mobileWidth;
	var menuItem = $(".menu-item-has-children");
	

	mobileWidth = $(this).width() <= 768;    
	
	$(window).on('resize', function() {
	    mobileWidth = $(this).width() <= 768;
	    if (mobileWidth) {
	    	//do nothing
	    } else {
	    	$('.main-nav').removeClass('is-open');
	       	mobileMenuBars.removeClass('blue');
	       	menuItem.removeClass("active");
	       	menuItem.find(".sub-menu").removeClass("expand");
	       	menuItem.find(".is-open").removeClass("is-open");
	    }
	});

	 menuItem.click(function(){
	    if (mobileWidth) {
	        // do small window stuff
	    	/* MOBILE MENU/SUBMENU FUNCTIONALITY */
		    $(this).find(".sub-menu").toggleClass("expand");
		    $(this).toggleClass("active");
		    $(this).find(".vertical").toggleClass("active");
			$(this).find(".horizontal").toggleClass("active");
			$(this).siblings().removeClass("active");
		    $(this).siblings().find(".sub-menu").removeClass("expand");		
			$(this).siblings().find(".is-open").removeClass("is-open");
			$(this).siblings().find(".vertical").removeClass("active");
			$(this).siblings().find(".horizontal").removeClass("active");
		} else {
	        // do large window stuff
		    menuItem.find(".vertical").removeClass("active");
			menuItem.find(".horizontal").removeClass("active");
	    }
	});
	menuItem.hover(function() {
	  	if (mobileWidth) {
	  		//do nothing
	  	} else {
	  		$(this).find(".sub-menu").toggleClass("expand");
	  		$(this).toggleClass("active");
	  	}

	});

	if ( $('.page-template').hasClass('page-template-homepage') )  {
	 	
	 	/* SLICK SLIDERS ON HOMEPAGE */
	 	$('.home-hero-slider').slick({
	    	slidesToShow: 1,
	    	draggable: false,
	    	arrows: false,
	    	infinite: true,
	    	autoplay: true,
  			autoplaySpeed: 4000,
	    	asNavFor: '.home-slider-1,.home-slider-2'	
		});


	  	$('.home-slider-1').slick({
	    	slidesToShow: 3,	    
			focusOnSelect: true,
			draggable: false,
			arrows: false,
			asNavFor: '.home-hero-slider,.home-slider-2',
			nextArrow: '<img src="/wp-content/uploads/Icon-Left-Arrow.svg" class="left-arrow">' ,
			prevArrow: '<img src="/wp-content/uploads/Icon-Right-Arrow.svg" class="right-arrow">' ,
	    	responsive: [
			    {
				    breakpoint: 768,
				    settings: {
						arrows: true,
				        slidesToShow: 1
				    }
			    }
	  		]
		});


		$('.home-slider-2').slick({
	    	slidesToShow: 1,
	    	draggable: false,
	    	arrows: false,
	    	infinite: true, 		
	    	asNavFor: '.home-hero-slider, .home-slider-1'
		});


	  	$('.home-slider-4').slick({
	  		slidesToShow: 5,
	  		slidesToScroll: 1,
	  		arrows: true,
	    	nextArrow: '<img src="/wp-content/uploads/Icon-Left-Arrow.svg" class="left-arrow">' ,
	  		prevArrow: '<img src="/wp-content/uploads/Icon-Right-Arrow.svg" class="right-arrow">' ,
			responsive: [
			    {
			      	breakpoint: 768,
			      	settings: {
				        slidesToShow: 2,
		  				slidesToScroll: 1
			      	}
			    }
			]
		});

	}
		

	/* GLOBAL COMPONENTS */
	$('.manufacturers-slider').slick({
    	slidesToShow: 6,
    	slidesToScroll: 1,
    	centerMode: false,
  		focusOnSelect: true,
    	arrows: true,
    	autoplay: true,
    	autoplaySpeed: 2000,
    	nextArrow: '<img src="/wp-content/uploads/left-arrow-dark.png" class="left-arrow">' ,
  		prevArrow: '<img src="/wp-content/uploads/right-arrow-dark.png" class="right-arrow">' ,
  		responsive: [
	    	{
		      	breakpoint: 768,
		      	settings: {
		      		slidesToShow: 1,
		        	centerMode: true,
		        	arrows: false
		      	}
	    	}
  		]
	});

});