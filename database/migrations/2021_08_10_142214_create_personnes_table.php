<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->integer('ref');
            $table->integer('user_id');
            $table->string('photo');
            $table->string('idcard');
            $table->string('nom');
            $table->string('prenom');
            $table->string('genre');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('adresse');
            $table->string('nationalite');
            $table->boolean('flag')->default(false);
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
        Schema::dropIfExists('personnes');
    }
}