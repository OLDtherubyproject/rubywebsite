<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuildRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guild_id')->unsigned();
            $table->string('name')->unique();
            $table->integer('level');
            $table->timestamps();

            $table->foreign('guild_id')
                  ->references('id')
                  ->on('guilds')
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
        Schema::dropIfExists('guild_ranks');
    }
}
