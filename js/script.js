// JavaScript Document

$(document).ready(function () {

	// $('.hero-name').mousemove(function(e){
	//   var rXP = (e.pageX - this.offsetLeft-$(this).width()/2);
	//   var rYP = (e.pageY - this.offsetTop-$(this).height()/2);
	//   $('.hero-name').css('text-shadow', +rYP/10+'px '+rXP/80+'px rgba(227,6,19,.8), '+rYP/8+'px '+rXP/60+'px rgba(255,237,0,1), '+rXP/70+'px '+rYP/12+'px rgba(0,159,227,.7)');
	// });

	// Theme switcher
	$('.theme-switch').click(function () {
		$("body").toggleClass("dark");
	});

	// Hamburger icon for mobile
	$('.hamburger').click(function () {
		console.log("Hamburgered");
		$(".top-nav").addClass("small-menu");
	});
	$('.close-menu').click(function () {
		console.log("Hamburger close");
		$(".top-nav").removeClass("small-menu");
	});

	$('.show-nav-bt').click(function () {
		console.log("Hamburgered");
		$(".nav").addClass("small-menu");
	});

	// To add active class in the top nav
	// var currentPage = $('.page-title a').text();
	// console.log(currentPage);
	// $(".top-nav li a:contains('" + currentPage + "')").addClass("active");

	// For tabs in about.php
	$('.tabs').tabslet({
		animation: true
	});

	// To prevent click in locked projects
	$('.work-locked-true').click(function (event) {
		event.preventDefault();
	})

	// For Projects Box, to hide the current page in the list
	$currentFileName = location.pathname.split('/').slice(-1)[0];
	// console.log($currentFileName);
	// $(".projects-box > ul li").has('a[href="'+ $currentFileName +'"]').css("display","none");
	$(".more-projects-neue > ul li").has('a[href="'+ $currentFileName +'"]').css("display","none");
		

	// Isotope  code
	// init Isotope
	var $grid = $('.gallery-isotope').isotope({
		itemSelector: '.isotope-item',
		percentPosition: true,
		masonry: {
			// use outer width of grid-sizer for columnWidth
			// columnWidth: 50
			gutter: 8
		}
	});

	// layout Isotope after each image loads
	$grid.imagesLoaded().progress(function () {
		$grid.isotope('layout');
	});

	// Code for Fancybox
	$('[data-fancybox="gallery"]').fancybox({
		protect: true, //simple image protection for images
		loop: true, // Enable infinite gallery navigation
		transitionEffect: "slide", // Transition effect between slides
		// preventCaptionOverlap: false,	// Should allow caption to overlap the content
	});

	// Code for Infinite Scroll
	// $('.gallery-isotope').infiniteScroll({
	//   // options
	//   path: '.pagination__next',
	//   append: '.isotope-item',
	//   history: false,
	// });
	// var totalPhotos = $(".isotope-item").length;
	console.log("इस पेज में " + $(".isotope-item").length + " तस्वीरें हैं।");



});

// To add page name, URL dynamically, and active class to top menu
var name;

function addPageName(name) {
	var pageURL = name.toLowerCase();
	if (name == 'Home') {
		pageURL = "#";
	} else {
		pageURL = pageURL + ".html";
	}

	$(".page-title > a").attr("href", pageURL);
	$(".page-title > a").text(name);

	// Adds active class in the nav
	$(".top-nav li a:contains('" + name + "')").addClass("active-nav");
}

// Photography page title is too long for small screen sizes
// This fixes it
var nameSmall;

function addPageNameSmall(nameSmall) {
	$(".page-title-small > a").text(nameSmall);

}