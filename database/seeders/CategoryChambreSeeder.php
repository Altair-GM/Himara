<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_chambres')->insert([
            [
                'nom' => 'SINGLE ROOM',
            ],
            [
                'nom' => 'DOUBLE ROOM',
            ],
            [
                'nom' => 'FAMILY ROOM',
            ],
            [
                'nom' => 'DELUXE ROOM',
            ],
        ]);
    }
}
