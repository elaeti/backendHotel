<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('raison_social');
            $table->string('siege_social');
            $table->string('stratus_juridic');
            $table->string('logo');
            $table->string('adresse');
            $table->string('contact');
            $table->string('rc');
            $table->string('ninea')->unique();
            $table->string('iban');
            $table->string('bank');
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
        Schema::dropIfExists('entreprises');
    }
}