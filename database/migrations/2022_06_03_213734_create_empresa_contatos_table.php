<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_contatos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained(); // Poderia informar o nome da tabela se estiver fora do padrão
            $table->foreignId('contato_tipo_id')->constrained();
            $table->string('descricao'); // Informar o número do telefone ou o perfil da empresa nas redes sociais.
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
        Schema::dropIfExists('empresa_contatos');
    }
}
