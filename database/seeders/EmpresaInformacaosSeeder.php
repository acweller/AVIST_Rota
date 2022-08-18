<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaInformacaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();

        // 1 'Histórico'
        // 2 'Descrição da Empresa'
        // 3 'Missão'
        // 4 'Valores'
        // 5 'Biografia'
        // 6 'Outros'

        // 'empresa_id'
        // 'informacao_tipo_id'
        // 'descricao'

        // Galeria de Artesanato
        $empresa = 1;
        DB::table('empresa_informacaos')->insert([
            /*[
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Histórico Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa, // https://www.santateresa.es.gov.br/turismo/view/7/servico/view/27
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => 'Localizada no centro de Santa Teresa, recebeu este nome em homenagem à escritora teresense. É composto por três pavimentos ondem encontram-se: no primeiro pavimento a Galeria do Artesanato e da Agroindústria, administrada pela Associação de Produtores de Artesanato e da Agroindústria de Santa Teresa – APROAAST; no segundo pavimento o Museu da Cultura e Imigração Italiana em Santa Teresa; e no terceiro pavimento o Centro de Convivência do Idoso.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            /*[
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => 'Descrição da Missão da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => 'Descrição dos Valores da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => 'Biografia da Galeria de Artesanato',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros - https://www.instagram.com/aproaast.galeria/
                'descricao'          => 'A Galeria de Artesanato é a sede da Associação de Produtores de Agroindústria e Artesanatos de Santa Teresa (APROAAST), que foi fundada em 1990. A APROAAST comercializa produtos de agricultura familiar e artesanatos em geral provenientes de famílias teresenses.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Rassele
        $empresa = 2;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'A Vinícola Rassele é um dos empreendimentos pioneiros da cidade de Santa Teresa, ES. Iniciou sua história com a vinda de Pietro Rassele para o Brasil, um dos primeiros italianos cultivadores de uvas na Região.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => 'Além da produção de vinhos e do regional fermentado alcóolico de jabuticaba, produz variedades de licores com frutas e ingredientes locais.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Um ambiente acolhedor e familiar. Na propriedade os visitantes podem apreciar o jardim, trocar informações sobre a história da família e curiosidades sobre o processo de fabricação do vinho local.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'A vinícola está localizada no início do Circuito Caravaggio, uma das principais rotas do agroturismo da região e mantém o cultivo de seus parreirais no Vale do Tabocas, região de Santa Teresa, ES.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Labiata
        $empresa = 3;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Nas décadas de 60 e 70, os avós do proprietário, Firmino Doerl, produziam vinho caseiro para a complementação de renda da família, o que despertou interesse em se dedicar e aprimorar as produções ao longo dos anos. A Vinícola Labiata está no mercado desde 1998, criando produtos especiais para serem apreciados em diversas ocasiões. Uma vinícola familiar que prioriza a qualidade de seus produtos.',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => 'O nome Labiata, foi inspirado na nomenclatura científica da exuberante orquídea Cattleya labiata. O querido e saudoso amigo Augusto Ruschi, sugeriu e incentivou a pesquisa de nomes científicos nos livros disponíveis no Museu de Biologia Professor Mello Leitão, localizado na cidade de Santa Teresa. O encontro do nome Labiata, foi identificação à primeira vista, e assim, deu origem a marca.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Os produtos são de fabricação própria. Vinhos secos, demi-secos e suaves, Fermentado de Jabuticaba, Cachaça Giramundo, Coquetel de Gengibre e Coquetel de Bananinha, Licores naturais e cremosos. Os produtos são elaborados a partir de frutos e especiarias naturais das montanhas capixabas.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'A Cantina Labiata, ponto referencial de venda, está localizada na Cidade de Santa Teresa, rua São Lourenço, nº 635. Espírito Santo. Venda varejo e atacado por encomenda.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        /*
        // MODELO
        $empresa = ;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */
    }
}
