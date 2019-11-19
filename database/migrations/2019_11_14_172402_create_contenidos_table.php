<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Conteniene todo el cotenido de un post.
class CreateContenidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->bigIncrements('id');     
            $table->boolean('destacado')->default(false);
            $table->string('introduccion',5000);
            $table->string('titular', 500)->nullable();
            $table->string('titulo',500);       
            $table->double('nota', 8, 2)->nullable()->comment('Solo necesario si es un análisis.');  
            $table->string('texto',10000)->nullable();
            $table->unsignedBigInteger('tipocontenido_id');
            $table->unsignedBigInteger('imagen_id')->nullable();
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('visto')->default(0);
            $table->timestamps();
            
            $table->foreign('tipocontenido_id')->references('id')->on('tipocontenido');
            $table->foreign('imagen_id')->references('id')->on('imagenes');
            $table->foreign('autor_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenidos');
        
//        $table->foreign('contenido_id')->references('id')->on('tipocontenido')
//        ->onDelete('cascade');
//        $table->foreign('imagen_id')->references('id')->on('imagenes')
//        ->onDelete('cascade');
    }
}
