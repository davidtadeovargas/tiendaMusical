<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
    	$dominio = \tiendaMusical\configuraciones::getDominio();
        //----- < para el menu---------
        $lineas = \tiendaMusical\lineas::getLinea();        
        $categorias = \tiendaMusical\categorias::getCategorias();
        $productos = \tiendaMusical\productos::getProductos();
        //----- para el menu >---------
        //dd($productos);
    	return view('index',compact('dominio','lineas','categorias','marcas','productos'));
    }
}
