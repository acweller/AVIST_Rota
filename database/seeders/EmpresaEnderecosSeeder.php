<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaEnderecosSeeder extends Seeder
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
        DB::table('empresa_enderecos')->insert([
            [
                'empresa_id'   => $empresa,
                'rua'          => 'Rua Ricardo Pasolini',
                'numero'       => '246',
                'complemento'  => '',
                'bairro'       => 'Centro',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Rassele
        $empresa = 2;
        DB::table('empresa_enderecos')->insert([
            [
                'empresa_id'   => $empresa,
                'rua'          => 'Rua Coronel Bonfim',
                'numero'       => '448',
                'complemento'  => '',
                'bairro'       => 'Centro',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        // Labiata
        $empresa = 3;
        DB::table('empresa_enderecos')->insert([
            [
                'empresa_id'   => $empresa,
                'rua'          => 'Rua São Lourenço',
                'numero'       => '635',
                'complemento'  => '',
                'bairro'       => 'São Lourenço',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Mattiello
        $empresa = 4;
        DB::table('empresa_enderecos')->insert([
            [
                'empresa_id'   => $empresa,
                'rua'          => 'Rua São Lourenço',
                'numero'       => '1725',
                'complemento'  => '',
                'bairro'       => 'São Lourenço',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Romanha
        $empresa = 5;
        DB::table('empresa_enderecos')->insert([
            [
                'empresa_id'   => $empresa,
                'rua'          => 'Fica no início do Circuito Caravaggio',
                'numero'       => '',
                'complemento'  => '',
                'bairro'       => 'São Lourenço',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

       // Espumantes
       $empresa = 6;
       DB::table('empresa_enderecos')->insert([
           [
               'empresa_id'   => $empresa,
               'rua'          => 'Circuito Caravaggio',
               'numero'       => 'km 04',
               'complemento'  => '',
               'bairro'       => '',
               'cidade'       => 'Santa Teresa',
               'estado'       => 'ES',
               'cep'          => '29650-000',
               'created_at' => $data,
               'updated_at' => $data,
           ],
       ]);

        // Tomazelli
        $empresa = 7;
        DB::table('empresa_enderecos')->insert([
            [
                'empresa_id'   => $empresa,
                'rua'          => 'Rodovia ES-261 (Josil Espíndola Agostini)',
                'numero'       => '',
                'complemento'  => 'Sítio Bella Vista',
                'bairro'       => '',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Braun
        $empresa = 8;
        DB::table('empresa_enderecos')->insert([
            [
                'empresa_id'   => $empresa,
                'rua'          => 'Vale do Tabocas',
                'numero'       => '',
                'complemento'  => '',
                'bairro'       => '',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        /*
        // MODELO
        $empresa = ;
        DB::table('empresa_enderecos')->insert([
            [
                'empresa_id'   => $empresa,
                'rua'          => '',
                'numero'       => '',
                'complemento'  => '',
                'bairro'       => '',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */
    }
}
