<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->integer('matricule');
            $table->integer('date_naisse');
            $table->integer('age');
            $table->string('motif');
            $table->Date('date_debut');
            $table->Date('date_fin');
            $table->string('clause');
            $table->string('remuneration');
            $table->string('type_contract');
            $table->string('signature');
            $table->integer('flag');
            $table->unsignedBigInteger('annex_id');
            $table->foreign('annex_id')
                ->references('id')
                ->on('annexes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->unsignedBigInteger('poste_id');
                $table->foreign('poste_id')
                    ->references('id')
                    ->on('posts')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                    $table->unsignedBigInteger('personne_id');
                    $table->foreign('personne_id')
                        ->references('id')
                        ->on('personnes')
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
        Schema::dropIfExists('contracts');
    }
}