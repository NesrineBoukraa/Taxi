<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('contenu');
            $table->date('datepublication');
            $table->boolean('actif');
            $table->string('urlmedia');
            $table->foreignId('dossier_annonce_id')->constrained('dossierannonces')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
