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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_type_contrats');
            $table->unsignedBigInteger('id_employe');
            $table->integer('Salaire_Mensuel');
            $table->timestamp('Date_Debut_Contrat');
            $table->timestamp('Date_Fin_Contrat');
            $table->integer('Nombre_Heures_de_Travail_Semaine');
            $table->timestamps();

            $table->foreign('id_type_contrats')
                   ->references('id')
                   ->on('type_contrats')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');

            $table->foreign('id_employe')
                   ->references('id')
                   ->on('employes')
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
        Schema::dropIfExists('contrats');
    }
}
