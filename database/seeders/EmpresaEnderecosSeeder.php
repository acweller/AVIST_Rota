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
