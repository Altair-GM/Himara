<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            'email'=>'himara@info.com',
            'adresse' => "Place de la Minoterie 10",
            'phone' => 8881234567,
            'gsm' => 8881234567,
            'site' => "www.hotelhimara.com",
        ]);
    }
}
