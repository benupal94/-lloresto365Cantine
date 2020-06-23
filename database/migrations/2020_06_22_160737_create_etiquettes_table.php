<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtiquettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquettes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_eti_pdt')->index();
            $table->unsignedBigInteger('id_eti_pack')->nullable();
            $table->string('lib_etiquette');
            $table->string('is_active');

            $table->foreign('id_eti_pdt')->references('id')->on('etiquette_produits');
            $table->foreign('id_eti_pack')->references('id')->on('etiquette_packages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiquettes');
    }
}
