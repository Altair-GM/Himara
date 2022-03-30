<?php

namespace Database\Seeders;

use App\Models\CategoryChambre;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([

            "nom" => "Altair",
            "email" => "NazamPaki@gmail.com",
            "debut" => Carbon::now(),
            "fin" => Carbon::now()->addDay(),
            "adult" => 2,
            "enfant" => 2,
            "valide" => true,
            "category_chambre_id" => CategoryChambre::inRandomOrder()->first()->id,
        ]);
    }
}
