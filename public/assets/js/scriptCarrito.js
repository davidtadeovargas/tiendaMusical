//---------------------------- insertar o restar cantidad ------------------------------------

jQuery(document).ready(function(){
		    jQuery('.qtyplus').click(function(){
		        fieldName = jQuery(this).attr('field');		        
		        var currentVal = parseInt(jQuery('input[fieldname='+fieldName+']').val());
		    	console.log(currentVal);		       
		        if (!isNaN(currentVal) && currentVal < 3) {
		            jQuery('input[fieldname='+fieldName+']').val(currentVal + 1);
		        } else {
		           jQuery('input[fieldname='+fieldName+']').val(3);
		        }
		    });
		    jQuery(".qtyminus").click(function() {
		        fieldName = jQuery(this).attr('field');
		        var currentVal = parseInt(jQuery('input[fieldname='+fieldName+']').val());
		        if (!isNaN(currentVal) && currentVal > 1) {
		            jQuery('input[fieldname='+fieldName+']').val(currentVal - 1);
		        } else {
		            jQuery('input[fieldname='+fieldName+']').val(1);
		        }
		    });
		});