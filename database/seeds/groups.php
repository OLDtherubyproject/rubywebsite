<?php

use App\Group;
use Illuminate\Database\Seeder;

class groups extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Group::query()->delete();
        
        $data = [];
        
        for($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'id' => 3,
                'name' => 'god',
                'flags' => 272730398714,
                'access' => 1,
                'maxdepotitems' => 0,
                'maxvipentries'   => 200
            ]);
        }
        
        Group::insert($data);
    }
}
