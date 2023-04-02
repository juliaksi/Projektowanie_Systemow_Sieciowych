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
        Schema::create('zajecia', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa')->unique();
            $table->string('dzien_tygodnia');
            $table->string('godzina');
            $table->string('prowadzacy');
            $table->string('opis')->nullable();
            $table->integer('czas_trwania_min')->default("60");
            $table->integer('max_osob')->default("60");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zajecia');
    }
};
