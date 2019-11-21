import simpleParallax from 'simple-parallax-js';
$('.carousel').carousel({
    interval: 6000,
    pause: "false"
	});

var image = document.getElementsByClassName('paralax');
new simpleParallax(image,{
		delay: 0,
    orientation: 'down',
    scale: 1.3,
    overfow: true
});


 