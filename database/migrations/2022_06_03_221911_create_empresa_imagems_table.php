<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_imagems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained(); // Poderia informar o nome da tabela se estiver fora do padrão
            $table->foreignId('imagem_tipo_id')->constrained();
            $table->string('caminho');   // Indica o caminho (path) até a imagem.
            $table->string('descricao'); // Inclui informações sobre a imagem.
            $table->integer('ordem');        // Indica uma ordem de apresentação para a imagem.
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
        Schema::dropIfExists('empresa_imagems');
    }
}
