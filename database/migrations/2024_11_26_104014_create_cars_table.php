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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make'); // Marka
            $table->string('model'); // Model
            $table->string('image')->nullable(); // Şəkil (nullable çünki şəkil olmaya bilər)
            $table->text('description')->nullable(); // Təsvir (nullable çünki təsvir olmaya bilər)
            $table->decimal('price_per_day', 10, 2); // Günlük qiymət
            $table->year('year'); // İstehsal ili
            $table->string('status'); // Status (məsələn: mövcud, icarəyə verilməyib və s.)
            $table->integer('mileage'); // Yürüş
            $table->string('transmission'); // Şanzıman tipi
            $table->integer('seats'); // Oturacaqların sayı
            $table->integer('luggage'); // Baggaj həcmi
            $table->string('fuel'); // Yanacaq növü
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
