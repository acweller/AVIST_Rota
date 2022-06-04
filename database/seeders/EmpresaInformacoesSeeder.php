<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaInformacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();

        // 1 'Histórico'
        // 2 'Descrição da Empresa'
        // 3 'Missão'
        // 4 'Valores'
        // 5 'Biografia'
        // 6 'Outros'

        // 'empresa_id'
        // 'informacao_tipo_id'
        // 'descricao'

        DB::table('empresa_informacoes')->insert([

            // Galeria de Artesanato
            [
                'empresa_id'         => 1,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Descrição do Histórico da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => 1,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => 'Descrição da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => 1,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => 'Descrição da Missão da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => 1,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => 'Descrição dos Valores da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => 1,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => 'Biografia da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => 1,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Outras descrições da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],

            /*
            // VINÍCOLA xxx MODELO
            [
                'empresa_id'         => ,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => ,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => ,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => ,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => ,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => ,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            */

        ]);
    }
}
