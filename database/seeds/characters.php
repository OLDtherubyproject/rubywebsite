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
                'level' => 1,
                'experience' => 0,
                'account_id' => 1,
                'group_id' => 3,
                'deletion' => 0,
                'balance' => 0,
                'vocation' => 1,
                'health' => 150,
                'healthmax' => 150,
                'pokemon_capacity' => 0,
                'lookbody' => 1,
                'lookhead' => 1,
                'lookfeet' => 1,
                'looklegs' => 1,
                'looktype' => 1,
                'lookaddons' => 0,
                'maglevel' => 0,
                'town_id' => 1,
                'posx' => 800,
                'posy' => 800,
                'posz' => 7,
                'cap' => 0,
                'sex' => 1,
                'lastlogin' => 0,
                'lastip' => 0,
                'save' => true,
                'lastlogout' => 0,
                'blessings' => 0,
                'onlinetime' => 0,
                'stamina' => 0,
                'skill_fist' => 1,
                'skill_fist_tries' => 1,
                'skill_club' => 1,
                'skill_club_tries' => 1,
                'skill_sword' => 1,
                'skill_sword_tries' => 1,
                'skill_axe' => 1,
                'skill_axe_tries' => 1,
                'skill_dist' => 1,
                'skill_dist_tries' => 1,
                'skill_shielding' => 1,
                'skill_shielding_tries' => 1,
                'skill_fishing' => 1,
                'skill_fishing_tries' => 1
            ]);
        }
        
        Character::insert($data);
    }
}
