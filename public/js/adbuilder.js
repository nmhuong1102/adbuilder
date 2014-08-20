function AdBuilder (params) {
	var $body = $(body),
		Builder = this,
		readyQ = [];

	Builder.templates = [];

	function AdTemplate (json, raw) {
		
		var Template = $.extend(this, json.creative);

		Template.json = raw;

		Template.format = [Template.width, Template.height].join("x");


	}	

	function render() {
		var $container = $(params.container);

		
	}
}