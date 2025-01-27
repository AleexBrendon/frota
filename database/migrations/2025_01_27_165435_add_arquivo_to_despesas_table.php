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
        Schema::table('despesas', function (Blueprint $table) {
            $table->text('arquivo')->nullable(); // Campo para armazenar o conteúdo codificado do arquivo
        });
    }

    public function down()
    {
        Schema::table('despesas', function (Blueprint $table) {
            $table->dropColumn('arquivo');
        });
    }
};
