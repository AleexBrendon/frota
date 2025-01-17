<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('abastecimentos', function (Blueprint $table) {
        $table->id();
        $table->string('veiculo');
        $table->string('condutor');
        $table->string('filial');
        $table->decimal('litros', 8, 2);
        $table->decimal('km_rodados');
        $table->decimal('valor_total', 8, 2);
        $table->date('data_abastecimento');
        $table->decimal('odometro');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abastecimentos');
    }
};
