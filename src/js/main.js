$(function() {

///////// Variables

var 
	html = $('html'),
	win = $( window ),
	hamburger = $('.hamburger');

///////// Loaded Class

win.on( 'load', function() {
	html.addClass( 'loaded' );
});

///////// Hamburger

hamburger.click(function(e){
	e.preventDefault();
	html.toggleClass('js-nav-open');
});

//////// Flickity

var flickityGallery = $( '.js-slider' );

flickityGallery.flickity({
	cellAlign: 'left',
	contain: true,
	autoPlay: 4500,
	pageDots: true,
	prevNextButtons: true,
	percentPosition: false,
	imagesLoaded: true
});

//////// Venobox

// $('.venobox').venobox(); 

//////// Sticky Footer

function stickyFooter() {
	var footerHeight = $("footer").height();
	$(".wrapper").css("padding-bottom", footerHeight);
	$("footer").css("margin-top", -footerHeight);
}
win.on( 'load resize', stickyFooter );

/*===============================================
IE 10
===============================================*/

if (navigator.userAgent.match('MSIE 10.0;')) {
  $('html').addClass('ie10');
}

if (Object.hasOwnProperty.call(window, "ActiveXObject") && !window.ActiveXObject) {
    $('html').addClass('ie11');
}

}); // jQuery