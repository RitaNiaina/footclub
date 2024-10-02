<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matchers', function (Blueprint $table) {
            $table->id('id_mat');
            $table->unsignedBigInteger('id_club');
            $table->unsignedBigInteger('id_equi');
            $table->date('date_mat');
            $table->time('heure_mat');
            $table->string('caract_mat');
            $table->integer('statue');
            $table->integer('scor_mmfc');
            $table->integer('scor_mat');
            $table->integer('carte_rouge');
            $table->integer('carte_jaune');
            $table->unsignedBigInteger('id_champ');
            $table->foreign('id_club')
            ->references('id_club')->on('clubs')->onDelete('cascade');
            $table->foreign('id_equi')
            ->references('id_equi')->on('equipes')->onDelete('cascade');
            $table->foreign('id_champ')
            ->references('id_champ')->on('champions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchers');
    }
};