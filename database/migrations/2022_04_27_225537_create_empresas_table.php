<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_tipo_id')->constrained(); // Poderia informar o nome da tabela se estiver fora do padrão
            $table->string('nomeEmpresa');
            $table->string('linkGoogleMaps');
            $table->double('latitude');  // Y - No Google mantém essa ordem
            $table->double('longitude'); // X
            $table->string('caminhoImagem'); // Indica o caminho padrão para as imagens da Empresa
            $table->timestamps();
        });
        // Dicas de utilização de Timestamps no Laravel
        // https://laraveldaily.com/8-tricks-with-laravel-timestamps/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
