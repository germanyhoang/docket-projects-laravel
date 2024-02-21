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
        Schema::create('seat_quantity_role', function (Blueprint $table) {
            $table->id();
            $table->text('seat');
        });
        Schema::create('transportation_methods', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('seat_quantity_role_id');
            $table->boolean('is_seat');
            $table->boolean('is_couple');
            $table->bigInteger('price');
            $table->timestamps();
            $table->foreignId('seat_quantity_role_id')->references('id')->on('seat_quantity_role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportation_methods');
        Schema::dropIfExists('seat_quantity_role');
    }
};
