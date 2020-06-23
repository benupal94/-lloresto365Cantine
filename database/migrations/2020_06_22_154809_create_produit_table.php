<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cat_pdt')->index();
            $table->unsignedBigInteger('id_eti_pdt')->nullable();
            $table->unsignedBigInteger('id_pack_pdt')->nullable();
            $table->unsignedBigInteger('id_pdt_cmd')->nullable();
            $table->string('ref_produit');
            $table->string('nom_produit');
            $table->string('description');
            $table->string('price');
            $table->string('is_active');
            $table->timestamps();

            $table->foreign('id_cat_pdt')->references('id')->on('categorie_produits');
            $table->foreign('id_eti_pdt')->references('id')->on('etiquette_produits');
            $table->foreign('id_pack_pdt')->references('id')->on('produit_packages');
            $table->foreign('id_pdt_cmd')->references('id')->on('produit_commandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
