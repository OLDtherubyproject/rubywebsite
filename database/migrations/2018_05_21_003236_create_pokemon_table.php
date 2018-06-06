<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pokeball');
            $table->string('type');
            $table->boolean('shiny');
            $table->string('nickname');
            $table->integer('gender');
            $table->integer('nature');
            $table->integer('hpnow');
            $table->integer('hp');
            $table->integer('atk');
            $table->integer('def');
            $table->integer('speed');
            $table->integer('spatk');
            $table->integer('spdef');
            $table->binary('conditions');
            $table->binary('moves');
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
        Schema::dropIfExists('pokemon');
    }
}
