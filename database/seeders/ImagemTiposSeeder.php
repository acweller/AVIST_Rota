<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagemTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagem_tipos')->insert([
            ['nomeImagemTipo' => 'Mapa'],
            ['nomeImagemTipo' => 'Logomarca'],
            ['nomeImagemTipo' => 'Carrossel'],
            ['nomeImagemTipo' => 'Foto'],
        ]);
    }
}
