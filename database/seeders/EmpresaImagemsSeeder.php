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
        $empresa = 1;
        $nomeEmpresa = 'Galeria de Artesanato';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminho . 'principal0001.jpg',
                'descricao'      => 'Foto principal da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 3,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        $ordem = $empresa * 10000 + 2; // Para iniciar no '4'
        for ($i=2; $i <= 10; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => $empresa,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminho . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da ' . $nomeEmpresa,
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }

        // Rassele
        $caminho = '/images/02rassele/'; // Caminho Padrão
        $empresa = 2;
        $nomeEmpresa = 'Vinícola Rassele';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminho . 'principal0001.jpg',
                'descricao'      => 'Foto principal da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 3,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        $ordem = $empresa * 10000 + 2; // Para iniciar no '4'
        for ($i=2; $i <= 15; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => $empresa,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminho . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da ' . $nomeEmpresa,
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }


        // Labiata
        $caminho = '/images/03labiata/'; // Caminho Padrão
        $empresa = 3;
        $nomeEmpresa = 'Vinícola Labiata';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminho . 'principal0001.jpg',
                'descricao'      => 'Foto principal da ' . $nomeEmpresa,
                'ordem'          => $empresa * 10000 + 3,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        $ordem = $empresa * 10000 + 2; // Para iniciar no '4'
        for ($i=2; $i <= 20; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => $empresa,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminho . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da ' . $nomeEmpresa,
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }

        // Mattiello
        $caminho = '/images/04mattiello/'; // Caminho Padrão
        $empresa = 4;
        $nomeEmpresa = 'Cantina Mattielo';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Romanha
        $caminho = '/images/05romanha/'; // Caminho Padrão
        $empresa = 5;
        $nomeEmpresa = 'Cantina Romanha';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Casa Espumante
        $caminho = '/images/06casaespumante/'; // Caminho Padrão
        $empresa = 6;
        $nomeEmpresa = 'Casa dos Espumantes';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tomazelli
        $caminho = '/images/07tomazelli/'; // Caminho Padrão
        $empresa = 7;
        $nomeEmpresa = 'Vinícola Tomazelli';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Braun
        $caminho = '/images/08braun/'; // Caminho Padrão
        $empresa = 8;
        $nomeEmpresa = 'Cantina Braun';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Grotteschi
        $caminho = '/images/09grotteschi/'; // Caminho Padrão
        $empresa = 9;
        $nomeEmpresa = 'Cantina Grotteschi';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tabocas
        $caminho = '/images/10tabocas/'; // Caminho Padrão
        $empresa = 10;
        $nomeEmpresa = 'Tabocas Vin De Garage';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Ziviani
        $caminho = '/images/11ziviani/'; // Caminho Padrão
        $empresa = 11;
        $nomeEmpresa = 'Vinícola Ziviani';
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminho . 'mapa.png',
                'descricao'      => 'Mapa',
                'ordem'          => $empresa * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminho . 'logomarca.png',
                'descricao'      => 'Logomarca',
                'ordem'          => $empresa * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

    }
}
