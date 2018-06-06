<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('secret')->nullable();
            $table->string('recovery_key')->unique()->nullable();
            $table->integer('avatar')->default(1);
            $table->integer('type')->default(0);
            $table->integer('premdays')->default(0);
            $table->integer('lastday')->nullable();
            $table->integer('points')->default(0);
            $table->integer('points_spent')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
