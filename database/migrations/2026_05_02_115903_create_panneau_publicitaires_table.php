<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('panneau_publicitaires', function (Blueprint $table) {
            $table->id();
            $table->string('nompanneau');
            $table->decimal('largeur');
            $table->decimal('hauteur');
            $table->boolean('disponible');
            $table->foreignId('service_publicitaire_id')->constrained('servicepublicitaires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('panneau_publicitaires');
    }
};
