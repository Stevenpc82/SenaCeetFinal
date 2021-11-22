<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('apellido');
            $table->String('correo');
            $table->String('genero');
            $table->biginteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users');

            $table->biginteger('_instructor_id')->unsigned()->nullable();
            $table->foreign('_instructor_id')->references('id')->on('_instructor');

            $table->biginteger('guide_id')->unsigned()->nullable();
            $table->foreign('guide_id')->references('id')->on('guide');

            $table->biginteger('ficha_id')->unsigned();
            $table->foreign('ficha_id')->references('id')->on('ficha');
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
        Schema::dropIfExists('apprentices');
    }
}
