<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuildMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_memberships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id')->unsigned();
            $table->integer('guild_id')->unsigned();
            $table->integer('guild_rank_id')->unsigned();
            $table->string('nick');
            $table->timestamps();

            $table->foreign('character_id')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');

            $table->foreign('guild_id')
                  ->references('id')
                  ->on('guilds')
                  ->onDelete('cascade');

            $table->foreign('guild_rank_id')
                  ->references('id')
                  ->on('guild_ranks')
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
        Schema::dropIfExists('guild_memberships');
    }
}
