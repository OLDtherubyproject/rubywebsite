<?php

use App\Character;
use Illuminate\Database\Seeder;

class characters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Character::query()->delete();
        
        $data = [];
        
        for($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'name' => 'Leohige',
                'level' => 10,
                'experience' => 5000,
                'account_id' => 1,
                'group_id' => 1,
                'deletion' => 0,
                'balance' => 0,
            ]);
        }
        
        Character::insert($data);
    }
}
