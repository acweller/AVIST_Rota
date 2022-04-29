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
            ['nomeEmpresaTipo' => 'Associação'],
            ['nomeEmpresaTipo' => 'Vinícola / Cantina'],
            ['nomeEmpresaTipo' => 'Parceiro'],
            ['nomeEmpresaTipo' => 'Colaborador'],
        ]);
    }
}
