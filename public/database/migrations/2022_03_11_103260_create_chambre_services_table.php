<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChambreServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambre_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("service_room_id");
            $table->foreign('service_room_id')->on('service_rooms')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("statut_service_id");
            $table->foreign("statut_service_id")->on("statut_services")->references("id")->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("chambre_id");
            $table->foreign("chambre_id")->on("chambres")->references("id")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('chambre_services');
    }
}
