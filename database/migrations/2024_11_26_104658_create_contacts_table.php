<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Unikal ID
            $table->string('name'); // Ad
            $table->string('email'); // E-poçt
            $table->string('subject')->nullable(); // Mövzu (nullable ola bilər)
            $table->text('message'); // Mesaj
            $table->timestamps(); // Yaradılma və yenilənmə tarixi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
