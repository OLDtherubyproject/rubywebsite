<?php

use App\Account;
use Illuminate\Database\Seeder;

class accounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Account::query()->delete();
        
        $data = [];
        
        for($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'name' => 'leohige',
                'email' => 'test@example.com',
                'password' => sha1('pass'),
                'secret' => '',
                'type' => 3,
                'premdays' => 0,
                'lastday' => 0,
                'created_at' => now(),
            ]);
        }
        
        Account::insert($data);
    }
}
