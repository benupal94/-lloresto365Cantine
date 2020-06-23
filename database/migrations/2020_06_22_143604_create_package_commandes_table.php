<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_commandes', function (Blueprint $table) {
            $table->id();
            $table->string('package');
            $table->string('commande');
            $table->string('quantite');
            $table->string('prix_unitaire');
            $table->string('montant');
            $table->string('remise');
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
        Schema::dropIfExists('package_commandes');
    }
}
