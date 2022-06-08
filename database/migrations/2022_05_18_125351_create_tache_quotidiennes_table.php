<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTacheQuotidiennesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tache_quotidiennes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_employe');
            $table->timestamp('Date_du_jour');
            $table->string('Description_de_activité');
            $table->string('Tranche horaire',255);
            $table->timestamps();

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
        Schema::dropIfExists('tache_quotidiennes');
    }
}
