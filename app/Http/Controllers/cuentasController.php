<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class cuentasController extends Controller
{
   public function show()
   {
		return view('accounts.cuentaNueva');   	
   }

   public function showLogin()
   {
		return view('accounts.login');   	
   }
}
