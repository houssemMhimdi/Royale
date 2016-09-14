(function($) {
	'use strict'

	$(document).ready(function(){
				//Checkbox. 
				$('body').delegate('.paca_checkbox_vc','click',function(){
					var checkbox = $(this).find('.paca_checkbox_field:checked')
					if(checkbox.length){
						$(this).find('.paca_checkbox_field').val('true');
					}else{
						$(this).find('.paca_checkbox_field').val('false');
					}
				});


	});


	
})( jQuery );