<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'nom' => 'Spa',
                'image' => "images/services/spa.jpg",
                'icon' => "flaticon-screen-1",
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",
            ],
            [
                'nom' => 'Spa',
                'image' => "images/services/spa.jpg",
                'icon' => "flaticon-screen-1",
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",
            ],
            [
                'nom' => 'Spa',
                'image' => "images/services/spa.jpg",
                'icon' => "flaticon-screen-1",
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",
            ],
            [
                'nom' => 'Spa',
                'image' => "images/services/spa.jpg",
                'icon' => "flaticon-screen-1",
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",
            ],
        ]);
    }
    
}
