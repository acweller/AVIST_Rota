<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaImagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();

        // 1 - Logomarca
        // 2 - Carrossel
        // 3 - Foto
        // 4 - QR-Code

        DB::table('empresa_imagens')->insert([

            // Galeria de Artesanato
            [
                'empresa_id'     => 1,
                'imagem_tipo_id' => 1, // Logomarca
                'caminho'        => '/logomarca0001.jpg',
                'descricao'      => 'Logomarca da Galeria de Artesanato',
                'ordem'          => 10001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 1,
                'imagem_tipo_id' => 2, // Carrossel
                'caminho'        => '/principal0001.jpg',
                'descricao'      => 'Foto principal da Galeria de Artesanato',
                'ordem'          => 10002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 1,
                'imagem_tipo_id' => 3, // Foto
                'caminho'        => '/principal0002.jpg',
                'descricao'      => 'Foto da Galeria de Artesanato',
                'ordem'          => 10003,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => 1,
                'imagem_tipo_id' => 4, // QR-Code
                'caminho'        => '/qrcode0001.jpg',
                'descricao'      => 'QR-Code da Galeria de Artesanato',
                'ordem'          => 10004,
                'created_at' => $data,
                'updated_at' => $data,
            ],

            /*
            // MODELO
            [
                'empresa_id'     => ,
                'imagem_tipo_id' => 1, // Logomarca
                'caminho'        => '/logomarca000x.jpg',
                'descricao'      => 'Logomarca da ',
                'ordem'          => x0001,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => ,
                'imagem_tipo_id' => 2, // Carrossel
                'caminho'        => '/principal000x.jpg',
                'descricao'      => '',
                'ordem'          => x0002,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => ,
                'imagem_tipo_id' => 3, // Foto
                'caminho'        => '/principal000x.jpg',
                'descricao'      => '',
                'ordem'          => x0003,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'     => ,
                'imagem_tipo_id' => 4, // QR-Code
                'caminho'        => '/qrcode000x.jpg',
                'descricao'      => '',
                'ordem'          => x0004,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            */

        ]);
    }
}
