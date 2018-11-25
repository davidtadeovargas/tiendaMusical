<?php

namespace tiendaMusical;

use Illuminate\Database\Eloquent\Model;

use DB;

class marcas extends Model
{
    protected $table = 'marcas';

    public static function getMarcas()
    {
        return $marcas = \tiendaMusical\marcas::all(); 
    }
}
