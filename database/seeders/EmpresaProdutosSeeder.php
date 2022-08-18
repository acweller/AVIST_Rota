<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaProdutosSeeder extends Seeder
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
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Agricultura familiar',
                'descricao'  => 'Doces, sobremesas, biscoitos, vinhos, cachaças, conservas, pimentas, geleias, e muito mais.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Artesanatos',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Produtos regionais',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Rassele
        $empresa = 2;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinhos',
                'descricao'  => 'Tinto Isabel (Seco e Suave), Tinto Bordô (Seco), Branco Seco, etc.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado Alcoólico',
                'descricao'  => 'Jabuticaba (Suave).',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Licores',
                'descricao'  => 'Finos e Cremosos (de frutas e ingredientes locais).',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        /*
        // MODELO
        $empresa = ;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => '',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */
    }
}
