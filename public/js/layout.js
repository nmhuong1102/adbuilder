$(document).ready(function() {

	var $doc = $(document);

	$doc
	.on('click', '.ad-mosaic .product-item', function() {
		$(this).find(".info").addClass("show");
	})

	.on('click', '.btn-close', function() {
		$(this).parentsUntil(".info").parent().removeClass("show");
		return false;
	});
});