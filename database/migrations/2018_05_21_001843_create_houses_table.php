<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner')->unsigned();
            $table->integer('town_id')->unsigned();
            $table->integer('paid');
            $table->integer('warnings');
            $table->string('name');
            $table->integer('rent');
            $table->integer('bid');
            $table->integer('bid_end');
            $table->integer('last_bid');
            $table->integer('highest_bidder');
            $table->integer('size');
            $table->integer('beds');
            $table->timestamps();

            $table->foreign('owner')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');

            $table->foreign('town_id')
                  ->references('id')
                  ->on('towns')
                  ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
