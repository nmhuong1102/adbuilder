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

	.on('mouseover', '.ad_multiple .products-list .product-item', function() {

		$('.ad_multiple .product-item').removeClass('show');

		var prd = $(this).attr('data-product');
		$(this).addClass('show');
		$('.ad_multiple .products-list-info').find('.' + prd).addClass('show');
	})

	.on('mouseover', '.ad_zoom .products-list .product-item', function() {

		$('.ad_zoom .product-item').removeClass('show');
		
		var prd = $(this).attr('data-product');
		$(this).addClass('show');
		$('.ad_zoom .products-list-info').find('.' + prd).addClass('show');
	})

	.on('click', '.ad_slideshow .navigator .btn-nav', function() {
		var $this = $(this),
			$ad = $(this).parentsUntil('.ad_slideshow').parent(),
			count = $ad.find('ul.products-list li').length,
			curPos = $ad.find('.product-item.show').attr('data-product-pos'),
			prevPos, nextPos;

		$ad.find('.product-item').removeClass('show');

		if($this.hasClass('btn-prev')) {
			prevPos = (curPos + 1) % count;
			prevPos = (prevPos == 0) ? 3 : prevPos;
			$ad.find('.product-item-' + prevPos).addClass('show');
			
		} else if($this.hasClass('btn-next')) {
			nextPos = (curPos - 1) % count;
			nextPos = (nextPos == 0) ? 3 : nextPos;
			$ad.find('.product-item-' + nextPos).addClass('show');
		}
	})

	.on('click', '.ad_carrousel .navigator .btn-nav', function() {
		var $this = $(this),
			$ad = $(this).parentsUntil('.ad_carrousel').parent(),
			count = $ad.find('ul.products-list li').length,
			curPos = $ad.find('.product-item.show').attr('data-product-pos'),
			prevPos, nextPos;

		$ad.find('.product-item').removeClass('show');

		if($this.hasClass('btn-prev')) {
			prevPos = (curPos + 1) % count;
			prevPos = (prevPos == 0) ? 3 : prevPos;
			$ad.find('.product-item-' + prevPos).addClass('show');
			
		} else if($this.hasClass('btn-next')) {
			nextPos = (curPos - 1) % count;
			nextPos = (nextPos == 0) ? 3 : nextPos;
			$ad.find('.product-item-' + nextPos).addClass('show');
		}
	})

	.on('mouseover', '.ad_zoom .products-list-info .info-image', function() {

	})

	.on('change', '#format', function() {
		adDisplay();
	})

	.on('change', '#template', function() {
		adDisplay();
	});

	var adDisplay = function() {
		var format = $('#format').val(),
			template = $('#template').val(),
			cls = '.ad-wrapper.ad_' + format + '.ad_' + template,
			$ele = $(cls).parent();

		if(format == 'all') {
			cls = '.ad-wrapper.ad_' + format + '.ad_' + template
		}

		$('.ad-wrapper').parent().css({
			display: 'none'
		});

		$ele.css({
			display: 'block'
		});
	}
});