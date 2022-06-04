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

        DB::table('empresa_pessoas')->insert([

            // Galeria de Artesanato
            [
                'empresa_id' => 1,
                'nome'       => 'Nome Pessoa xxx',
                'email'      => 'emailPessoa1@TESTE.br',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => 1,
                'nome'       => 'Nome Pessoa yyy',
                'email'      => 'emailPessoa2@TESTE.br',
                'created_at' => $data,
                'updated_at' => $data,
            ],

            /*
            // MODELO
            [
                'empresa_id' => ,
                'nome'       => '',
                'email'      => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            */

        ]);
    }
}
