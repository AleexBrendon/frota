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
        $table->decimal('quantidade_litros', 8, 2);
        $table->decimal('valor_total', 8, 2);
        $table->date('data_abastecimento');
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
