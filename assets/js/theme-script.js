var my_theme = my_theme || {};

my_theme.run = function($) {
	
	$(document).ready(function(){
		$('.search-toggle').on('click', function(e){
			e.preventDefault();
			$('.search-box').toggleClass('active');
		});
	});
	
	
}(jQuery);