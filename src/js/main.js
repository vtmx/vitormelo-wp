// Remove no-js class of html element
document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'');

$(document).ready(function() {

	var $pathImg = window.location.href + 'wp-content/themes/vitormelo/img';


	// Animate scrolling
	// ----------------------------------------------------------------------------

	if (window.matchMedia('(min-width: 480px)').matches) {
		$('.container').addClass('hidden').viewportChecker({
			classToAdd: 'visible animation fade-in-up',
			offset: 100
		});
	}


	// Go to content
	// ----------------------------------------------------------------------------
	$('.skip-content, .to-content').click(function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $('#about').offset().top }, 'slow');
	});


	// Go to top
	$('.to-top').click(function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, 'slow');
	});


	// Slick
	// ----------------------------------------------------------------------------
	$('.carousel').slick({
		slidesToShow   : 4,
	    slidesToScroll : 4,
		speed          : 800,
		infinite       : false,
		dots           : true,
		autoplay       : true,
		autoplaySpeed  : 2000,
		accessibility  : true,

		responsive: [
		    {
		    	breakpoint: 1450,
		    	settings: {
			        slidesToShow: 3,
					slidesToScroll: 3
		    	}
		    },
			{
		    	breakpoint: 1100,
		    	settings: {
			        slidesToShow: 2,
					slidesToScroll: 2,
		    	}
		    },
		    {
				breakpoint: 800,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
     });
});
