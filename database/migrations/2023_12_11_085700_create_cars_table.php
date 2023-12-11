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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('plate_number', 20);
            $table->string('car_name', 20);
            $table->text('description');
            $table->unsignedSmallInteger('car_model_year');
            $table->string('color', 15);
            $table->decimal('rate', 10, 2);
            $table->enum('status', ['available', 'booked', 'maintenance']);
            $table->string('image');
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
