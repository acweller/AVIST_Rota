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
                'nome'       => 'Fermentado alcoólico',
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

        // Labiata
        $empresa = 3;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcoólico',
                'descricao'  => 'Jabuticaba.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho tinto de mesa',
                'descricao'  => 'Seco, demi seco e suave.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Suco',
                'descricao'  => 'Uva Integral.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Coquetel alcóolico',
                'descricao'  => 'Gengibre Giramundo e Bananinha Giramundo.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Cachaça Giramundo',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Licores artesanais',
                'descricao'  => 'Naturais e cremosos.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Mattiello
        $empresa = 4;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcóolico de Jabuticaba',
                'descricao'  => 'Branco Seco e Tinto Suave.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Tinto',
                'descricao'  => 'Seco (Grano D\'oro e Seleção), Semi Seco e Suave (Origem).',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Fino (Piacere Blend)',
                'descricao'  => 'Tinto Seco e Branco Seco.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Rosè',
                'descricao'  => 'Seco e Demi-Sec (Rosário).',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Branco Niágara',
                'descricao'  => 'Seco e Suave.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Espumante Branco (Felicità)',
                'descricao'  => 'Brut, Demi-Sec e Nature.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Espumante Branco (Amabile)',
                'descricao'  => 'Fermentado alcóolico de Jabuticaba e Uva frisante doce.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Romanha
        $empresa = 5;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Tinto',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Branco',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcóolico de Jabuticaba',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Cerveja Artesanal',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Espumantes
        $empresa = 6;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Espumantes',
                'descricao'  => 'Brut Branco Fino, Rosé Demi-Sec, Branco Demi-Sec, Moscatal e Rosé Suave.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Espumante de Jabuticaba',
                'descricao'  => 'Produto Exclusivo.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Grappa',
                'descricao'  => 'Destilado de Uva.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        
        // Tomazelli
        $empresa = 7;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Tinto (Uva Isabel)',
                'descricao'  => 'Seco, Demi Seco e Suave.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinhos Rosê (Uva Niágara Rosada)',
                'descricao'  => 'Seco e Suave.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Branco (Uva Moscato)',
                'descricao'  => 'Seco.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcóolico de Jabuticaba',
                'descricao'  => 'Suave',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Produtos derivados de uva.',
                'descricao'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Produtos da região.',
                'descricao'  => '',
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
