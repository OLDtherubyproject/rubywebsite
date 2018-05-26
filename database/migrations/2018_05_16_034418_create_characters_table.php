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
            $table->integer('account_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->integer('level')->unsigned();   
            $table->bigInteger('experience')->unsigned();
            $table->integer('vocation');
            $table->integer('health');
            $table->integer('healthmax');
            $table->integer('pokemon_capacity');
            $table->integer('lookbody');
            $table->integer('lookfeet');
            $table->integer('lookhead');
            $table->integer('looklegs');
            $table->integer('looktype');
            $table->integer('lookaddons');
            $table->integer('maglevel');
            $table->integer('town_id');
            $table->integer('posx');
            $table->integer('posy');
            $table->integer('posz');
            $table->binary('conditions');
            $table->integer('cap');
            $table->integer('sex');
            $table->bigInteger('lastlogin');
            $table->integer('lastip');
            $table->boolean('save');
            $table->bigInteger('lastlogout');
            $table->integer('blessings');
            $table->integer('onlinetime');
            $table->integer('stamina');
            $table->integer('skill_fist');
            $table->integer('skill_fist_tries');
            $table->integer('skill_club');
            $table->integer('skill_club_tries');
            $table->integer('skill_sword');
            $table->integer('skill_sword_tries');
            $table->integer('skill_axe');
            $table->integer('skill_axe_tries');
            $table->integer('skill_dist');
            $table->integer('skill_dist_tries');
            $table->integer('skill_shielding');
            $table->integer('skill_shielding_tries');
            $table->integer('skill_fishing');
            $table->integer('skill_fishing_tries');
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
