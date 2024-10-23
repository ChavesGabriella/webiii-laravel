<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //pega todas as migrations e envia para o banco
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->timestamps();
        });
    }

    //ele apaga da lista de migartions para subir p banco
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
