<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tag_id");
            $table->foreign("tag_id")->on("tags")->references("id")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("articles_id");
            $table->foreign("articles_id")->on("articles")->references("id")->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_articles');
    }
}
