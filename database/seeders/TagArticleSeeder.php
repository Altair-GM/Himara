<?php

namespace Database\Seeders;

use App\Models\Articles;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $tags = Tag::all();
            Articles::all()->each(function ($article) use ($tags) {
                $article->tags()->attach(
                    $tags->random(rand(1, 3))->pluck('id')->toArray()
                );
            });
        }
    }
}
