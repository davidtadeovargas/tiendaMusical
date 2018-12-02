<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class lineasResourceController extends Controller
{

	public function categoriasPorLinea(Request $request, $linea, $categoria, $marca)
    {  
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
            return response()->json(view('productos',compact('Categorias','linea','Productos'))->render());
        }
        $vista = view('lineas',compact('Categorias','linea','Productos'));
        return $vista;
    }

    public function getSearch(Request $request)
    {
        $Productos = \tiendaMusical\productos::getSearchProductos($request->get('q'));
        $linea = "Resultados de búsqueda para "."'".$request->get('q')."'";
        $Categorias = null;
        //dd($Productos);
        if((count($Productos)))
        {
            $vista = view('lineas',compact('Categorias','linea','Productos'));
        }
        else
        {
            $vista = view('errors.sin_resultados',compact('linea'));
        }
        return $vista;
    }
}
