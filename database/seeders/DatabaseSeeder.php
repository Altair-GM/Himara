<?php

namespace Database\Seeders;

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
            
        ]);
    }
}
