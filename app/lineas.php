<?php

namespace tiendaMusical;

use Illuminate\Database\Eloquent\Model;

use DB;

class lineas extends Model
{
    protected $table = 'lineas';

    public static function getLinea()
    {
        return $lineas = \tiendaMusical\lineas::all(); 
    }

    public static function getCategoriasPorLinea($linea)
    {
  		return DB::table('categorias')
	    ->join('lineas','lineas.id','=','categorias.linea')
	    ->where('lineas.linea', '=', $linea)
	    ->select('categorias.*', 'lineas.*')
	    ->get();
    }

	/*public static function getAllCategoriasPorLinea()
    {
        return DB::table('categorias')
        ->join('lineas','lineas.id','=','categorias.linea')
        ->select('categorias.*')
        ->get();
    }  */
}
