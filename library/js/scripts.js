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
  itemSelector: '.country-item',
  getSortData: {
    name: function( itemElem ) {
      var name = $('.country-name', itemElem).text();
      return name.replace(/[^a-zA-Z]+/g, '');
    },
    size: function( itemElem ) {
      var size = $('.number', itemElem).text();
      return Number(size.replace(/[^\d\.\-]/g, ""));
    },
    month: '.country-month'
  }
});
  
// store filter for each group
var filters = {};

$('.grid-control').on( 'click', '.checkbox', function() {
  var $this = $(this);
  var thisFilter = $this.attr('data-filter');
  var isAll = thisFilter === 'all';

  var group = $this.parents('.grid-control').attr('data-filter-group');
  // create array for filter group, if not there yet
  var filterGroup = filters[ group ];
  if ( !filterGroup ) {
    filterGroup = filters[ group ] = [];
  }

  if ( isAll ) {
    delete filters[ group ];
  }

  // index of
  var index = $.inArray( thisFilter, filterGroup );
  if ( !isAll && index === -1 ) {
    // add filter to group
    filters[ group ].push( thisFilter );
  } else if ( !isAll ) {
    filters[ group ].splice( index, 1 );
  }

  
  var comboFilter = getComboFilter( filters );

  $grid.isotope({ filter: comboFilter });
  $this.toggleClass('is-checked');
  if ( isAll ) {
    $this.parents('.grid-control').children().addClass('is-checked');
  }
});

$('.sort-name, .sort-size, .sort-month').click(function(e) {
  var sortValue = $(this).attr('data-sort-value');
  var isReversed = $(this).hasClass('sort-reverse');
  $grid.isotope({ sortBy: sortValue, sortAscending: isReversed });
  $(this).toggleClass('sort-reverse');
});


function getComboFilter( filters ) {
  var i = 0;
  var comboFilters = [];

  for ( var prop in filters ) {
    var filterGroup = filters[ prop ];
    // skip to next filter group if it doesn't have any values
    if ( !filterGroup.length ) {
      continue;
    }
    if ( i === 0 ) {
      // copy to new array
      comboFilters = filterGroup.slice(0);
    } else {
      var filterSelectors = [];
      // copy to fresh array
      var groupCombo = comboFilters.slice(0); // [ A, B ]
      // merge filter Groups
      for (var k=0, len3 = filterGroup.length; k < len3; k++) {
        for (var j=0, len2 = groupCombo.length; j < len2; j++) {
          filterSelectors.push( groupCombo[j] + filterGroup[k] ); // [ 1, 2 ]
        }

      }
      // apply filter selectors to combo filters for next group
      comboFilters = filterSelectors;
    }
    i++;
  }

  var comboFilter = comboFilters.join(', ');
  return comboFilter;
}


}); /* end of as page load scripts */