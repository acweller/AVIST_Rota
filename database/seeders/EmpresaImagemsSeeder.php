<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaImagemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();
        $foto = '';

        // 1 - Logomarca
        // 2 - Mapa
        // 3 - Carrossel
        // 4 - Foto
        // https://www.casavalduga.com.br/a-vinicola/
        // 
        // Ver: https://brasildevinhos.com.br/vinicolas/
        // https://brasildevinhos.com.br/vinicola/cantina-mattiello/
        // 

        // Galeria de Artesanato
        $caminho = '/images/01galeriaartesanato/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 1,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa da Galeria de Artesanato',
                'ordem'          => 10001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 1,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca da Galeria de Artesanato',
                'ordem'          => 10002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 1,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminho . 'principal0001.jpg',
                'descricao'      => 'Foto principal da Galeria de Artesanato',
                'ordem'          => 10003,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        $ordem = 10002; // Para iniciar no '4'
        for ($i=2; $i <= 10; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => 1,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminho . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da Galeria de Artesanato',
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }

        // Rassele
        $caminho = '/images/02rassele/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 2,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 20001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 2,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 20002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);


        // Labiata
        $caminho = '/images/03labiata/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 3,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 30001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 3,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 30002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Mattiello
        $caminho = '/images/04mattiello/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 4,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 40001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 4,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 40002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Romanha
        $caminho = '/images/05romanha/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 5,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 50001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 5,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 50002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Casa Espumante
        $caminho = '/images/06casaespumante/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 6,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 60001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 6,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 60002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tomazelli
        $caminho = '/images/07tomazelli/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 7,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 70001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 7,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 70002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Braun
        $caminho = '/images/08braun/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 8,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 80001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 8,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 80002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Grotteschi
        $caminho = '/images/09grotteschi/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 9,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 90001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 9,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 90002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tabocas
        $caminho = '/images/10tabocas/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 10,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 100001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 10,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 100002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Ziviani
        $caminho = '/images/11ziviani/'; // Caminho Padrão
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => 11,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => 110001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 11,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => 110002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);




    }
}
