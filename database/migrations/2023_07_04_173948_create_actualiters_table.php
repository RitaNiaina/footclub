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
        Schema::create('actualiters', function (Blueprint $table) {
            $table->id('id_actu');
            $table->string('titre_actu');
            $table->string('photo_actu');
            $table->string('contenu_actu');
            $table->string('statu');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actualiters');
    }
};
