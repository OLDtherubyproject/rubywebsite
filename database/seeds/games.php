<?php

use App\Game;
use Illuminate\Database\Seeder;

class games extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Game::query()->delete();
        
        $data = [];
        
        for($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'key' => 'characters_record',
                'value' => 0
            ]);
        }
        
        Game::insert($data);
    }
}
