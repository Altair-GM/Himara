<?php

namespace Database\Seeders;

use App\Models\Chambre;
use App\Models\ServiceRoom;
use App\Models\StatutService;
use Illuminate\Database\Seeder;

class ChambreServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = ServiceRoom::all();
        $statut = StatutService::all();
        Chambre::all()->each(function ($chambre) use ($services, $statut) {
            $services->each(function ($service) use ($chambre, $statut){
                $chambre->services()->attach(
                    $service->id, ['statut_service_id'=>$statut->random(1)->first()->id]
                );
            });
        });
    }
}
