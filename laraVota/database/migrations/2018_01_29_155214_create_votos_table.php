<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idOpcion')->unsigned();
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idOpcion')->references('id')->on('opciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votos');
    }
}
