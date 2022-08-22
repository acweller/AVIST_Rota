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

        // Labiata
        $empresa = 3;
        DB::table('empresa_pessoas')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Firmino Doerl',
                'email'      => 'vinicolalabiata@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Mattiello
        $empresa = 4;
        DB::table('empresa_pessoas')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Eliton Stanger',
                'email'      => 'cantinamattiello2@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Viviane Mattiello',
                'email'      => 'cantinamattiello2@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Romanha
        $empresa = 5;
        DB::table('empresa_pessoas')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Steven Romanha Fontana',
                'email'      => 'steven.fontana@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Espumantes
        $empresa = 6;
        DB::table('empresa_pessoas')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Sergio Sperandio',
                'email'      => 'casadosespumantes@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Raiani Salviato Sperandio',
                'email'      => 'casadosespumantes@hotmail.com',
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
