<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart', array());
	}

    public static function getCart()
    {
        $cart = \Session::get('cart');
        return $cart;
    }

    public static function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item) 
        {
            $total += $item->precio_u * $item->quantity;
        }
        return $total;
    }

    public static function cantidad()
    {
        $cart = \Session::get('cart');
        $cantidad = 0;
        foreach ($cart as $item) 
        {
            $cantidad += $item->quantity;
        }
        return $cantidad;
    }

    public function index()
    {
        $cart = $this->getCart();
        $cantidad = $this->cantidad();
        $total = $this->total();
        $nuevos = \tiendaMusical\productos::getProductosNuevos();
        $destacados = \tiendaMusical\productos::getProductosDestacados();
    	return view('index',compact('nuevos','destacados','cart','cantidad','total'));
    }
}
