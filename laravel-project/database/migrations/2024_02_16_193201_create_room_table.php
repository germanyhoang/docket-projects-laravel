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
       
        Schema::create('room_role', function (Blueprint $table) {
            $table->id();
            $table->text('room');
        });
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            // $table->integer('room_role_id');
            // $table->bigInteger('resident_id');
            $table->boolean('have_view');
            $table->bigInteger('price');
            $table->timestamps();
            $table->foreignId('room_role_id')->references('id')->on('room_role');
            $table->foreignId('resident_id')->references('id')->on('residents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('room_role');
    }
};
