<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dossier_annonces', function (Blueprint $table) {
            $table->id();
            $table->date('datecreation');
            $table->foreignId('annonceur_id');
            $table->foreignId('service_publicitaire_id')->constrained('servicepublicitaires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dossier_annonces');
    }
};
