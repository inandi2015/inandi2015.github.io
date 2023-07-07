jQuery(document).ready(function($) {

	$('.testimonial .testimonial-wrapper.owl-carousel').owlCarousel({
		loop:false,
		nav:false,
		items: 1,
		dots: true,
		autoplay: true,
		autoplayTimeout: 9000,
		autoplayHoverPause: true
	})

	$('.team .team-wrapper.owl-carousel').owlCarousel({
		loop:true,
		nav:true,
		margin: 30,
		dots: false,
		autoplay: true,
		autoplaySpeed: 1000,
		navSpeed: 1000,
		dotsSpeed: 1000,
		dragEndSpeed: 1000,
		responsive:{
			0:{
				items:1,
				margin: 0
			},
			575:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:4
			}
		}
	})

	// barfiller
	$('#bar1').barfiller({
		barColor: '#ffffff',
		tooltip: true,
		duration: 1000,
		animateOnResize: true,
		symbol: "%"
	});
	$('#bar2').barfiller({
		barColor: '#ffffff',
		tooltip: true,
		duration: 1000,
		animateOnResize: true,
		symbol: "%"
	});
	$('#bar3').barfiller({
		barColor: '#ffffff',
		tooltip: true,
		duration: 1000,
		animateOnResize: true,
		symbol: "%"
	});



});