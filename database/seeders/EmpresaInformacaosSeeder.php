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
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa, // https://www.santateresa.es.gov.br/turismo/view/7/servico/view/27
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => 'Localizada no centro de Santa Teresa, recebeu este nome em homenagem à escritora teresense. É composto por três pavimentos ondem encontram-se: no primeiro pavimento a Galeria do Artesanato e da Agroindústria, administrada pela Associação de Produtores de Artesanato e da Agroindústria de Santa Teresa – APROAAST; no segundo pavimento o Museu da Cultura e Imigração Italiana em Santa Teresa; e no terceiro pavimento o Centro de Convivência do Idoso.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            /*[
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => 'Descrição da Missão da Galeria de Artesanato',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => 'Descrição dos Valores da Galeria de Artesanato',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => 'Biografia da Galeria de Artesanato',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros - https://www.instagram.com/aproaast.galeria/
                'descricao'          => 'A Galeria de Artesanato é a sede da Associação de Produtores de Agroindústria e Artesanatos de Santa Teresa (APROAAST), que foi fundada em 1990. A APROAAST comercializa produtos de agricultura familiar e artesanatos em geral provenientes de famílias teresenses.',
                'titulo' => false,
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
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => 'Além da produção de vinhos e do regional fermentado alcóolico de jabuticaba, produz variedades de licores com frutas e ingredientes locais.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Um ambiente acolhedor e familiar. Na propriedade os visitantes podem apreciar o jardim, trocar informações sobre a história da família e curiosidades sobre o processo de fabricação do vinho local.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'A vinícola está localizada no início do Circuito Caravaggio, uma das principais rotas do agroturismo da região e mantém o cultivo de seus parreirais no Vale do Tabocas, região de Santa Teresa, ES.',
                'titulo' => false,
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
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => 'O nome Labiata, foi inspirado na nomenclatura científica da exuberante orquídea Cattleya labiata. O querido e saudoso amigo Augusto Ruschi, sugeriu e incentivou a pesquisa de nomes científicos nos livros disponíveis no Museu de Biologia Professor Mello Leitão, localizado na cidade de Santa Teresa. O encontro do nome Labiata, foi identificação à primeira vista, e assim, deu origem a marca.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Os produtos são de fabricação própria. Vinhos secos, demi-secos e suaves, Fermentado de Jabuticaba, Cachaça Giramundo, Coquetel de Gengibre e Coquetel de Bananinha, Licores naturais e cremosos. Os produtos são elaborados a partir de frutos e especiarias naturais das montanhas capixabas.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'A Cantina Labiata, ponto referencial de venda, está localizada na Cidade de Santa Teresa, rua São Lourenço, nº 635. Espírito Santo. Venda varejo e atacado por encomenda.',
                'titulo' => false,
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
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Mal sabia Atílio que o destino de sua família estava em colonizar terras capixabas. Em 6 de fevereiro de 1895 com apenas 7 anos de idade chegava a Vitória- ES, logo em seguida tomaram destino para região serrana de Santa Teresa-ES com seus pais, o irmão Luciano, a irmã Caterina e muitas outras famílias imigrantes que atravessaram o atlântico no navio Rosário. Nova terra, novo clima , nova língua , novas plantas, novas culturas… A adaptação de sua família em terras capixabas foi muito difícil e cheio de aventuras.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Ao chegarem no município encontraram a jabuticaba, uma fruta nativa da mata Atlântica existente na região, onde produziram vinhos para o consumo da família.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Passou a tradição por gerações, chegando ao seu neto Atilio Mattielo, que fez surgir toda a tradição de seus antepassados, cultivando uvas para a vinificação.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Em março de 1996, Viviane Mattiello, filha de Atilio Mattielo (neto), inaugurou a Cantina Mattiello, que alem de seus produtos próprios,  vinhos, licores, café torrado, sucos e geléias, trabalham com agro turismo, recebendo visitas às parreiras de uvas e proporcionando aos clientes a oportunidade de conhecer o processo de produção dos vinhos e degustação dos produtos ao final do tour.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => '',
                'titulo' => false,
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
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Hoje, além dos vinhos, contamos também com cervejas artesanais da casa, com uma loja para venda de produtos regionais e o Ristorante Romanha, que serve comida regional, baseado na culinária “Italo-Brasileira”, com a receitas centenárias dos nossos antepassados trentinos, ensinadas por nossas “nonas” Italianas.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'O nosso segredo: O amor é o ingrediente principal de nossa receita. Seleção de ingredientes frescos e regionais. Preparo, sabor e qualidade.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Espumantes
        $empresa = 6;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Um feliz acidente. Nenhuma frase poderia explicar tão bem o que seria o início de uma nova fase em nossa família. Um tanto decepcionados com os rumos cada vez mais incertos da agricultura tradicional, decidimos dar uma guinada em nosso foco de trabalho.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Incentivados por novos estudos e alguns profissionais do ramo, arriscamo-nos num território completamente inexplorado por nós até então: a fruticultura. Ainda um tanto receosos com os resultados que tamanha mudança poderia trazer, achamos conveniente e prudente dar início a essa mudança aos poucos. Primeiro, um modesto plantio de pêssego. Em seguida, o plantio de uva, que se tornou a grande protagonista dessa história.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Ainda inexperientes no manejo das novas culturas, levamos algum tempo até dominarmos as técnicas. Foi somente em 2004 (2 anos após os primeiros plantios) que a colheita de uva pôde ser considerada um sucesso. E que sucesso! A safra foi farta, e foi justamente devido a isso que decidimos enveredar por novos caminhos, apenas para garantirmos aproveitamento de toda a produção. Por que não utilizar parte dessa uva na produção de algo que valorizasse ainda mais nosso trabalho? Surgiu assim a idéia de fabricar um produto que estava começando a ficar famoso em nossa região: o vinho.
                ',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Sem maiores pretensões com os resultados, demos início à nossa pequena produção. As dificuldades, obviamente, logo se avolumaram. Sem o maquinário necessário para a elaboração do produto, contamos com o apoio de alguns produtores locais que nos permitiam fazer uso de seus equipamentos.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Foi dessa forma - meio sem saber o que e como estava sendo feito - que ficou pronto o primeiro lote de vinhos da família. À primeira vista, no entanto, parecia que o objetivo não havia sido alcançado. Notamos a formação de pequenas bolhas na garrafa, o que dava ao vinho um aspecto frisante. Pensamos imediatamente que se tratava de um produto que não poderia ser comercializado. Após algumas conversas com enólogos – devendo-se destacar a pessoa de Vinícius Corbellini -, o que estava sendo discutido como erro, poderia ser, na verdade, uma das etapas de fabricação de espumantes pelo método Champenoise, o mais valorizado de todo o mundo, justamente por conferir ao vinho uma qualidade única. Com muita ajuda, resolvemos dar continuidade ao trabalho, sem ter a menor noção do que nos aguardava.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'As novas técnicas deveriam ser observadas com muito mais atenção. Era preciso entender os processos de algo completamente novo. A princípio, cada garrafa de espumante era considerada um “explosivo” em potencial, justamente pela dificuldade em estabilizar o produto. Após muito estudo e muitas tentativas, tudo deu certo. O produto estabilizou e o resultado final foi um vinho espumante com sabor e aroma de excelente qualidade.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Hoje, as técnicas de produção estão dominadas. A variedade de produtos oferecidos pela Casa dos Espumantes (atual nome da empresa) atrai visitantes de todo o estado. Um processo inteiramente artesanal, que utiliza a uva cultivada nas terras da própria família. É dessa pequena propriedade, situada na cidade de Santa Teresa, que tem origem o primeiro espumante capixaba. Uma história que a princípio não tinha caminho, quiçá destino. Uma história de muito trabalho, coragem, estudo e paciência. A história de um acidente que deu certo!',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'O vinho espumante é o resultado da fermentação da uva sã, fresca e madura, diferenciando-se das demais bebidas por passar por um processo de dupla fermentação. Pode-se dizer, portanto, que todo espumante já foi um vinho. No entanto, não é todo vinho que tem potencial para se tornar um bom espumante.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Há três métodos principais para induzir a segunda fermentação: pelo método charmat, de transferência, ou pelo método que nós da Casa dos Espumantes utilizamos: o champenoise.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tomazelli
        $empresa = 7;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Em 1992 Carlos Clarindo tomazelli e Maria Goretti Fontana Tomazelli emigraram para a Itália com o seu filho em busca de melhores condições de vida. Permaneceram no país durante oito anos trabalhando em vinícolas, aprendendo assim, a arte da vitivinicultura.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'No ano 2000 o casal retornou ao Brasil para que sua filha nascesse em solo teresense. Iniciaram então, o plantio de uvas na propriedade da família da forma que haviam aprendido na Itália e a produzir o vinho da mesma maneira, nascendo assim a vinícola Tomazelli. Com  a crescente procura pelos produtos da vinícola começaram  fazer a transição do cultivo de café para uva expandindo cada vez mais a produção artesanal dos vinhos.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'No ano de 2016, ampliaram as atividades inaugurando um restaurante na propriedade, onde continuam trabalhando para oferecer o melhor para seus clientes e amigos.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => 'Missão',
                'titulo' => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => 'Oferecer ao cliente produtos e serviços de alta qualidade desenvolvendo oportunidade de negócios em um ambiente familiar.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => 'Valores',
                'titulo' => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => 'Ética, trabalho familiar, qualidade e responsabilidade, inovação e aprendizado contínuo, respeito e reconhecimento, valorização das pessoas e do trabalho em equipe.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
        ]);

        // Braun
        $empresa = 8;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Fundada em 1992 por Élida Braun e Luiz Henrique Braun, a família produz vinhos a partir de uvas selecionadas em cultivo próprio. Localizada na região do Vale Tabocas, a cantina destaca-se por ser a única vinícola da região fundada por imigrantes Pomeranos e reconhecida pelo domínio nas técnicas de produção com uva cora. Desde sua criação, a cantina ocupa uma posição de prestígio entre os produtores.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Luiz Henrique Germano Braun e sua esposa Elida Thonn Braun, família Pomerana, deu início na produção de uvas no ano de 1990. Hoje, além de produção e distribuição de variedades da fruta, produzem e comercializam sucos e vinhos.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => 'Localizado a cerca de 8km do centro de Santa Teresa, o Vale do Tabocas é uma região responsável por grande parte da produção de uva e vinho do Espírito Santo. Desde quando se mudou para o local, a agricultora Élida Tonn Braun começou a fazer fermentação de jabuticaba. A produção de uvas começou depois, na década de 1990, com o plantio da espécie Niágara Rosada. Em 1992, começou a produção de vinho branco de uva e a bebida era vendida apenas para os vizinhos. Logo depois, veio a produção de uva Isabel para a elaboração do vinho tinto.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Na propriedade da família Braun, a lavoura chega a mil plantas incluindo cerca de 20 variedades de uva. Entre elas, a Cora, a Isabel, a Grano D’oro, a Morro Brasil, a Vitória sem caroço e a Shyrah.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Grotteschi
        $empresa = 9;
        DB::table('empresa_informacaos')->insert([
            /*[
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Após 7 anos de trabalho e investimento chegarmos ao Terre Gialle, o segundo vinho tinto fino de uvas europeias do Estado do Espírito Santo, um assemblage de 65% Syrah e 35% Cabernet Sauvignon.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Ele é um vinho de cor bastante intensa, é rico no nariz, apresentando notas de frutas negras, toque de pimentão e ervas, acidez, taninos aveludados, corpo médio, persistência média, com leve amargor no final. Na boca tem taninos macios, acidez média e boa persistência Grotteschi homenagem à GIOVANNI GROTTESCHI.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'O nome Terre Gialle significa “terras amarelas”, em homenagem à cor da terra do Vale do Tabocas, onde as uvas finas são cultivadas manualmente, dando origem a vinhos que se diferenciam pela riqueza do solo e qualidade das uvas.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Venham nos visitar e apreciar um dos melhores vinhos do estado do Espírito Santo.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tabocas
        $empresa = 10;
        DB::table('empresa_informacaos')->insert([
            /*[
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => 'A Vinícola Tabocas se destaca pela produção de vinhos de qualidade fina com a uva Cabernet Sauvignon, situado no Vale Tabocas em Santa Teresa-ES reconhecida em vários veículos de comunicação pela qualidade na produção.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => 'Típico de regiões frias, o vinho produzido no Vale do Tabocas é o melhor tinto fino seco do país e foi o campeão da Wines of Brazil Awards 2020.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => 'Trabalhamos com quatro variedades de uva: a cabernet sauvignon, a chardonnay, a malbec e a Alvarinho.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => 'Tabocas Madeira, cabernet sauvignon safra 2017 em madeira amazônica medalha de ouro 2020.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Ziviani
        $empresa = 11;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'A partir de 1875, chegaram no Brasil os italianos. E, com o passar do tempo, a família Ziviani começou uma nova morada no Vale do Tabocas, dando início a cultivação e produção de alguns pés de uva.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Dessa forma, como tinha pouco cultivo de uva, e os pés de jabuticabas eram plantas nativas da região, foi assim que meu pai, Victor Ziviani, começou a produzir o fermentado de jabuticaba, somente para o consumo próprio e familiar.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Com isso, sempre tive o sonho de constuir uma Vinícola. E assim, depois de muitos anos chegou uma maior plantação de uva na região do Vale do Tabocas. Diante disso, juntamente com meu marido, Zosimo, e minha família começamos a comercialização de demos início a nossa Vinícola em 2008, com o grande apoio do SEBRAI.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
        ]);

        // AVIST
        $empresa = 12;
        DB::table('empresa_informacaos')->insert([
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'História da AVIST',
                'titulo' => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'A história do vinho em Santa Teresa começa com a chegada dos imigrantes italianos na região onde encontraram a jabuticaba, fruta nativa da mata atlântica, e que a usaram para a produção de um vinho para o consumo das próprias famílias.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Muitas dessas famílias continuaram essa tradição até os dias de hoje. Assim, o fermentado de jabuticaba é reconhecido como um dos nossos produtos mais atrativos.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Depois, veio a uva e hoje temos 9 vinícolas registradas no MAPA em busca constante por melhorias nos nossos vinhos.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 1, // Histórico
                'descricao'          => 'Em 16 de Abril de 2002 foi fundada a AVIST, que é a Associação dos Vitivinicultores de Santa Teresa, para ajudar a desenvolver e fortalecer a vitivinicultura no município.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 7, // Ações
                'descricao'          => 'Ações da AVIST',
                'titulo' => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 7, // Ações
                'descricao'          => 'Em nossas reuniões traçamos algumas ações que julgamos serem prioritárias para alavancar os nossos trabalhos. A primeira é a formalização das vinícolas junto ao MAPA.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 7, // Ações
                'descricao'          => 'Para dar sequência aos trabalhos estamos com dois trabalhos de parceria com o IFES Santa Teresa para formatar de forma digital a rota das vinícolas (este site) e também para contrução de um viveiro de mudas de uvas, jabuticaba, citrus, pantas ornamentais e para reflorestamento que será instalado no campus do IFES em barracão.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 7, // Ações
                'descricao'          => 'Essas são as ações de base para começar a profissionalizar nossa vitivinicultura e melhorar cada vez mais o turismo em Santa Teresa e as vinícolas tem uma contribuição muito importante nesse desenvolvimento e só vai acontecer se estivermos preparados para superar os desafios que naturalmente vamos encontrar.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 7, // Ações
                'descricao'          => 'Gostariamos de destacar a importância de todos os parceiros aqui presentes para realização deste evento e das nossas metas de trabalho. ',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 7, // Ações
                'descricao'          => 'Também parabenizamos as vinícolas que com muito esforço e investimento estão trabalhando para construir esse caminho de sucesso para nosso município.',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 7, // Ações
                'descricao'          => 'Agradeçemos a todos os parceiros pela ajuda na contrução dessa história e com certeza juntos podemos chegar mais longe!!!',
                'titulo' => false,
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
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 2, // Descrição da Empresa
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 3, // Missão
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 4, // Valores
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 5, // Biografia
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 6, // Outros
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'         => $empresa,
                'informacao_tipo_id' => 7, // Ações
                'descricao'          => '',
                'titulo' => false,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */
    }
}
