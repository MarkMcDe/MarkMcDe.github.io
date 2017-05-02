$(function() {
    

$(".slidetabs").tabs(".images > div", {

	// enable "cross-fading" effect
	effect: 'fade',
	fadeOutSpeed: 400,
        fadeInSpeed: 400,


	// start from the beginning after the last tab
	rotate: true

// use the slideshow plugin. It accepts its own configuration
}).slideshow({autoplay: true, interval: 10000});

});






















