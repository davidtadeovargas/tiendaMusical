<?php

namespace tiendaMusical;

use Illuminate\Database\Eloquent\Model;

class configuraciones extends Model
{
    public static function getDominio()
    {
    	$dominio = "http://localhost:8000";
    }
}
