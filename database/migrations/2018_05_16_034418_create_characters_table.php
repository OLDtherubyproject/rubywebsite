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
            $table->integer('group_id')->unsigned()->default(3);
            $table->integer('level')->unsigned()->default(1);   
            $table->bigInteger('experience')->unsigned()->default(0);
            $table->integer('vocation')->default(1);
            $table->integer('health')->default(500);
            $table->integer('healthmax')->default(500);
            $table->integer('pokemon_capacity')->default(6);
            $table->integer('lookbody')->default(1);
            $table->integer('lookfeet')->default(1);
            $table->integer('lookhead')->default(1);
            $table->integer('looklegs')->default(1);
            $table->integer('looktype')->default(1);
            $table->integer('lookaddons')->default(0);
            $table->integer('maglevel')->default(0);
            $table->integer('town_id')->default(1);
            $table->integer('posx')->default(1);
            $table->integer('posy')->default(1);
            $table->integer('posz')->default(1);
            $table->binary('conditions')->nullable();
            $table->integer('cap')->default(1000);
            $table->integer('sex')->default(1);
            $table->bigInteger('lastlogin')->default(0);
            $table->integer('lastip')->default(0);
            $table->boolean('save')->default(true);
            $table->bigInteger('lastlogout')->default(0);
            $table->integer('blessings')->default(0);
            $table->integer('onlinetime')->default(0);
            $table->integer('stamina')->default(5000);
            $table->integer('skill_fist')->default(1);
            $table->integer('skill_fist_tries')->default(0);
            $table->integer('skill_club')->default(1);
            $table->integer('skill_club_tries')->default(0);
            $table->integer('skill_sword')->default(1);
            $table->integer('skill_sword_tries')->default(0);
            $table->integer('skill_axe')->default(1);
            $table->integer('skill_axe_tries')->default(0);
            $table->integer('skill_dist')->default(1);
            $table->integer('skill_dist_tries')->default(0);
            $table->integer('skill_shielding')->default(1);
            $table->integer('skill_shielding_tries')->default(0);
            $table->integer('skill_fishing')->default(1);
            $table->integer('skill_fishing_tries')->default(0);
            $table->bigInteger('deletion')->default(0);
            $table->bigInteger('balance')->default(0);
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

        DB::unprepared('CREATE TRIGGER `ondelete_characters` BEFORE DELETE ON `characters`
                        FOR EACH ROW BEGIN
                            UPDATE `houses` SET `owner` = 0 WHERE `owner` = OLD.`id`;
                        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
        DB::unprepared('DROP TRIGGER IF EXISTS `ondelete_characters`');
    }
}
