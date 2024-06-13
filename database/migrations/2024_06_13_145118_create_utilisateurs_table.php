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
            $table->string('email');
            $table->string('mdp');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('telephone')->nullable();
            $table->string('image')->nullable();
            $table->string('cv')->nullable();
            $table->string('adresse')->nullable();
            $table->string('niveau')->nullable();
            $table->string('specialite')->nullable();
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
        Schema::dropIfExists('utilisateurs');
    }
}
