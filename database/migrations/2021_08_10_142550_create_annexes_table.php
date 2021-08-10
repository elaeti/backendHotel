<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->double('ca');
            $table->string('infocompte');
            $table->string('nbr_employee');
            $table->string('gerant');
            $table->Date('date_ouverture');
            $table->integer('flag');
            $table->unsignedBigInteger('entreprise_id');
            $table->foreign('entreprise_id')
                ->references('id')
                ->on('entreprises')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('annexes');
    }
}