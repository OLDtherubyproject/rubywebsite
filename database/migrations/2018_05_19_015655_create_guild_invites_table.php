<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuildInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_invites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id')->unsigned();
            $table->integer('guild_id')->unsigned();
            $table->timestamps();

            $table->foreign('character_id')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('guild_invites');
    }
}
