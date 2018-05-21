<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerDeathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_deaths', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id')->unsigned();
            $table->integer('time');
            $table->integer('level');
            $table->integer('killed_by')->unsigned();
            $table->boolean('is_player');
            $table->string('mostdamage_by');
            $table->boolean('mostdamage_is_player');
            $table->boolean('unjustified');
            $table->boolean('mostdamage_unjustified');
            $table->timestamps();

            $table->foreign('player_id')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');

            $table->foreign('killed_by')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_deaths');
    }
}
