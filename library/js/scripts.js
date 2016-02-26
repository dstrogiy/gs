/*
 * Author: VCUarts
 *
 * javascripting all the things
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {



// init Isotope
var $grid = $('.country-grid').isotope({
  itemSelector: '.country-item'
});
  
// store filter for each group
var filters = [];

$('.grid-control').on( 'click', '.checkbox', function() {
  var $this = $(this);
  var newFilter = $this.attr('data-filter');
  var found = $.inArray(newFilter, filters);
  
  if (found >= 0) {
    // Element was found, remove it.
    filters.splice(found, 1);
  } else {
    // Element was not found, add it.
    filters.push(newFilter);
  }
  var filtersToString = filters + "";
  
  $grid.isotope({ filter: filtersToString });
  $this.toggleClass('is-checked');
});




}); /* end of as page load scripts */