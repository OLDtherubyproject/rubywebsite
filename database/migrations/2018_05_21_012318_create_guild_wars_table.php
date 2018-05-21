<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuildWarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_wars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guild1')->unsigned();
            $table->integer('guild2')->unsigned();
            $table->string('name1');
            $table->string('name2');
            $table->boolean('status');
            $table->bigInteger('started');
            $table->bigInteger('ended');
            $table->timestamps();

            $table->foreign('guild1')
                  ->references('id')
                  ->on('guilds')
                  ->onDelete('cascade');

            $table->foreign('guild2')
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
        Schema::dropIfExists('guild_wars');
    }
}
