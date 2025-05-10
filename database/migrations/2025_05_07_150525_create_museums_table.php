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
        Schema::create('museums', function (Blueprint $table) {
         
    $table->id();
    $table->string('museum_name');
//    $table->string('museum_region');
    $table->foreignId('museum_region_id')->constrained('regions')->onDelete('cascade');
    $table->string('museum_city');
    $table->string('museum_type');
    $table->string('museum_workdays');
    $table->string('museum_openinghours');
    $table->string('museum_description');
    $table->string('museum_location');
    $table->boolean('museum_bookingavaliable')->default(true);
    $table->string('museum_enterfee');
    $table->string('museum_image')->nullable();
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('museums');
    }
};
