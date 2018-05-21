<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerNamelocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_namelocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id')->unsigned();
            $table->string('reason');
            $table->bigInteger('namelocked_at');
            $table->integer('namelocked_by')->unsigned();
            $table->timestamps();

            $table->foreign('player_id')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');

            $table->foreign('namelocked_by')
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
        Schema::dropIfExists('player_namelocks');
    }
}
