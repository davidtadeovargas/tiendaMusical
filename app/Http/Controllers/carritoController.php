<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;
use tiendaMusical\productos;

class carritoController extends Controller
{
	public function show()
	{
		$cart = indexController::getCart();
        $cantidad = indexController::cantidad();
        $total = indexController::total();
		$vista = view('carrito',compact('cart','total','cantidad'));
		return $vista;
	}

	public function add(productos $productos)
	{
		$cart = indexController::getCart();
		$productos->quantity = 1;
		$cart[$productos->articulo] = $productos;
		\Session::put('cart',$cart);
		return redirect()->route('cart-show');
	}

    public function delete(productos $productos)
    {
    	$cart = indexController::getCart();
    	unset($cart[$productos->articulo]);
    	\Session::put('cart',$cart);
		return redirect()->route('cart-show');
    }

    public function trash()
    {
    	\Session::forget('cart');
		return redirect()->route('home');
    }

    public function update(productos $productos, $quantity)
    {
    	$cart = indexController::getCart();
    	$cart[$productos->articulo]->quantity = $quantity;
    	\Session::put('cart',$cart);
		return redirect()->route('cart-show');
    }

    public function orderDetail()
    {
        if(count(\Session::get('cart')) <= 0) return redirect()->route('home');
        $cart = indexController::getCart();
        $cantidad = indexController::cantidad();
        $total = indexController::total();
        return view('details',compact('cart','cantidad','total'));
    }
}
