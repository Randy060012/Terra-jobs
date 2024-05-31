<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('domaine_id')->nullable();
            $table->integer('type_de_contrat_id')->nullable();
            $table->string('titre')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('fichier')->nullable();
            $table->string('date_limite')->nullable();
            $table->integer('categorie_id')->nullable(); 
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
        Schema::dropIfExists('contrats');
    }
}
