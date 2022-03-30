<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_rooms')->insert([
            [
                "nom"=>"Travel",

            ],

            [
                "nom"=>"Rooms"

            ],
            [
                "nom"=>"Rooms"

            ],
            [
                "nom"=>"Holidays"

            ],
            [
                "nom"=>"Travel"

            ],
            [
                "nom"=>"Events"

            ],
        ]);
    }
    }


// الله
//  إيكمال

//  بالخير