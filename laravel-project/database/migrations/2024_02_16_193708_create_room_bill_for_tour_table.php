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
        Schema::create('room_bill_for_tours', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('room_id');
            // $table->bigInteger('bill_for_tour_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreignId('room_id')->references('id')->on('rooms');
            $table->foreignId('bill_for_tour_id')->references('id')->on('bill_for_tours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_bill_for_tours');
    }
};
