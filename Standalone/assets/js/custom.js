/* Custom codes */

// iPhone pull addressbar
/mobile/i.test(navigator.userAgent) && !window.location.hash && setTimeout(function () {
  window.scrollTo(0, 1);
}, 1000);



// Mobile dropdown menu
$(function() {
$("<select />").appendTo(".nav-hover-box"); 

$("<option />", 
{ 
   "selected": "selected", 
   "value"   : "", 
   "text"    : "Site Menu" // default <option> to display in dropdown 

}).appendTo("nav select"); 

$("nav a").each(function()
{ 
 var el = $(this); 
 $("<option />", { 
	 "value"   : el.attr("href"), 
	 "text"    : el.text() 
 }).appendTo("nav select"); 
});

$("nav select").change(function() 
{ 
  window.location = $(this).find("option:selected").val(); 
}); });



// Menu Sublevel Indicator
//	  	jQuery(function($){
//	    		$('.menu li:has(".sub-menu")').addClass('has-sub-menu');
//	  		});



// Menu Last Child Addition
				/* <![CDATA[ */
				jQuery(document).ready( function($) {
					$('.menu > li:first-child').addClass('first-item');
					$('.menu > li:last-child').addClass('last-item');
					} );
				/* ]]> */

	
// Bootstrap Tooltip
	  jQuery(document).ready(function () {
	    $("[rel=tooltip]").tooltip();
	  });

	
// Bootstrap Popover
	  jQuery(document).ready(function () {
	    $("[rel=popover]").popover();
	  });


// Bootstrap Affix
		$(function(){
		$('.bs-docs-sidenav').affix({
			offset: {
			top: 120, 
			bottom: 1500
				}
			})
		});


// Bootstrap Carousel	
		jQuery(document).ready(function() {
			 $('#myCarousel-auto').carousel({
				   interval: 5000,
					  cycle: true
			 });
		});
		var $ = jQuery.noConflict();


//Fixed Submenu
	jQuery(document).scroll(function(){
		// If has not activated (has no attribute "data-top"
		if (!$('.subnav').attr('data-top')) {
			// If already fixed, then do nothing
			if ($('.subnav').hasClass('subnav-fixed')) return;
			// Remember top position
			var offset = $('.subnav').offset()
			$('.subnav').attr('data-top', offset.top);
		}
	
		if ($('.subnav').attr('data-top') - $('.subnav').outerHeight() <= $(this).scrollTop())
			$('.subnav').addClass('subnav-fixed');
		else
			$('.subnav').removeClass('subnav-fixed');
	});



/*
//Scroll to top Button
$(document).ready(function(){

	// hide #back-top first
	jQuery("#back-top").hide();

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 1000) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
*/

// Tour
  $(window).load(function() {
	   $(this).featureTour({
	  'cookieMonster': true,           // true/false for whether cookies are used
	  'cookieName': 'myHomepageTour',  // choose your own cookie name
	  'cookieDomain': false,           // set to false or yoursite.com
	  'tipContent': '#tour_content',    // The ID of the <ol> used for content
	  'postRideCallback': $.noop,      // A method to call once the tour closes
	  'postStepCallback': $.noop,      // A method to call after each step
	  'nextOnClose': false,            // If cookies are enabled, increment the current step on close
	  'debug': false
	  });
  });

