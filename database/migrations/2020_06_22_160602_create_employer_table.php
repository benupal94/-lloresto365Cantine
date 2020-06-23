<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_entreprise')->index();
            $table->unsignedBigInteger('id_commande')->nullable();
            $table->string('codeuid');
            $table->string('entreprise');
            $table->string('nom');
            $table->string('prenom');
            $table->string('civilite');
            $table->string('contact');
            $table->string('email');
            $table->string('service');
            $table->string('bureau');
            $table->string('created_by');
            $table->string('created_at');

            $table->foreign('id_entreprise')->references('id')->on('entreprises');
            $table->foreign('id_commande')->references('id')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employer');
    }
}
