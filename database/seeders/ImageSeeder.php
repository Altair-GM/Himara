<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "nom"=>"cocktail",
                "url"=>"gallery.jpg",
                "category_image_id"=>1,
                "created_at"=>now(),
            ],
            [
                "nom"=>"chambre",
                "url"=>"gallery.jpg",
                "category_image_id"=>4,
                "created_at"=>now(),

            ],
            [
                "nom"=>"piscine",
                "url"=>"gallery.jpg",
                "category_image_id"=>2,
                "created_at"=>now(),

            ],
            [
                "nom"=>"spa",
                "url"=>"gallery.jpg",
                "category_image_id"=>3,
                "created_at"=>now(),

            ],
            [
                "nom"=>"breakfast",
                "url"=>"gallery.jpg",
                "category_image_id"=>1,
                "created_at"=>now(),

            ],
            [
                "nom"=>"lit",
                "url"=>"gallery.jpg",
                "category_image_id"=>4,
                "created_at"=>now(),

            ],
            [
                "nom"=>"mer",
                "url"=>"gallery10.jpg",
                "category_image_id"=>3,
                "created_at"=>now(),

            ],
        ]);
    }
}
