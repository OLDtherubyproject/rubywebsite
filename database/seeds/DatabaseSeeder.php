<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(groups::class);
        $this->call(accounts::class);
        $this->call(characters::class);
        $this->call(games::class);
    }
}
