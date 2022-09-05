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
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Artesanatos',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Produtos regionais',
                'descricao'  => '',
                'hiperlink'  => '',
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
                'nome'       => 'Conheça nossos Vinhos artesanais',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Isabel Tinto',
                'descricao'  => 'Suave, Demi-Sec e Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Bordô Tinto',
                'descricao'  => 'Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Niágara Branco ou Rosè',
                'descricao'  => 'Suave e Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Moscatel Branco',
                'descricao'  => 'Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcoólico',
                'descricao'  => 'Jabuticaba (Tinto Suave).',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Licores',
                'descricao'  => 'Finos e Cremosos (de frutas e ingredientes locais).',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Produtos regionais',
                'descricao'  => 'Doces, compotas, salames, queijos, massas, destilados, etc.',
                'hiperlink'  => '',
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
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho tinto de mesa',
                'descricao'  => 'Seco, demi seco e suave.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Suco',
                'descricao'  => 'Uva Integral.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Coquetel alcóolico',
                'descricao'  => 'Gengibre Giramundo e Bananinha Giramundo.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Cachaça Giramundo',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Licores artesanais',
                'descricao'  => 'Naturais e cremosos.',
                'hiperlink'  => '',
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
                'nome'       => 'Consulte a nossa Carta de Vinhos',
                'descricao'  => 'Clique aqui para ter acesso à nossa carta de vinhos.',
                'hiperlink'  => '/images/04mattiello/Carta_Mattiello.pdf',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcóolico de Jabuticaba',
                'descricao'  => 'Branco Seco e Tinto Suave.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Tinto',
                'descricao'  => 'Seco (Grano D’oro e Seleção), Semi Seco e Suave (Origem).',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Fino (Piacere Blend)',
                'descricao'  => 'Tinto Seco e Branco Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Rosè',
                'descricao'  => 'Seco e Demi-Sec (Rosário).',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Branco Niágara',
                'descricao'  => 'Seco e Suave.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Espumante Branco (Felicità)',
                'descricao'  => 'Brut, Demi-Sec e Nature.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Espumante Branco (Amabile)',
                'descricao'  => 'Fermentado alcóolico de Jabuticaba e Uva frisante doce.',
                'hiperlink'  => '',
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
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Branco',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcóolico de Jabuticaba',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Cerveja Artesanal',
                'descricao'  => '',
                'hiperlink'  => '',
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
                'nome'       => 'Consulte nosso Catálogo de Espumantes',
                'descricao'  => 'Clique aqui para ter acesso ao nosso catálogo de espumantes.',
                'hiperlink'  => 'https://www.flipsnack.com/rkagencia/catalogo-casa-dos-espumantes.html',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Espumantes',
                'descricao'  => 'Brut Branco Fino, Rosé Demi-Sec, Branco Demi-Sec, Moscatal e Rosé Suave.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Espumante de Jabuticaba',
                'descricao'  => 'Produto Exclusivo.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Grappa',
                'descricao'  => 'Destilado de Uva.',
                'hiperlink'  => '',
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
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinhos Rosê (Uva Niágara Rosada)',
                'descricao'  => 'Seco e Suave.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Branco (Uva Moscato)',
                'descricao'  => 'Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcóolico de Jabuticaba',
                'descricao'  => 'Suave',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Produtos derivados de uva.',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Produtos da região.',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Braun
        $empresa = 8;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Tinto',
                'descricao'  => 'Cora, Isabel, Grano D’oro.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Branco',
                'descricao'  => 'Niágara.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Rosé.',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado alcóolico',
                'descricao'  => 'Jabuticaba, Mexerica.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Grappa',
                'descricao'  => 'Destilado de Uva.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Suco de Uva.',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Geléia de Uva.',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Grotteschi
        $empresa = 9;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Tinto Fino (Terre Gialle)',
                'descricao'  => 'Syrah e Cabernet Sauvignon.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinhos Finos.',
                'descricao'  => '',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Suco de Uva',
                'descricao'  => 'Natural Integral.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tabocas
        $empresa = 10;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Tinto Fino',
                'descricao'  => 'Cabernet Sauvignon.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho Orange Fino',
                'descricao'  => 'Alvarinho.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Ziviani
        $empresa = 11;
        DB::table('empresa_produtos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho de mesa tinto Isabel / Violeta',
                'descricao'  => 'Suave, Meio Seco e Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho de mesa tinto Isabel',
                'descricao'  => 'Suave.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho de mesa tinto Bordô',
                'descricao'  => 'Suave e Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho de mesa tinto Bordô Reserva',
                'descricao'  => 'Seco',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho de mesa branco Moscatel',
                'descricao'  => 'Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Vinho de mesa rosé Niágara',
                'descricao'  => 'Suave e Seco.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Fermentado de Jabuticaba',
                'descricao'  => 'Suave e Meio Seco',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Suco',
                'descricao'  => 'Uva Integral.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Licores',
                'descricao'  => 'Jabuticaba, Café, Milho Verde, Chocolate, Chocolate com Menta, Jenipapo, Araçaúna e de Semente de Ameixa.',
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Pó de café arábica',
                'descricao'  => '250g e 500g.',
                'hiperlink'  => '',
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
                'hiperlink'  => '',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */
    }
}
