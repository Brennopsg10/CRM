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
        Schema::create('crmpessoa', function (Blueprint $table) {
            $table->id();
            $table->string('nomepessoa', 128);
            $table->string('cpf', 15);
            $table->date('dtnasc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crmpessoa');
    }
};
