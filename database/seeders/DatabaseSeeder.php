<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ContatoTiposSeeder::class,
            EmpresaTiposSeeder::class,
            ImagemTiposSeeder::class,
            InformacaoTiposSeeder::class,
            EmpresasSeeder::class,
            EmpresaContatosSeeder::class,
            EmpresaEnderecosSeeder::class,
            EmpresaImagensSeeder::class,
            EmpresaInformacoesSeeder::class,
            EmpresaPessoasSeeder::class,
            EmpresaProdutosSeeder::class,
            EmpresaServicosSeeder::class,
        ]);
    }
}
