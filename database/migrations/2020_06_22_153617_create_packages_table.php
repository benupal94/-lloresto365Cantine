<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_eti_pack')->index();
            $table->unsignedBigInteger('id_pack_cmd')->nullable();
            $table->unsignedBigInteger('id_pack_pdt')->nullable();
            $table->string('nom_package');
            $table->string('price');
            $table->string('description');
            $table->string('is_active');
            $table->timestamps();

            $table->foreign('id_eti_pack')->references('id')->on('etiquette_packages');
            $table->foreign('id_pack_cmd')->references('id')->on('package_commandes');
            $table->foreign('id_pack_pdt')->references('id')->on('produit_packages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
