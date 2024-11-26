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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id(); // Avtomatik artırılan id
            $table->string('title'); // Başlıq
            $table->text('content'); // Məzmun
            $table->string('image')->nullable(); // Şəkil (nullable çünki şəkil olmaya bilər)
            $table->timestamps(); // Created_at və updated_at sütunları
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
