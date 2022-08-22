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

        // Mattiello
        $empresa = 4;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'No dia 24 de julho de 1888 , na Comune di Soave , província de Verona, Itália, nascia Atílio Mattiello , filho de Giovanni Mattiello e Margherita Sitta, vitivinicultores natos cuja vinha passava de gerações a gerações.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Mal sabia Atílio que o destino de sua família estava em colonizar terras capixabas. Em 6 de fevereiro de 1895 com apenas 7 anos de idade chegava a Vitória- ES, logo em seguida tomaram destino para região serrana de Santa Teresa-ES com seus pais, o irmão Luciano, a irmã Caterina e muitas outras famílias imigrantes que atravessaram o atlântico no navio Rosário. Nova terra, novo clima , nova língua , novas plantas, novas culturas… A adaptação de sua família em terras capixabas foi muito difícil e cheio de aventuras.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Ao chegarem no município encontraram a jabuticaba, uma fruta nativa da mata Atlântica existente na região, onde produziram vinhos para o consumo da família.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Passou a tradição por gerações, chegando ao seu neto Atilio Mattielo, que fez surgir toda a tradição de seus antepassados, cultivando uvas para a vinificação.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Em março de 1996, Viviane Mattiello, filha de Atilio Mattielo (neto), inaugurou a Cantina Mattiello, que alem de seus produtos próprios,  vinhos, licores, café torrado, sucos e geléias, trabalham com agro turismo, recebendo visitas às parreiras de uvas e proporcionando aos clientes a oportunidade de conhecer o processo de produção dos vinhos e degustação dos produtos ao final do tour.',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],/
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
            ],*/
        ]);

        // Romanha
        $empresa = 5;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'A história da Cantina Romanha começa quando Frederico Romanha, na década de 60, começou a fabricar os primeiros vinhos, sendo uma das vinícolas mais antigas de Santa Teresa.',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
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
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Hoje, além dos vinhos, contamos também com cervejas artesanais da casa, com uma loja para venda de produtos regionais e o Ristorante Romanha, que serve comida regional, baseado na culinária “Italo-Brasileira”, com a receitas centenárias dos nossos antepassados trentinos, ensinadas por nossas “nonas” Italianas.',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'O nosso segredo: O amor é o ingrediente principal de nossa receita. Seleção de ingredientes frescos e regionais. Preparo, sabor e qualidade.',
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
