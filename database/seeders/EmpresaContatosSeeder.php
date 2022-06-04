<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaContatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();

        // 1 - Telefone Fixo
        // 2 - Whatsapp
        // 3 - Email
        // 4 - Facebook
        // 5 - Instagram
        // 6 - Twitter
        // 7 - YouTube

        DB::table('empresa_contatos')->insert([

            // Galeria de Artesanato
            [
                'empresa_id'      => 1,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '(27) 2222-2222 FIXO',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => 1,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '(27) 99999-9999 WHATS',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => 1,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'artesanato_ST@TESTE.br',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => 1,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'Perfil no Facebook',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => 1,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'Perfil no Instagram',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => 1,
                'contato_tipo_id' => 6, // Twitter
                'descricao'       => 'Canal no Twitter',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => 1,
                'contato_tipo_id' => 7, // YouTube
                'descricao'       => 'Canal no YouTube',
                'created_at' => $data,
                'updated_at' => $data,
            ],

            /*
            // MODELO
            [
                'empresa_id'      => ,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => ,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => ,
                'contato_tipo_id' => 3, // Email
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => ,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => ,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => ,
                'contato_tipo_id' => 6, // Twitter
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => ,
                'contato_tipo_id' => 7, // YouTube
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            */

        ]);
    }
}
