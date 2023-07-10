<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('cep');
            $table->string('telefone');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};