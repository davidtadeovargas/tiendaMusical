<?php

namespace tiendaMusical\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function show()
	{
		$vista = view('dashboard.index');
		return $vista;
	}
}
