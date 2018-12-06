<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class documentacionController extends Controller
{
    public function getDocumento($documento)
    {
    	$cart = indexController::getCart();
        $cantidad = indexController::cantidad();
        $total = indexController::total();
    	return view('documentacion.'.$documento,compact('cart','cantidad','total'));
    }
}
