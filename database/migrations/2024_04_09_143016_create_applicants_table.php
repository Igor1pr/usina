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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_solicitante');
            $table->string('tipo_setor');
            $table->string('setor_interno')->nullable();
            $table->string('prefixo_setor')->nullable();
            $table->string('setor_externo')->nullable();
            $table->integer('quantidade_autorizada');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
