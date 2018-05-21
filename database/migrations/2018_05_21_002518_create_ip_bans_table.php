<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_bans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ip')->unique();
            $table->string('reason');
            $table->bigInteger('banned_at');
            $table->bigInteger('expires_at');
            $table->integer('banned_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('banned_by')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ip_bans');
    }
}
