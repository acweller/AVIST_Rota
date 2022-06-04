<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained(); // Poderia informar o nome da tabela se estiver fora do padrão
            $table->string('nome'); // Nome do produto
            $table->text('descricao'); // Descrição do produto
            $table->boolean('ativo'); // A coluna Ativo indica se o produto deve ou não aparecer nas listagens.
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
        Schema::dropIfExists('empresa_produtos');
    }
}
