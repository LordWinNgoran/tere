<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('Photo');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Entreprise');
            $table->string('Telephone');
            $table->string('Mobile');
            $table->string('Email');
            $table->string('Diplôme');
            $table->string('Spécialité');
            $table->unsignedBigInteger('id_poste');
            $table->string('Nationalité');
            $table->string('Numero_CNI');
            $table->integer('Numero_Passport');
            $table->string('Date_de_Naissance');
            $table->string('Lieu_de_Naissance');
            $table->string('Lieu_de_residence');
            $table->string('Sexe');
            $table->string('Statut_Matrimonial');
            $table->integer('Nombre_enfants');
            $table->timestamps();

            $table->foreign('id_poste')
                   ->references('id')
                   ->on('posts')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
