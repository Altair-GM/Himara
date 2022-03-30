<?php

namespace Database\Seeders;

use App\Models\Fonction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            [
                'nom' => "Jeanette",
                'prenom' => "Owens",
                'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
                'img' => 'images/staff/staff1.jpg',
                'fonction_id' => 1
            ],
            [
                'nom' => "Jeanette",
                'prenom' => "Owens",
                'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
                'img' => 'images/staff/staff2.jpg',
                'fonction_id' => Fonction::inRandomOrder()->where('id', '!=', 1)->first()->id,
            ],
            [
                'nom' => "Jeanette",
                'prenom' => "Owens",
                'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
                'img' => 'images/staff/staff2.jpg',
                'fonction_id' => Fonction::inRandomOrder()->where('id', '!=', 1)->first()->id,
            ],
            [
                'nom' => "Jeanette",
                'prenom' => "Owens",
                'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
                'img' => 'images/staff/staff2.jpg',
                'fonction_id' => Fonction::inRandomOrder()->where('id', '!=', 1)->first()->id,
            ],
            [
                'nom' => "Jeanette",
                'prenom' => "Owens",
                'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
                'img' => 'images/staff/staff2.jpg',
                'fonction_id' => Fonction::inRandomOrder()->where('id', '!=', 1)->first()->id,
            ],
            [
                'nom' => "Jeanette",
                'prenom' => "Owens",
                'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
                'img' => 'images/staff/staff2.jpg',
                'fonction_id' => Fonction::inRandomOrder()->where('id', '!=', 1)->first()->id,
            ],
            [
                'nom' => "Jeanette",
                'prenom' => "Owens",
                'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
                'img' => 'images/staff/staff2.jpg',
                'fonction_id' => Fonction::inRandomOrder()->where('id', '!=', 1)->first()->id,
            ],
            [
                'nom' => "Jeanette",
                'prenom' => "Owens",
                'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
                'img' => 'images/staff/staff2.jpg',
                'fonction_id' => Fonction::inRandomOrder()->where('id', '!=', 1)->first()->id,
            ],
        ]);
    }
}
