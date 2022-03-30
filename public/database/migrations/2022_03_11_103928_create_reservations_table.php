<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("email");
            $table->dateTime("debut");
            $table->dateTime("fin");
            $table->integer("adult");
            $table->integer("enfant");
            $table->text('commentaire')->nullable();
            $table->bigInteger('telephone')->nullable();
            $table->string('country')->nullable();
            $table->unsignedBigInteger("category_chambre_id");
            $table->foreign("category_chambre_id")->on("category_chambres")->references("id")->onDelete('cascade')->onUpdate('cascade');
            $table->boolean("valide");

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
        Schema::dropIfExists('reservations');
    }
}
