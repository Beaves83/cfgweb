<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Enlaces donde se suben las revistas.
class CreateEnlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlaces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('link')->comment('Ruta al recurso.');
            $table->unsignedBigInteger('revista_id');
            $table->unsignedBigInteger('tipoenlace_id');
            $table->timestamps();
            
            $table->foreign('revista_id')->references('id')->on('contenido');
            $table->foreign('tipoenlace_id')->references('id')->on('tipoenlaces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enlaces');
        
//        $table->foreign('tipoenlace_id')->references('id')->on('tipoenlaces')
//        ->onDelete('cascade');
    }
}
