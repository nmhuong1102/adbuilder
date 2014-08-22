function AdBuilder(params) {
	Builder = this;
	Builder.templates = [];
}


// function AdBuilder (params) {
// 	var $body = $(body),
// 		Builder = this,
// 		readyQ = [];

// 	Builder.templates = [];

// 	function AdTemplate (json, raw) {
		
// 		var Template = $.extend(this, json.creative);

// 		Template.json = raw;

// 		Template.format = [Template.width, Template.height].join("x");


// 	}	

// 	Builder.isReady = false;

// 	Builder.onReady = function(fn) {
// 		(!Builder.isReady) ? readyQ.push(fn) : fn();
// 	}

// 	function render() {
// 		var $container = $(params.container),
// 			templates = Builder.templates;

		
// 	}
// }