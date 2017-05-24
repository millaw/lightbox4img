(function($) {
	$("body").append("<div class='silb_fade'></div>");

	$("img").filter(function(){
		return this.className.match(/\bwp-image-/);
	}).click(function() {
		$(this).toggleClass("silb_image");
		$(".silb_fade").toggleClass("silb_overlay");
	});
})(jQuery);