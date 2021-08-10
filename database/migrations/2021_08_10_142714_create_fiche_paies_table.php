<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichePaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_paies', function (Blueprint $table) {
            $table->id();
            $table->integer('periode_paie');
            $table->Date('date_paie');
            $table->double('prime');
            $table->integer('detail_prime');
            $table->string('cotisations');
            $table->double('montant_paie');
            $table->string('modepaiement');
            $table->boolean('accusereception');
            $table->boolean('status_payement');
            $table->integer('flag');
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
        Schema::dropIfExists('fiche_paies');
    }
}