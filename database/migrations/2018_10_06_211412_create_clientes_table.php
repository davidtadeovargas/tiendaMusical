<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('CLIENTE');
            $table->text('NOMBRE');
            $table->text('CALLE');
            $table->text('COLONIA');
            $table->text('POBLA');
            $table->text('CIUDAD');
            $table->text('ESTADO');
            $table->text('PAIS');
            $table->string('TELEFONO',15);
            $table->float('DIAS');
            $table->string('RFC',30);
            $table->float('PRECIO');
            $table->integer('CP');
            $table->text('ZONA');
            $table->text('CORREO');
            $table->integer('MAYORISTA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
