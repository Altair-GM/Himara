<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            [
                'url'=>'images/slider/slider1.jpg',
            ],
            [
                'url'=>'images/slider/slider13.jpg',
            ],
            [
                'url'=>'images/slider/slider3.jpg',
            ],
        ]);
    }
}
