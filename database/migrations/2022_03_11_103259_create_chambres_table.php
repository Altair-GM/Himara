<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->text("description");
            $table->string("image");
            $table->float("prix");
            $table->integer("max");
            $table->integer("sofa");
            $table->integer("lit");
            $table->unsignedBigInteger("category_chambre_id");
            $table->foreign("category_chambre_id")->on("category_chambres")->references("id")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('chambres');
    }
}
