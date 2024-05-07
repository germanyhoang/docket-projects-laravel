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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id');
            
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users');
        });
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('cart_id');
            // $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreignId('product_id')->references('id')->on('products');
            $table->foreignId('cart_id')->references('id')->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_carts');
        Schema::dropIfExists('carts');
        
    }
};
