$(document).ready(function () {
    $('img.thumbnail').imgZoom();
  });



// init Masonry
var $grid = $('.grid').masonry({
	// options...
	itemSelector: '.grid-item',
	isFitWidth: true,
	columnWidth: 1
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});
