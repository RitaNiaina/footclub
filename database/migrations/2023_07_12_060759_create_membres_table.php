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
        Schema::create('membres', function (Blueprint $table) {
            $table->id('id_mem');
            $table->unsignedBigInteger('id_equi');
            $table->string('nom_mem');
            $table->string('prenom_mem');
            $table->date('datenaiss_mem');
            $table->string('nationalite_mem');
            $table->string('adress_mem');
            $table->string('tel_mem');
            $table->string('email_mem');
            $table->string('sexe_mem');
            $table->string('photo_mem');
            $table->string('post_mem');
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
        Schema::dropIfExists('membres');
    }
};
