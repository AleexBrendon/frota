<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('despesas', function (Blueprint $table) {
            $table->id();
            $table->string('nfs');
            $table->string('filial');
            $table->string('modelo');
            $table->string('veiculo');
            $table->string('tipo');
            $table->string('condutor');
            $table->string('fornecedor');
            $table->string('descricao');
            $table->decimal('valor_produto',  8, 2);
            $table->decimal('valor_total', 8, 2);
            $table->date('data_emissao');
            $table->date('data_pagamento');
            $table->string('pagamento', 8, 2);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('despesas');
    }
};
