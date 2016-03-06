jQuery(document).ready(function($) {

// Init isotope
var $grid = $('.country-grid, .month-item').isotope({
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

$('.grid-control').on( 'click', '.input', function() {
  var $this = $(this);
  var thisFilter = $this.attr('data-filter');
  var isAll = thisFilter === 'everything';

  var countryFilter = $this.parents('.grid-control').attr('data-filter-group');
  var isCountry = countryFilter === 'country';

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
    $this.parents('.grid-control').children().removeClass('is-checked');
  }
  if ( !isAll  &&  !isCountry ) {
    $('.filter-select-all').removeClass('is-checked');
  }

  //hide inactive months
  var $months = $('.month-item');
  $months.each( function( i, month ) {
    var $month = $( month );
    var $newsList = $month.isotope({
      filter: comboFilter
    });

    var iso = $newsList.data('isotope');
    if ( iso.filteredItems.length ) {
      $month.show();
    } else {
      $month.hide();
    }
  });

  $grid.isotope();

});

//all sort buttons
$('.sort-name, .sort-size, .sort-month').click(function(e) {
  var sortValue = $(this).attr('data-sort-value');
  var isReversed = $(this).hasClass('sort-reverse');
  $grid.isotope({ sortBy: sortValue, sortAscending: isReversed });
  $(this).toggleClass('sort-reverse');
});

//sort by month button specifics
$('.sort-month').click(function(e) {
   $('.country-grid').fadeToggle();
   $('.month-grid').fadeToggle();
  $grid.isotope();
});


//combo filter function
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