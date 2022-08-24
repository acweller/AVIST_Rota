<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformacaoTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informacao_tipos')->insert([
            ['nomeInformacaoTipo' => 'Histórico'],
            ['nomeInformacaoTipo' => 'Descrição da Empresa'],
            ['nomeInformacaoTipo' => 'Missão'],
            ['nomeInformacaoTipo' => 'Valores'],
            ['nomeInformacaoTipo' => 'Biografia'],
            ['nomeInformacaoTipo' => 'Outros'],
            ['nomeInformacaoTipo' => 'Ações'],
        ]);
    }
}
