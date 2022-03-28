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
                "url"=>"images/gallery/gallery3.jpg",
                "category_image_id"=>1,
                "created_at"=>now(),
            ],
            [
                "nom"=>"chambre",
                "url"=>"images/gallery/gallery2.jpg",
                "category_image_id"=>4,
                "created_at"=>now(),

            ],
            [
                "nom"=>"piscine",
                "url"=>"images/gallery/gallery2.jpg",
                "category_image_id"=>2,
                "created_at"=>now(),

            ],
            [
                "nom"=>"spa",
                "url"=>"images/gallery/gallery2.jpg",
                "category_image_id"=>3,
                "created_at"=>now(),

            ],
            [
                "nom"=>"breakfast",
                "url"=>"images/gallery/gallery1.jpg",
                "category_image_id"=>1,
                "created_at"=>now(),

            ],
            [
                "nom"=>"lit",
                "url"=>"images/gallery/gallery1.jpg",
                "category_image_id"=>4,
                "created_at"=>now(),

            ],
            [
                "nom"=>"mer",
                "url"=>"images/gallery/gallery10.jpg",
                "category_image_id"=>3,
                "created_at"=>now(),

            ],
        ]);
    }
}
