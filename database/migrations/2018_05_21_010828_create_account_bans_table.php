<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_bans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->unsigned();
            $table->string('reason');
            $table->bigInteger('banned_at');
            $table->bigInteger('expires_at');
            $table->integer('banned_by')->unsigned();
            $table->timestamps();

            $table->foreign('account_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('banned_by')
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
        Schema::dropIfExists('account_bans');
    }
}
