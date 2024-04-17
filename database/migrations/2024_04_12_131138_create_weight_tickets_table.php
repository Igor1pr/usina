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
        Schema::create('weight_tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('requested_quantity');
            $table->double('measured_quantity');

            $table->unsignedBigInteger('supplie_id');
            $table->foreign('supplie_id')->references('id')->on('supplies')->onUpdate('cascade');

            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weight_tickets');
    }
};
