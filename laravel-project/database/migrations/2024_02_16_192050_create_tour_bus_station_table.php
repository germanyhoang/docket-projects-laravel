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
        Schema::create('city_role', function (Blueprint $table) {
            $table->id();
            $table->text('city');
        });
        Schema::create('bus_stations', function (Blueprint $table) {
            $table->id();
            // $table->integer('city_role_id');
            $table->text('name');
            $table->text('address');
            $table->timestamps();
            $table->foreignId('city_role_id')->reference('id')->on('city_role');
        });
        Schema::create('tour_bus_stations', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('tour_id');
            // $table->bigInteger('bus_station_id');
            $table->timestamps();
            $table->foreignId('tour_id')->references('id')->on('tours');
            $table->foreignId('bus_station_id')->references('id')->on('bus_stations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_bus_stations');
        Schema::dropIfExists('bus_stations');
        Schema::dropIfExists('city_role');
    }
};
