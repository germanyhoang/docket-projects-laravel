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
        Schema::create('status_role', function (Blueprint $table) {
            $table->id();
            $table->text('status');
        });
        Schema::create('bill_for_tours', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('total_price');
           
            // $table->bigInteger('user_id');
            // $table->integer('status_role');
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('status_role_id')->references('id')->on('status_role');
        });
        Schema::create('transportation_method_bill_for_tours', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('transportation_method_id');
            // $table->bigInteger('bill_for_tour_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreignId('t_m_id')->references('id')->on('transportation_methods');
            $table->foreignId('bill_for_tour_id')->references('id')->on('bill_for_tours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportation_method_bill_for_tours');
        Schema::dropIfExists('bill_for_tours');
        Schema::dropIfExists('status_role');
    }
};
