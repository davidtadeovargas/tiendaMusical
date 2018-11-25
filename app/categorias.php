<?php

namespace tiendaMusical;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $table = 'categorias';

    public static function getCategorias()
    {
    	return $categorias = \tiendaMusical\categorias::all();
    }
}
