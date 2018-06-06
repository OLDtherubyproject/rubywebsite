<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('owner_id')->unsigned()->unique();
            $table->string('motd');
            $table->timestamps();

            $table->foreign('owner_id')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');
        });

        DB::unprepared('CREATE TRIGGER `oncreate_guilds` AFTER INSERT ON `guilds`
                        FOR EACH ROW BEGIN
                            INSERT INTO `guild_ranks` (`name`, `level`, `guild_id`) VALUES ("the Leader", 3, NEW.`id`);
                            INSERT INTO `guild_ranks` (`name`, `level`, `guild_id`) VALUES ("a Vice-Leader", 2, NEW.`id`);
                            INSERT INTO `guild_ranks` (`name`, `level`, `guild_id`) VALUES ("a Member", 1, NEW.`id`);
                        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guilds');
        DB::unprepared('DROP TRIGGER IF EXISTS `oncreate_guilds`');
    }
}
