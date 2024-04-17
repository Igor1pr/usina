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
        Schema::create('order_supplie', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade');

            $table->unsignedBigInteger('supplie_id');
            $table->foreign('supplie_id')->references('id')->on('supplies')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_supplie');
    }
};
