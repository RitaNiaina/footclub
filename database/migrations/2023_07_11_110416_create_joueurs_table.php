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
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id('id_jou');
            $table->unsignedBigInteger('id_tit');
            $table->unsignedBigInteger('id_equi');
            $table->string('nom_jou');
            $table->string('prenom_jou');
            $table->date('datenaiss_jou');
            $table->integer('age_jou');
            $table->string('nationalite_jou');
            $table->string('adress_jou');
            $table->string('tel_jou');
            $table->string('email_jou');
            $table->string('sexe_jou');
            $table->string('tail_jou');
            $table->string('pied_jou');
            $table->string('photo_jou');
            $table->string('post_jou');
            $table->integer('num_jou');
            $table->foreign('id_tit')
            ->references('id_tit')->on('titres')->onDelete('cascade');
            $table->foreign('id_equi')
            ->references('id_equi')->on('equipes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joueurs');
    }
};
