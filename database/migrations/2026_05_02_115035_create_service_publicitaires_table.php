<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_publicitaires', function (Blueprint $table) {
            $table->id();
            $table->string('nomservice');
            $table->string('description');
            $table->decimal('tarif');
            $table->integer('dureejour');
            $table->boolean('actif');
            $table->foreignId('annonceur_id')->constrained('annonceurs')->onDelete('cascade');
          
            // Clé vers Produit dans le système .NET (pas de contrainte)
            $table->unsignedBigInteger('produit_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_publicitaires');
    }
};
