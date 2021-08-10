<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichesControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiches_controls', function (Blueprint $table) {
            $table->id();
            $table->datetime('heur_arrive');
            $table->datetime('heur_depart');
            $table->string('heur_sup');
            $table->boolean('presence');
            $table->string('absence');
            $table->string('permission');
            $table->boolean('avance_salaire');
            $table->string('motif_avance_salaire');
            $table->string('periode');
            $table->boolean('infraction');
            $table->string('motif_infraction');
            $table->boolean('avertissement');
            $table->string('motif_avertissement');
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
        Schema::dropIfExists('fiches_controls');
    }
}