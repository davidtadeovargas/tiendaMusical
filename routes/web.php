<?php

Route::get('/','indexController@index');

Route::get('/home', [
	'as' => 'home',
	'uses' => 'indexController@index'
]);

Route::get('/preguntas-frecuentes',['as' => 'preguntas',function(){
	return view('documentacion.preguntas');
}]);

Route::get('/about',['as' => 'about', function(){
	return view('documentacion.about');
}]);

Route::get('/terminos-uso',['as' => 'terminos-uso', function(){
	return view('documentacion.terminos_uso');
}]);

Route::get('/terminos-condiciones',['as' => 'terminos-condiciones', function(){
	return view('documentacion.terminos_condicion');
}]);

Route::get('/forma-pago',['as' => 'forma_pago', function(){
	return view('documentacion.formas_pago');
}]);

Route::get('/aviso-privacidad',['as' => 'aviso_privacidad', function(){
	return view('documentacion.aviso_privacidad');
}]);

Route::get('/terminos-condiciones',['as' => 'terminos-condiciones', function(){
	return view('documentacion.terminos_condicion');
}]);

Route::get('/politicas',['as' => 'politicas', function(){
	return view('documentacion.politicas');
}]);

Route::get('/terminos-condiciones',['as' => 'terminos-condiciones', function(){
	return view('documentacion.terminos_condicion');
}]);

Route::get('/forma-compra',['as' => 'forma_compra', function(){
	return view('documentacion.forma_compra');
}]);

Route::get('/contacto',['as' => 'contacto', function(){
	return view('contacto');
}]);







Route::get('{linea}/{categoria}/{marca}', [
	'as' => 'lineas',
	'uses' => 'lineasResourceController@categoriasPorLinea'
]);

Route::get('busqueda', [
	'as' => 'busqueda',
	'uses' => 'lineasResourceController@getSearch'
]);






Route::bind('articulo',function($articulo){
	return \tiendaMusical\productos::where('articulo', $articulo)->first();
});
// carrito ------>
Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'carritoController@show'
]);

Route::get('cart/add/productos/{articulo}', [
	'as' => 'cart-add',
	'uses' => 'carritoController@add'
]);

Route::get('cart/delete/productos/{articulo}', [
	'as' => 'cart-delete',
	'uses' => 'carritoController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'carritoController@trash'
]);

Route::get('cart/update/{articulo}/{quantity?}', [
	'as' => 'cart-update',
	'uses' => 'carritoController@update'
]);

//nota: verifica antes de mostrar el detalle de la compra si hay una session iniciada gracias al middleware auth
Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'carritoController@orderDetail'
]);
// <------ carrito

Auth::routes();

//Route::get('/home', 'HomeController@index');
