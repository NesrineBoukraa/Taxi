<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('time_sheets', function (Blueprint $table) {
            $table->id();
            $table->date('datedebut');
            $table->date('datefin');
            $table->time('heuredebut');
            $table->time('heurefin');
            $table->foreignId('service_publicitaire_id')->constrained('servicepublicitaires')->onDelete('cascade');
            $table->foreignId('panneau_publicitaire_id')->constrained('panneaupublicitaires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('time_sheets');
    }
};
