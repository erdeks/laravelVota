<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idEncuesta')->unsigned();
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idEncuesta')->references('id')->on('encuestas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acceso');
    }
}
