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

        // Galeria de Artesanato
        $empresa = 1;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => '',
                'horario'    => 'Diariamente, de 8h às 17h.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Rassele
        $empresa = 2;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => '',
                'horario'    => 'Todos os dias de 07:30 às 17:30 horas.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        /*
        // MODELO
        $empresa = ;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => '',
                'horario'    => 'De ',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */

    }
}
