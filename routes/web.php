<?php

Route::get('/','indexController@index');

Route::get('/home', [
	'as' => 'home',
	'uses' => 'indexController@index'
]);

Route::get('/{documentacion}','documentacionController@getDocumento');

Route::get('/contacto',['as' => 'contacto', function(){
	return view('contacto');
}]);


Route::get('/account/register', [
	'as' => 'account-register',
	'uses' => 'cuentasController@showRegister'
]);

Route::get('/account/login', [
	'as' => 'account-login',
	'uses' => 'cuentasController@showLogin'
]);




Route::get('/{linea}/{categoria}/{marca}', [
	'as' => 'lineas',
	'uses' => 'lineasResourceController@categoriasPorLinea'
]);

Route::get('/resultados/busqueda', [
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
