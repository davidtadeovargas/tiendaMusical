<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class cuentasController extends Controller
{
    public function showRegister()
    {
        $cart = indexController::getCart();
        $cantidad = indexController::cantidad();
        $total = indexController::total();
        $vista = view('auth.register',compact('cart','cantidad','total'));
        return $vista;
    }

    public function showLogin()
    {
        $cart = indexController::getCart();
        $cantidad = indexController::cantidad();
        $total = indexController::total();
        $vista = view('auth.login',compact('cart','cantidad','total'));
        return $vista;
    }
}
