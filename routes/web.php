<?php

Route::get('/','indexController@index');

Route::get('/home', [
	'as' => 'home',
	'uses' => 'indexController@index'
]);

Route::get('{linea}/{categoria}/{marca}', [
	'as' => 'lineas',
	'uses' => 'lineasResourceController@categoriasPorLinea'
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

// <------ carrito
Auth::routes();

//Route::get('/home', 'HomeController@index');
