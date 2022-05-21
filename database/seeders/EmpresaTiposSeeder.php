<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa_tipos')->insert([
            [
                'id' => 1,
                'nomeEmpresaTipo' => 'Associação'
            ],
            [
                'id' => 2,
                'nomeEmpresaTipo' => 'Vinícola / Cantina'
            ],
            [
                'id' => 3,
                'nomeEmpresaTipo' => 'Galeria de Artesanato'
            ],
            [
                'id' => 4,
                'nomeEmpresaTipo' => 'Parceiro'
            ],
            [
                'id' => 5,
                'nomeEmpresaTipo' => 'Colaborador'
            ],
        ]);
    }
}
