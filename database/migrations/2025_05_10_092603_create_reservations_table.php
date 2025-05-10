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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('museum_id')->constrained('museums')->onDelete('cascade');

            $table->date('visit_date'); // تاريخ الزيارة
            $table->integer('number_of_visitors'); // عدد الزوار

            $table->enum('payment_method', ['free', 'cash', 'mada', 'visa', 'apple_pay'])->default('free');
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // حالة الحجز

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
