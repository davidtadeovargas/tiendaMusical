<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class carritoController extends Controller
{
    public function agregarProducto()
    {    	
    	//$producto = \tiendaMusical\productos::getProductosPorLineaCategoria($linea, $categoria);
    	$vista = view('carrito');
		return $vista;
    }
}
