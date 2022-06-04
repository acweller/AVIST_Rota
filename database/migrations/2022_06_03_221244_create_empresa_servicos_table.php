<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained(); // Poderia informar o nome da tabela se estiver fora do padrão
            $table->string('nome'); // Nome do serviço
            $table->text('descricao'); // Descrição do serviço
            $table->string('horario');   // Descrição do horário de atendimento do serviço
            $table->boolean('ativo');  // A coluna Ativo indica se o serviço deve ou não aparecer nas listagens.
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
        Schema::dropIfExists('empresa_servicos');
    }
}
