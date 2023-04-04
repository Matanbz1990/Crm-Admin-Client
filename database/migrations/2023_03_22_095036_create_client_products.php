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
        Schema::create('client_products', function (Blueprint $table) {
             $table->unsignedBigInteger('client_id');
             $table->unsignedBigInteger('product_id');
             $table->integer('quantity')->default(0);
             $table->decimal('price', 8, 2);
             $table->timestamps();

            //   $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade');
            //   $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');


              $table->primary(['client_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_products');
    }
};
