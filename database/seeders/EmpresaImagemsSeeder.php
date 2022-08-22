<?php

namespace Database\Seeders;

use App\Models\Empresa;
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
        $empresa_id = 1;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminhoImagem . 'principal0001.jpg',
                'descricao'      => 'Foto principal da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 3,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        $ordem = $empresa_id * 10000 + 2; // Para iniciar no '4'
        for ($i=2; $i <= 10; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => $empresa_id,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminhoImagem . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da ' . $nomeEmpresa,
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }

        // Rassele
        $empresa_id = 2;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminhoImagem . 'principal0001.jpg',
                'descricao'      => 'Foto principal da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 3,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        $ordem = $empresa_id * 10000 + 2; // Para iniciar no '4'
        for ($i=2; $i <= 15; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => $empresa_id,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminhoImagem . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da ' . $nomeEmpresa,
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }

        // Labiata
        $empresa_id = 3;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminhoImagem . 'principal0001.jpg',
                'descricao'      => 'Foto principal da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 3,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        $ordem = $empresa_id * 10000 + 2; // Para iniciar no '4'
        for ($i=2; $i <= 20; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => $empresa_id,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminhoImagem . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da ' . $nomeEmpresa,
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }

        // Mattiello
        $empresa_id = 4;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminhoImagem . 'principal0001.jpg',
                'descricao'      => 'Foto principal da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 3,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 4, // Foto
                'caminho'        => $caminhoImagem . 'historia.jpg',
                'descricao'      => 'Foto histórica da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 4,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        $ordem = $empresa_id * 10000 + 3; // Para iniciar no '5'
        for ($i=2; $i <= 28; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => $empresa_id,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminhoImagem . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da ' . $nomeEmpresa,
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }

        // Romanha
        $empresa_id = 5;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 3, // Carrossel
                'caminho'        => $caminhoImagem . 'principal0001.jpg',
                'descricao'      => 'Foto principal da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 3,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        $ordem = $empresa_id * 10000 + 2; // Para iniciar no '4'
        for ($i=2; $i <= 26; $i++) { 
            $foto = sprintf("%'.04d", $i);
            DB::table('empresa_imagems')->insert([
                [
                    'empresa_id'     => $empresa_id,
                    'imagem_tipo_id' => 4, // Foto
                    'caminho'        => $caminhoImagem . 'principal' . $foto . '.jpg',
                    'descricao'      => 'Foto da ' . $nomeEmpresa,
                    'ordem'          => $ordem + $i,
                    'created_at' => $data,
                    'updated_at' => $data,
                ],
            ]);
        }

        // Casa Espumante
        $empresa_id = 6;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tomazelli
        $empresa_id = 7;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Braun
        $empresa_id = 8;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Grotteschi
        $empresa_id = 9;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tabocas
        $empresa_id = 10;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Ziviani
        $empresa_id = 11;
        $empresa = Empresa::find($empresa_id);
        $nomeEmpresa = $empresa->nomeEmpresa;
        $caminhoImagem = $empresa->caminhoImagem;
        DB::table('empresa_imagems')->insert([
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 1, // Mapa
                'caminho'        => $caminhoImagem . 'mapa.png',
                'descricao'      => 'Mapa da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 1,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => $empresa_id,
                'imagem_tipo_id' => 2, // Logomarca
                'caminho'        => $caminhoImagem . 'logomarca.png',
                'descricao'      => 'Logomarca da ' . $nomeEmpresa,
                'ordem'          => $empresa_id * 10000 + 2,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

    }
}
