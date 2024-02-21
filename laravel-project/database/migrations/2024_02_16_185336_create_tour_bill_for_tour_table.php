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
        Schema::create('hotel_rating', function (Blueprint $table) {
            $table->id();
            $table->text('rating');
        });
        Schema::create('role_resident', function (Blueprint $table) {
            $table->id();
            $table->text('resident');
        });
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            // $table->integer('role_resident_id');
            $table->string('name');
            // $table->integer('hotel_rating_id');
            $table->string('address');
            $table->string('thumbnail_image');
            $table->timestamps();
            $table->foreignId('role_resident_id')->references('id')->on('role_resident');
            $table->foreignId('hotel_rating_id')->references('id')->on('hotel_rating');
        });
        Schema::create('tour_guides', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->text('description');
            $table->bigInteger('price');
            $table->timestamps();
        });
        Schema::create('period_role', function (Blueprint $table) {
            $table->id();
            $table->text('period');
        });
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->bigInteger('transportation_method_id');
            // $table->bigInteger('resident_id');
            // $table->bigInteger('tour_guide_id');
            $table->bigInteger('price');
            // $table->integer('period_role_id');
            $table->text('post_content');
            $table->timestamps();
            $table->foreignId('transportation_method_id')->references('id')->on('transportation_methods');
            $table->foreignId('resident_id')->references('id')->on('residents');
            $table->foreignId('tour_guide_id')->references('id')->on('tour_guides');
            $table->foreignId('period_role_id')->references('id')->on('period_role');
        });
        Schema::create('tour_bill_for_tours', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('bill_for_tour_id');
            // $table->bigInteger('tour_id');
            $table->timestamps();
            $table->foreignId('bill_for_tour_id')->reference('id')->on('bill_for_tours');
            $table->foreignId('tour_id')->reference('id')->on('tours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_bill_for_tours');
        Schema::dropIfExists('tours');
        Schema::dropIfExists('period_role');
        Schema::dropIfExists('tour_guides');
        Schema::dropIfExists('residents');
        Schema::dropIfExists('role_resident');
        Schema::dropIfExists('hotel_rating');
    }
};
