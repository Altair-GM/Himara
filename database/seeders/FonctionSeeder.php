<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fonctions')->insert([
            [
                'nom' => 'HOUSEKEEPER',
            ],
            [
                'nom' => 'RECEPTIONIST',
            ],
            [
                'nom' => 'CHEF',
            ],
            [
                'nom' => 'HOTEL MANAGER',
            ],
            [
                'nom' => 'ROOM SERVICE',
            ],
            [
                'nom' => 'MARKETING ADVISOR',
            ],
        ]);
    }
}
