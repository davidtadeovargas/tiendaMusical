<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class lineasResourceController extends Controller
{

	public function categoriasPorLinea(Request $request, $linea, $categoria, $marca)
    {  
        $cart = indexController::getCart();
        $cantidad = indexController::cantidad();
        $total = indexController::total();

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
        if($request->ajax())
        {
            return response()->json(view('productos',compact('Categorias','linea','Productos','cart','cantidad','total'))->render());
        }
        $vista = view('lineas',compact('Categorias','linea','Productos','cart','cantidad','total'));
        return $vista;
    }

    public function getSearch(Request $request)
    {
        $cart = indexController::getCart();
        $cantidad = indexController::cantidad();
        $total = indexController::total();

        $Productos = \tiendaMusical\productos::getSearchProductos($request->get('q'));
        $linea = "Resultados de búsqueda para "."'".$request->get('q')."'";
        $Categorias = null;
        if((count($Productos)))
        {
            $vista = view('lineas',compact('Categorias','linea','Productos','cart','cantidad','total'));
        }
        else
        {
            $vista = view('errors.sin_resultados',compact('linea','cart','cantidad','total'));
        }
        return $vista;
    }
}
