/*
	Flaunt.js v1.0.0
	by Todd Motto: http://www.toddmotto.com
	Latest version: https://github.com/toddmotto/flaunt-js
	
	Copyright 2013 Todd Motto
	Licensed under the MIT license
	http://www.opensource.org/licenses/mit-license.php

	Flaunt JS, stylish responsive navigations with nested click to reveal.

	Mofified for use by Drupal 7 and Jquery 1.4.4
	by Mike Herchel http://herchel.com
*/
(function () {

;(function($) {

	// DOM ready
	$(function() {
		
		// Append the mobile icon nav
		$('#block-system-main-menu').append($('<div class="nav-mobile"></div>'));
		
		// Add a <span> to every .nav-item that has a <ul> inside
		$('#block-system-main-menu .expanded').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
		
		// Click to reveal the nav
		$('.nav-mobile').click(function(){

			// Show the mobile navigation
			$('#block-system-main-menu > .menu').slideToggle();

			// Add/remove the nav-mobile-active class
			$('.nav-mobile').toggleClass('nav-mobile-active');
		});
	
		// Dynamic binding to on 'click'

		//  Removed method that requires Jquery 1.5 and replaced with method that works in 1.4 for Drupal
		//  $('#block-system-main-menu > .menu').on('click', '.nav-click', function(){
			
			$('#block-system-main-menu > .menu .nav-click').click(function(){

			// Add/remove the nav-click-active class
			$('.nav-click').toggleClass('nav-click-active');

			// Toggle the nested nav
			$(this).siblings('#block-system-main-menu .menu li .menu').slideToggle();
			
			// Toggle the arrow using CSS3 transforms
			$(this).children('.nav-arrow').toggleClass('nav-rotate');
			
		});
	    
	});
	
})(jQuery);
}());