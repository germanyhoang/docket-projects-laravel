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
        Schema::create('product_bill_for_products', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('bill_for_product_id');
            // $table->bigInteger('product_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreignId('bill_for_product_id')->references('id')->on('bill_for_products');
            $table->foreignId('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_bill_for_products');
    }
};
