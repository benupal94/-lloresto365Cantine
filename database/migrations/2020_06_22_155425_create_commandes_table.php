<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pdt_cmd')->nullable();
            $table->unsignedBigInteger('id_pack_cmd')->nullable();
            $table->string('date_commande');
            $table->string('ref_commande');
            $table->string('employer');
            $table->date('date_livraison');
            $table->string('heure_livraison');
            $table->string('statut');
            $table->string('feedback');
            $table->date('delivred_at');
            $table->date('terminated_at');
            $table->timestamps();

            $table->foreign('id_pdt_cmd')->references('id')->on('produit_commandes');
            $table->foreign('id_pack_cmd')->references('id')->on('package_commandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
