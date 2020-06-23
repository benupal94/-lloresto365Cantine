<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ent_user')->index();
            $table->string('codeuid');
            $table->string('name');
            $table->string('login');
            $table->string('password');
            $table->string('profil');
            $table->string('is_active');
            $table->string('last_connexion');
            $table->timestamps();

            $table->foreign('id_ent_user')->references('id')->on('entreprise_utilisateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
