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

        DB::table('empresa_enderecos')->insert([

            // Galeria de Artesanato
            [
                'empresa_id'   => 1,
                'rua'          => 'Rua xxx',
                'numero'       => 'Número 0123',
                'complemento'  => 'Complemento xxx',
                'bairro'       => 'Bairro xxx',
                'cidade'       => 'Santa Teresa',
                'estado'       => 'ES',
                'cep'          => '29650-000',
                'created_at' => $data,
                'updated_at' => $data,
            ],

            /*
            // MODELO
            [
                'empresa_id'   => ,
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
            */

        ]);
    }
}
