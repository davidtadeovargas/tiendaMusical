<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('articulo');
            $table->text('descripcion');
            $table->float('precio_u');
            $table->float('precio_m');          
            $table->integer('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('categorias');
            $table->integer('marca')->unsigned();
            $table->foreign('marca')->references('id')->on('marcas');
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
        Schema::dropIfExists('productos');
    }
}
