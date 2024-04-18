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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('material');
            $table->double('peso', 10, 1);
            $table->double('preco_unitario', 10, 2);
            $table->integer('qtd_estoque');

            $table->unsignedBigInteger('type_measure_id');
            $table->foreign('type_measure_id')->references('id')->on('aux_type_measures')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
