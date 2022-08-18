<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaPessoasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();

        /*
        // Galeria de Artesanato
        $empresa = 1;
        DB::table('empresa_pessoas')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Nome Pessoa xxx',
                'email'      => 'emailPessoa1@TESTE.br',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */

        // Rassele
        $empresa = 2;
        DB::table('empresa_pessoas')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Wagner Rassele',
                'email'      => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        /*
        // MODELO
        $empresa = ;
        DB::table('empresa_pessoas')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => '',
                'email'      => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */

    }
}
