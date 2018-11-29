<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class lineasResourceController extends Controller
{

	public function categoriasPorLinea(Request $request, $linea, $categoria, $marca)
    {    
        $dominio = \tiendaMusical\configuraciones::getDominio();
        //----- < para el menu---------
        $lineas = \tiendaMusical\lineas::getLinea();        
        $categorias = \tiendaMusical\categorias::getCategorias();
        $productos = \tiendaMusical\productos::getProductos();
        //----- para el menu >---------    
    	$Categorias = \tiendaMusical\lineas::getCategoriasPorLinea($linea);
    	if($categoria != 'all')
    	{
    		$Productos = \tiendaMusical\productos::getProductosPorLineaCategoria($linea, $categoria);
    	}
        elseif ($marca != 'all') {
            $Productos = \tiendaMusical\productos::getProductosPorLineaMarca($linea, $marca);
        }
    	else
    	{
    		$Productos = \tiendaMusical\productos::getProductosPorLinea($linea);
    	}
    	//dd($productos);
        if($request->ajax())
        {
            return response()->json(view('productos',compact('dominio','lineas','categorias','productos','Categorias','linea','Productos'))->render());
        }
        $vista = view('lineas',compact('dominio','lineas','categorias','productos','Categorias','linea','Productos'));
        return $vista;
    }
}
