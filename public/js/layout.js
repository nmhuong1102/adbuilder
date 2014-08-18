$(document).ready(function() {

	var $doc = $(document);

	$doc
	.on('click', '.product-item', function() {
		$(this).find(".info").addClass("show");
	})

	.on('click', '.btn-close', function() {
		$(this).parentsUntil(".info").parent().removeClass("show");
		return false;
	})

	.on('mouseover', '.ad-multiple .products-list .product-item', function() {
		$('.ad-multiple .product-item').removeClass('show');
		var prd = $(this).attr('data-product');
		console.log(prd);
		$(this).addClass('show');
		$('.ad-multiple .products-list-info').find('.' + prd).addClass('show');
	});
});