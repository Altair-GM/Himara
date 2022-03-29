<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChambreTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambre_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("chambre_id");
            $table->foreign("chambre_id")->on("chambres")->references("id")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("tag_chambre_id");
            $table->foreign("tag_chambre_id")->on("tag_chambres")->references("id")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('chambre_tags');
    }
}
