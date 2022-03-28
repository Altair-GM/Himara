<?php

namespace Database\Seeders;

use App\Models\CategoryChambre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chambres')->insert([
            ["nom"=>"istanbul",
            "description"=>"Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
            "image"=>"images/rooms/single/single1.jpg",
            "prix"=>65,
            "max"=>2,
            "sofa"=>1,
            "lit"=>1,
            "category_chambre_id"=>CategoryChambre::inRandomOrder()->first()->id,],

            ["nom"=>"istanbul",
            "description"=>"Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
            "image"=>"images/rooms/single/single1.jpg",
            "prix"=>65,
            "max"=>2,
            "sofa"=>1,
            "lit"=>1,
            "category_chambre_id"=>CategoryChambre::inRandomOrder()->first()->id,],

            ["nom"=>"istanbul",
            "description"=>"Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
            "image"=>"images/rooms/single/single1.jpg",
            "prix"=>65,
            "max"=>2,
            "sofa"=>1,
            "lit"=>1,
            "category_chambre_id"=>CategoryChambre::inRandomOrder()->first()->id,]
        ]);
    }
}
