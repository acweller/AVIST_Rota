<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();

        DB::table('empresa_servicos')->insert([

            // Galeria de Artesanato
            [
                'empresa_id' => 1,
                'nome'       => 'Nome Serviço DANÇAS',
                'descricao'  => 'Serviço DANÇAS de teste da Galeria de Artesanato',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => 1,
                'nome'       => 'Nome Serviço CONSULTORIA',
                'descricao'  => 'Serviço CONSULTORIA de teste da Galeria de Artesanato',
                'ativo'      => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],

            /*
            // MODELO
            [
                'empresa_id' => ,
                'nome'       => '',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            */

        ]);
    }
}
