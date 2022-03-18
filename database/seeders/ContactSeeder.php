<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            "nom"=>"string",
            "email"=>"NazamPaki@gmil.com",
            "phone"=>"046565654",
            "sujet"=>"Sujet",
            "msg"=>"LaIllahAlillahalah",
        ]);
    }
}
