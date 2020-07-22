<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categoria_repositorio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });



        Schema::create('repositorios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('contenido');
            $table->string('imagen');
            $table->foreignId('user_id')->references('id')->on('users')->comment('Usuario que diligencia la información');
            $table->foreignId('categoria_id')->index('categoria_id')->comment('Categoria de la información');
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
        Schema::dropIfExists('categoria_repositorio');
        Schema::dropIfExists('repositorios');
    }
}
