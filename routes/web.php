<?php

Route::get('/','indexController@index');
/*Route::get('{linea}/{categoria}', function($linea, $categoria){
	return $vista = view('pruebas',compact('linea','categoria'));
});*/
Route::get('{linea}/{categoria}/{marca}','lineasResourceController@categoriasPorLinea');
//Route::get('{producto}','carritoController@agregarProducto');