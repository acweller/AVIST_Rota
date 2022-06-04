<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaInformacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_informacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained(); // Poderia informar o nome da tabela se estiver fora do padrão
            $table->foreignId('informacao_tipo_id')->constrained();
            $table->text('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa_informacoes');
    }
}
