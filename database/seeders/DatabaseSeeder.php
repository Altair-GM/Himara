<?php

namespace Database\Seeders;

use App\Models\CategoryChambre;
use App\Models\Chambre;
use App\Models\Staff;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([

            LogoSeeder::class,
            InfoSeeder::class,
            FonctionSeeder::class,
            StaffSeeder::class,
            CarouselSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CategoryArticlesSeeder::class,
            ArticleSeeder::class,
            TagSeeder::class,
            CategoryChambreSeeder::class,
            ChambreSeeder::class,
            ContactSeeder::class,
            CategoryImageSeeder::class,
            ChambreTagSeeder::class,
            TagArticleSeeder::class,
            ServiceRoomSeeder::class,
            StatutServiceSeeder::class,
            ServiceSeeder::class,
            ChambreSeeder::class,
            ChambreServiceSeeder::class,
            ImageSeeder::class,
            ReservationSeeder::class,
            ReviewSeeder::class,
            

            
            
            
            
            
            
            
            
           
            
            
           
            
        ]);
    }
}
