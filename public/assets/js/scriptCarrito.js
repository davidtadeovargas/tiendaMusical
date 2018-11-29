//---------------------------- insertar o restar cantidad ------------------------------------

jQuery(document).ready(function(){

		    jQuery('.qtyplus').click(function(){
		        fieldName = jQuery(this).attr('field');		        
		        var currentVal = parseInt(jQuery('input[fieldname='+fieldName+']').val());
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

		    jQuery(".update_item").click(function(e) {
		    	e.preventDefault();
		        var id = jQuery(this).data('id');
		        var href = jQuery(this).data('href');
		        var quantity = jQuery("#product_" + id).val();
		        window.location.href = href+"/"+quantity;
		    });
});