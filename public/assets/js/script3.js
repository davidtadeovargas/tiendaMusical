jQuery(document).on('click','.pagination a',function(e){

	e.preventDefault(); //prevenimos algun evento
	var page = jQuery(this).attr('href').split('page=')[1];//leemos el contenido del atributo href
	var route = window.location;//obtener url actual
	//console.log(page+" "+route);
	jQuery.ajax({
		url : route,
		data : {page : page},
		type : 'GET',
		dataType : 'json',
		success: function(data){
			jQuery(".productos").html(data);
		}
	});
	
});