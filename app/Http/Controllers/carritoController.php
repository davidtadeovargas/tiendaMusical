<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;
use tiendaMusical\productos;

class carritoController extends Controller
{

	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart', array());
	}

	public function show()
	{
		$dominio = \tiendaMusical\configuraciones::getDominio();
        //----- < para el menu---------
        $lineas = \tiendaMusical\lineas::getLinea();        
        $categorias = \tiendaMusical\categorias::getCategorias();
        $productos = \tiendaMusical\productos::getProductos();
        //----- para el menu >---------
		$cart = \Session::get('cart');
		$total = $this->total();
		$vista = view('carrito',compact('dominio','lineas','categorias','productos','cart','total'));
		return $vista;
	}

	public function add(productos $productos)
	{
		$cart = \Session::get('cart');
		$productos->quantity = 1;
		$cart[$productos->articulo] = $productos;
		\Session::put('cart',$cart);
		return redirect()->route('cart-show');
	}

    public function delete(productos $productos)
    {
    	$cart = \Session::get('cart');
    	unset($cart[$productos->articulo]);
    	\Session::put('cart',$cart);
		return redirect()->route('cart-show');
    }

    public function trash()
    {
    	\Session::forget('cart');
		return redirect()->route('cart-show');
    }

    public function update(productos $productos, $quantity)
    {
    	$cart = \Session::get('cart');
    	$cart[$productos->articulo]->quantity = $quantity;
    	\Session::put('cart',$cart);
		return redirect()->route('cart-show');
    }

    private function total()
    {
    	$cart = \Session::get('cart');
    	$total = 0;
    	foreach ($cart as $item) 
    	{
    		$total += $item->precio_u * $item->quantity;
    	}
    	return $total;
    }
}
