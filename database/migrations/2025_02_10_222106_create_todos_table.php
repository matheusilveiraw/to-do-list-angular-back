<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamp('concebido')->default(DB::raw('CURRENT_TIMESTAMP')); //usa a função do banco de dados CURRENT_TIMESTAMP, que insere automaticamente a data e hora atual do registro
            $table->timestamp('prazo')->nullable();
            $table->boolean('status')->default(false); // false = a fazer, true = feito
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
