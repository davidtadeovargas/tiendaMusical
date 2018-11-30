<?php

namespace tiendaMusical;

use Illuminate\Database\Eloquent\Model;
use DB;

class productos extends Model
{
    protected $table = 'productos';

    public static function getAllProductos()
    {
        return $productos = \tiendaMusical\productos::all();
    }

    public static function getProductoByArticulo($articulo)
    {
        return $producto = \tiendaMusical\productos::where('articulo', $articulo)->get();
    }

    public static function getProductosPorLinea($linea, $limit = 8)
    {
    	$productos = DB::table('productos')
        ->join('categorias','categorias.id','=','productos.categoria')
        ->join('marcas','marcas.id','=','productos.marca')
        ->join('lineas','lineas.id','=','categorias.linea')
        ->where('lineas.linea', '=', $linea)
        ->orderBy('productos.nombre', 'asc')
        ->select('productos.articulo','productos.nombre as nombre','productos.precio_u as precio', 'marcas.marca as marca','lineas.linea as linea','categorias.categoria as categoria')
        ->paginate($limit);

        return $productos;
    }

    public static function getProductosPorLineaCategoria($linea, $categoria, $limit = 8)
    {
        $productos = DB::table('productos')
        ->join('categorias','categorias.id','=','productos.categoria')
        ->join('marcas','marcas.id','=','productos.marca')
        ->join('lineas','lineas.id','=','categorias.linea')
        ->where('lineas.linea', '=', $linea)
        ->where('categorias.categoria', '=', $categoria)
        ->orderBy('productos.nombre', 'asc')
        ->select('productos.articulo','productos.nombre as nombre','productos.precio_u as precio', 'marcas.marca as marca','lineas.linea as linea','categorias.categoria as categoria')
        ->paginate($limit);

        return $productos;
    }

    public static function getProductosPorLineaMarca($linea, $marca, $limit = 8)
    {
        $productos = DB::table('productos')
        ->join('categorias','categorias.id','=','productos.categoria')
        ->join('marcas','marcas.id','=','productos.marca')
        ->join('lineas','lineas.id','=','categorias.linea')
        ->where('lineas.linea', '=', $linea)
        ->where('marcas.marca', '=', $marca)
        ->orderBy('productos.nombre', 'asc')
        ->select('productos.articulo','productos.nombre as nombre','productos.precio_u as precio', 'marcas.marca as marca','lineas.linea as linea','categorias.categoria as categoria')
        ->paginate($limit);

        return $productos;
    }

    public static function getProductos()
    {
        $productos = DB::table('productos')
        ->join('marcas','marcas.id','=','productos.marca')
        ->join('categorias','categorias.id','=','productos.categoria')
        ->join('lineas','lineas.id','=','categorias.linea')
        ->orderBy('marcas.id', 'asc')
        ->select('marcas.descripcion as marca','productos.marca as idMarca','categorias.descripcion as categoria','categorias.id as idCat','lineas.descripcion as linea','lineas.id as idLinea')
        ->get();

        return $productos;
    }
}
