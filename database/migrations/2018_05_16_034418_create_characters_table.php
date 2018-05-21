<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('level')->unsigned();
            $table->bigInteger('experience')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->bigInteger('deletion');
            $table->bigInteger('balance');
            $table->timestamps();

            $table->foreign('account_id')
                  ->references('id')
                  ->on('accounts')
                  ->onDelete('cascade');

            $table->foreign('group_id')
                  ->references('id')
                  ->on('groups')
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
        Schema::dropIfExists('characters');
    }
}
