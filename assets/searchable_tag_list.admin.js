(function($) {
	/**
	 * Searchable Tag List
	 */
	$(document).ready(function() {
		var taglist = $(".field-taglist");
		var list = function(){
			var data = [];
			$('ul.tags li').each(function(){
				data.push($(this).text());
			});
			return data;
		}
		taglist.find('input').select2({tags:list()});
		taglist.find('ul.tags').hide();
		
	});
})(jQuery.noConflict());